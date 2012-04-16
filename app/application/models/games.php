<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Games extends MY_Model 
{
    protected $_name = "c_game";
    protected $_primary = "id";
    
    public function fetchAllWithPlatforms()
    {
      $items = $this->fetchAll();
      
      if (!$items) return false;
      
      $this->load->model('Gameplatforms', 'gameplatform');
      
      foreach ($items as $item) {
        $item->platforms = $this->gameplatform->fetchIdsForGame($item->id);
      }
      //dump($items); die;
      return $items;
    }
    
    public function fetchActive()
    {
      return $this->fetchRows(array('where'=>array('is_active'=>1)));
    }
    
    public function fetchAllActiveWithPlatforms()
    {
      $items = $this->fetchActive();
      
      if (!$items) return false;
      
      $this->load->model('Gameplatforms', 'gameplatform');
      
      foreach ($items as $item) {
        $item->platforms = $this->gameplatform->fetchIdsForGame($item->id);
      }
      //dump($items); die;
      return $items;
    }
    
    public function fetchLastReleased() 
    {
      $result = $this->fetchRows(array('where'=>array('is_active'=>1), 'order'=>array('by'=>'released', 'dest'=>'desc'), 'limit'=>1, 'offset'=>0), true);
      
      if (!$result) return false;
      
      $this->load->model('Gameplatforms', 'gameplatforms');
      
      $result->platforms = $this->gameplatforms->fetchForGame($result->id);
      
      return $result;
    }
    
    public function activate($id) 
    {
      if (!$id) return false;
      
      return $this->update(array('is_active'=>1), $id);
    }
    
    public function inactivate($id) 
    {
      if (!$id) return false;
      
      return $this->update(array('is_active'=>null), $id);
    }

    public function fetchForLayout($section)
    {
      $result = $this->fetchRows(
        array('where'=>array('is_active'=>1, "is_$section"=>1), 
              'order'=>array('by'=>"order_$section", 'dest'=>'asc'))
      );
      
      $d = array();
      $max = ($section === 'on_mainpage' ? 4 : 5);
      
      $this->load->model('Analytics', 'analytics');
      
      for ( $i=0; $i < $max; $i++ ) {
        $d[$i] = $this->_getByOrder($result, "order_$section", $i);   

        if ($d[$i]) {
          $d[$i]->analytics = $this->analytics->fetchByGame($d[$i]->id);
        }
      }
      
      return $d;
    }
    
    public function fetchByUrl($url, $allInfo = false) 
    {
      $result = $this->fetchRows(array('where'=>array('url'=>$url)), true);
      
      if (!$result) return false;
      
      $this->load->model('Gameplatforms', 'gameplatforms');
      
      $result->platforms = $this->gameplatforms->fetchForGame($result->id);
      
      if ($allInfo) {
        
        $this->load->model('Gameimages', 'images');
        $result->images = $this->images->fetchForGame($result->id, true);
        $result->images_is_empty = $this->images->orderedArrayIsEmpty($result->images);

        $this->load->model('Gamevideos', 'videos');
        $result->videos = $this->videos->fetchForGame($result->id);        
        $result->videos_is_empty = $this->videos->orderedArrayIsEmpty($result->videos);        
        
        $this->load->model('Crosspromos', 'promo');
        $result->crosspromo = $this->promo->fetchByGame($result->id);
        $result->crosspromo_is_empty = $this->promo->orderedArrayIsEmpty($result->crosspromo);
        
      }
      
      $this->load->model('Analytics', 'analytics');
      $result->analytics = $this->analytics->fetchByGame($result->id);
      //dump($result);
      return $result;      
    }
    
    public function getMeta($url) 
    {
      $game = $this->fetchByUrl($url);
      
      if (!$game) return false;
      
      $this->load->model('Meta', 'meta');
      
      return $this->meta->find($game->meta_id);      
    }
    
    public function fetchWithCrosspromo()
    {
      return $this->execute("select g.*, (select count(id) from ic_crosspromo where base_game_id = g.id ) as count from $this->_name g where g.is_active=1");
    }
    
    public function setupAnalytics($id) 
    {
      if (!$id) return false;
      /*      
        főoldalról hero a product page-re	home	játék neve	hero	fájl_név	timestamp	Banner	Click																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								
        főoldalról teaser a product page-re	home	játék neve	teaser	fájl_név	timestamp	Banner	Click																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								
        főoldalról footer a product page-re	home	játék neve	footer	fájl_név	timestamp	Link	Click																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								
        all product-ról a product page-re	all_product	játék neve	button		timestamp	Inbound link	Click	
        more games menüből a product page-re	more_games	játék neve	icon	fájl_név	timestamp	Banner	Click																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																								
      */      
      
      $game = $this->find($id);
      
      if (!$game) return false;
      
      $this->load->model('Analytics', 'analytics');
      
      $this->analytics->delete(array('game_id'=>$id));
      
      $data = array();
      
      $hero = array(
        'game_id'=>$game->id,
        'type'=>'hero',
        'ga_category'=>'Banner',
        'ga_action'=>'Click',
        'ga_value'=>1,
        'ga_label'=>'Home - '.$game->name.' - Hero - '.strip_ext($game->hero_image),
      );
      
      $teaser = array(
        'game_id'=>$game->id,
        'type'=>'teaser',
        'ga_category'=>'Banner',
        'ga_action'=>'Click',
        'ga_value'=>1,
        'ga_label'=>'Home - '.$game->name.' - Teaser - '.strip_ext($game->teaser_image),
      );
      
      $footer = array(
        'game_id'=>$game->id,
        'type'=>'footer',
        'ga_category'=>'Link',
        'ga_action'=>'Click',
        'ga_value'=>1,
        'ga_label'=>'Footer - ' . $game->name . ' - Footer - '.time(),
      );
      
      $moreGames = array(
        'game_id'=>$game->id,
        'type'=>'more_games',
        'ga_category'=>'Banner',
        'ga_action'=>'Click',
        'ga_value'=>1,
        'ga_label'=>'More games - '.$game->name.' - Icon - '.strip_ext($game->logo),
      );
      
      $allGames = array(
        'game_id'=>$game->id,
        'type'=>'all_games',
        'ga_category'=>'Inbound link',
        'ga_action'=>'Click',
        'ga_value'=>1,
        'ga_label'=>'All products - '.$game->name.' - Button - '.time(),
      );
      $data[] = $hero;
      $data[] = $teaser;
      $data[] = $footer;
      $data[] = $moreGames;
      $data[] = $allGames;
      
      $this->analytics->bulk_insert($data);
    }
    
    private function _getByOrder($items, $column, $order) 
    {
      foreach( $items as $item ) {
        if ($item->$column == $order) {
          return $item;
        }
      }
      
      return false;
    }
}
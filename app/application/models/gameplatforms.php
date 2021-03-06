<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Gameplatforms extends MY_Model 
{
    protected $_name = "c_game_platform";
    protected $_primary = "id";
    
    public function fetchForGame($gameId, $withAnalytics = true) 
    {
      if (!$gameId) return false;
      
      $result = $this->fetchRows(array('join'=>array(array('table'=>'c_platform', 'condition'=>'c_platform.id = c_game_platform.platform_id', 'columns'=>array('name', 'image'))), 'where'=>array('game_id'=>$gameId)));
      
      if ($result && $withAnalytics) {
        $this->load->model('Gameplatformanalytics', 'gpa');
        
        foreach ($result as $item) {
          $item->analytics = $this->gpa->fetchForGamePlatform($item->id);
        }
      }
      //dump($result); die;
      return $result;
    }
    
    public function fetchIdsForGame($gameId)
    {
      $platforms = $this->fetchForGame($gameId);
      
      if (!$platforms) return false;
      
      $return = array();
      foreach ($platforms as $item) $return[] = $item->platform_id;
      
      return $return;
    }
    
    public function deleteByGame($gameId) 
    {
      if (!$gameId) return false;
      
      return $this->delete(array('game_id'=>$gameId));
    }
    
    // not used
    public function insertPlatformsForGame($gameId, $platforms) 
    {
      if (!$gameId || !$platforms) return false;
      
      $this->load->model('Games', 'game');
      $this->load->model('Platforms', 'platform');
      
      $game = $this->game->find($gameId);
      
      if (!$game) return false;
      
      foreach ($platforms as $p) {
        $platform = $this->model->find($p);
        $this->insert(array(
          'game_id'=>$gameId, 
          'platform_id'=>$p,
          'ga_category'=>'Store',
          'ga_action'=>'Click',
          'ga_value'=>1,
          'ga_label'=>$game->name . ' - ' . $platform->name,
        ));
      }
      
      return true;
    }
    
    public function setupAnalytics($id)
    {
      if (!$id) return false;
      
      $item = $this->find($id);
      
      if (!$item) return false;
      
      $locations = array('all_games', 'product_page');
      
      $this->load->model('Games', 'games');
      $this->load->model('Platforms', 'platforms');
      
      $game = $this->games->find($item->game_id);
      $platform = $this->platforms->find($item->platform_id);
      
      if (!$game || !$platform) return false;
      
      $this->load->model('Gameplatformanalytics', 'analytics');
      
      $data = array();
      $data['game_platform_id'] = $id;
      $data['ga_value'] = 1;
      $data['ga_action'] = 'Click';
      $data['ga_category'] = 'Outbound link';
      
      $data['ga_label'] = 'All product - ' . $platform->name . ' - button - ' . time();
      $data['location'] = $locations[0];
      $this->analytics->insert($data);
      
      $data['ga_label'] = $game->name . ' - ' . $platform->name . ' - button - ' . time();
      $data['location'] = $locations[1];
      $this->analytics->insert($data);
      
      return true;
    }
    
    public function updateAnalytics($platform) 
    {
      if (!$platform) return false;
      
      $this->load->model('Gameplatformanalytics', 'analytics');
      
      $gamePlatforms = $this->fetchBy('platform_id', $platform);
      
      if (!$gamePlatforms) return false;
      
      foreach ($gamePlatforms as $gp) {
        $this->analytics->delete(array('game_platform_id'=>$gp->id));
        
        $this->setupAnalytics($gp->id);
      }
      
      return true;
    }
    
    public function has($column, $params) 
    {
      if (!$params) return false;
      
      $this->load->model('Games', 'games');
      
      $game = $this->games->fetchByUrl($params['game_name']);
      
      if (!$game) {
        return false;
      }
      
      $type = $params['type'];
      
      $platforms = array();
      switch ($type) {
        case 'ipad':
          $params = array(5);
          break;
        case 'iphone':
        case 'imac':
          $params = array(1, 2);
          break;
        case 'android':
          $params = array(7, 8);
          break;
        case 'amazon':
          $params = array(14);
          break;
      }
      
      if (empty($params)) return false;
      
      $platformIds = implode(',', $params);
      
      $sql = "select $column from $this->_name where game_id=$game->id and platform_id in ($platformIds)";
      
      $result = $this->execute($sql);
      
      if (!$result) return 0;
      
      foreach ($result as $item) {
        if ($item->price) return 1;
      }
      
      return 0;
    }
}

  
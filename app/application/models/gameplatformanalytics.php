<?php 

if (! defined('BASEPATH')) exit('No direct script access');

class Gameplatformanalytics extends MY_Model 
{
    protected $_name = "ic_game_platorm_analyitcs";
    protected $_primary = "id";
    
    public function fetchForGamePlatform($id) 
    {
    {
      if (!$id) return false;
      
      $result = $this->fetchBy('game_platform_id', $id);
      
      if (!$result) return false;
      
      $return = array();
      foreach ($result as $r) {
        $return[$r->location] = $r;
      }
      
      return $return;
    }
    }
}
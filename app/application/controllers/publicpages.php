<?php 

if (! defined('BASEPATH')) exit('No direct script access');

require_once(APPPATH.'core/Page_Controller'.EXT);

class Publicpages extends Page_Controller 
{
  public function __construct()
  {
    parent::__construct();
  }
  
  public function index()
  {
    $this->template->build('invictus/index', $this->data);
  }
  
  public function contact()
  {
    
    $this->load->model('Contacts', 'model');
    $this->load->model('Contacttypes', 'types');
    
    $this->data['contacts'] = $this->model->fetchAll();
    $this->data['emails'] = $this->types->fetchAll(array('order'=>array('by'=>'order', 'dest'=>'asc')));    
    
    $this->template->build('invictus/contact', $this->data);
  }
  
  public function jobs()
  {
    $this->load->model('Jobs', 'model');
    
    $data['jobs'] = $this->model->fetchAllJobsByCategory();    
    $data['latest_job'] = $this->model->fetchLatestJob();
    
    $this->template->build('invictus/jobs', $this->data);
  } 
  
  public function game() 
  {
    $url = $this->uri->segment(2) ? $this->uri->segment(2) : 'all';
    
    $this->load->model('Games', 'games');
    
    if ($url === 'all') {
      $this->load->model('Platforms', 'platforms');
      
      $this->data['platforms'] = $this->platforms->fetchAll();
      
      $this->data['games'] = $this->games->fetchAllActiveWithPlatforms();
      
      $this->data['game'] = $this->games->fetchLastReleased();
      
      $view = 'games';
    } else {
      
      $this->data['game'] = $this->games->fetchByUrl($url);
      
      $view = 'game';
    }
    
    $this->template->build('invictus/'.$view, $this->data);
  }
}
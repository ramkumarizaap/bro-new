<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH."libraries/Admin_controller.php");

class Yorksite extends Admin_controller 
{
  function __construct()
  {
    parent::__construct();
    if(!is_logged_in())
    	redirect('login');
    $this->load->model('york_model');
  }  
  public function index()
  {
  	$this->layout->add_javascripts(array('listing'));
    $this->load->library('listing');
    $this->simple_search_fields = array('company_name' => 'Company Name','first_name'=>'Name','email1'=>'Email','office_phone'=>'Phone');
    $this->_narrow_search_conditions = array("start_date");
    $str = '';    
    $this->listing->initialize(array('listing_action' => $str));
    $listing = $this->listing->get_listings('york_model', 'listing');
    $this->data['btn'] = "";
    if($this->input->is_ajax_request())
      $this->_ajax_output(array('listing' => $listing), TRUE);
    $this->data['bulk_actions'] = array('' => 'select', 'delete' => 'Delete');
    $this->data['simple_search_fields'] = $this->simple_search_fields;
    $this->data['search_conditions'] = $this->session->userdata($this->namespace.'_search_conditions');
    $this->data['per_page'] = $this->listing->_get_per_page();
    $this->data['per_page_options'] = array_combine($this->listing->_get_per_page_options(), $this->listing->_get_per_page_options());
    $this->data['search_bar'] = $this->load->view('frontend/yorksite/search_bar', $this->data, TRUE);
    $this->data['listing'] = $listing;
    $this->data['grid'] = $this->load->view('listing/view', $this->data, TRUE);
    $this->layout->view("frontend/yorksite/index");
  }
    
}
?>
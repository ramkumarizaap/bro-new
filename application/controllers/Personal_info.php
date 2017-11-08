<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH."libraries/Admin_controller.php");

class Personal_info extends Admin_controller 
{
	 protected $_personal_validation_rules =    array (
                                // array('field' => 'first_name', 'label' => 'First Name', 'rules' => 'trim|required'),
                                // array('field' => 'middle_name', 'label' => 'Middle Name', 'rules' => 'trim'),
                                // array('field' => 'last_name', 'label' => 'Last Name', 'rules' => 'trim|required'),
                                array('field' => 'mason', 'label' => 'Mason', 'rules' => 'trim|required'),
                                // array('field' => 'status', 'label' => 'Status', 'rules' => 'trim|required'),
                                // array('field' => 'is_admin', 'label' => 'Is Admin?', 'rules' => 'trim|required'),
                                // array('field' => 'mobile', 'label' => 'Email', 'rules' => 'trim'),
                                // array('field' => 'phone', 'label' => 'Home', 'rules' => 'trim|required'),
                                // array('field' => 'work', 'label' => 'Email', 'rules' => 'trim'),
                                // array('field' => 'off_email', 'label' => 'Office Email', 'rules' => 'trim'),
                                // array('field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'),
                                // array('field' => 'password', 'label' => 'Password', 'rules' => 'trim'),
                                // array('field' => 'dob', 'label' => 'D.O.B', 'rules' => 'trim|required'),
                                // array('field' => 'b_city', 'label' => 'Birth City', 'rules' => 'trim|required'),
                                // array('field' => 'b_state', 'label' => 'Birth State', 'rules' => 'trim|required'),
                                // array('field' => 'address1', 'label' => 'Address 1', 'rules' => 'trim|required'),
                                // array('field' => 'address2', 'label' => 'Address 2', 'rules' => 'trim'),
                                // array('field' => 'city', 'label' => 'City', 'rules' => 'trim|required'),
                                // array('field' => 'state', 'label' => 'State', 'rules' => 'trim|required'),
                                // array('field' => 'zip', 'label' => 'Zip', 'rules' => 'trim|required'),
                                // array('field' => 'w_address1', 'label' => 'Address 1', 'rules' => 'trim'),
                                // array('field' => 'w_address2', 'label' => 'Address 2', 'rules' => 'trim'),
                                // array('field' => 'w_city', 'label' => 'City', 'rules' => 'trim'),
                                // array('field' => 'w_state', 'label' => 'State', 'rules' => 'trim'),
                                // array('field' => 'w_zip', 'label' => 'Zip', 'rules' => 'trim'),
                                // array('field' => 'york_rite', 'label' => 'York Rite', 'rules' => 'trim|required'),
                                // array('field' => 'scottish_rite', 'label' => 'Scottish Rite', 'rules' => 'trim'),
                                // array('field' => 'shriner', 'label' => 'Shriner', 'rules' => 'trim'),
                                // array('field' => 'grotto', 'label' => 'Grotto', 'rules' => 'trim'),
                                // array('field' => 'spouse', 'label' => 'Spouse', 'rules' => 'trim'),
                                // array('field' => 'kids', 'label' => 'Kids', 'rules' => 'trim')
                                );
	function __construct()
  {
    parent::__construct();
    
    if(!is_logged_in())
      redirect('login');
    $this->data['editdata'] = get_user_info();
    $this->load->model('personal_model');
  }  
  public function add()
  {
  	try
    {
      $edit_id = $this->input->post('id');
      $this->form_validation->set_rules($this->_personal_validation_rules);
      $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
      if($this->form_validation->run())
      {
      }
      $status = "error";
    }
    catch (Exception $e)
    {
      $status   = 'error';
      $msg  = $e->getMessage();
    }
  	$output = $this->load->view('frontend/personal/profile',$this->data,true);
    return $this->_ajax_output(array('status' => $status, 'output' => $output, 'edit_id' =>"","msg"=>$_POST), TRUE);
  }
}
?>
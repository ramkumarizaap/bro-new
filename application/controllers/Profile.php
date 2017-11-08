<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH."libraries/Admin_controller.php");

class Profile extends Admin_controller 
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
   protected $_chapter_validation_rules =    array (
    array('field' => 'chapter_name', 'label' => 'Chapter Name', 'rules' => 'trim|required'));
  function __construct()
  {
    parent::__construct();
    
    if(!is_logged_in())
      redirect('login');
    $this->data['editdata'] = get_user_info();
    $this->load->model('personal_model');
  }  
  public function index()
  {    
    $this->data['editdata'] = get_user_info();
    $this->data['profile'] = $this->load->view("frontend/personal/profile",$this->data,true);
    $this->layout->view('frontend/profile');
  }

  // public function profile_add()
  // {
  //   try
  //   {
  //     $edit_id = $this->input->post('id');
  //     $this->form_validation->set_rules($this->_personal_validation_rules);
  //     $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
  //     if($this->form_validation->run())
  //     {
  //     }
  //     else
  //     {
  //       $this->data['editdata'] = array("info"=>array("user_id"=>"","first_name"=>"","status"=>"","is_admin"=>"","password"=>"","middle_name"=>"","last_name"=>"","home_blue_lodge"=>"","phone"=>"","photo"=>"","email"=>""),"personal"=>array("mobile"=>"","work"=>"","off_email"=>"","dob"=>"","b_city"=>"","b_state"=>"","notes"=>"mason",""=>""),"home_address"=>array("address1"=>"","address2"=>"","city"=>"","state"=>"","zip"=>""),"work_address"=>array("w_address1"=>"","w_address2"=>"","w_city"=>"","w_state"=>"","w_zip"=>""),"affiliations"=>array("york_rite"=>"","scottish_rite"=>"","shriner"=>"","grotto"=>""),"family"=>array("spouse"=>"","kids1"=>"","kids2"=>"","kids3"=>"","kids4"=>""));
  //       $status = 'error';
  //     }
  //   }
  //   catch (Exception $e)
  //   {
  //     $status   = 'error';
  //     $msg  = $e->getMessage();
  //   }  
  //   $info = get_user_info();
  //   if($info)
  //   {
  //     $info['kids1'] = $info['kids2'] = $info['kids3'] = $info['kids4'] = "";
  //     if($info['family']['kids'])
  //     {
  //       $kids = explode(",",$info['family']['kids']);
  //       $info['kids1'] = $kids[0];
  //       $info['kids2'] = $kids[1];
  //       $info['kids3'] = $kids[2];
  //       $info['kids4'] = $kids[3];
  //     }
  //   }
  //   $this->data['editdata'] = $info;
  //   if($this->input->is_ajax_request())
  //   {
  //     $output = $this->load->view('frontend/personal/profile',$this->data,true);
  //     return $this->_ajax_output(array('status' => $status, 'output' => $output, 'edit_id' =>"","msg"=>$_POST), TRUE);
  //   }
  //   else
  //     $this->layout->view('frontend/personal/profile',$this->data);
  // }
  
  // public function chapter_add()
  // {
  //   $this->form_validation->set_rules($this->_chapter_validation_rules);
  //   $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
  //   if($this->form_validation->run())
  //   {
  //   }
  //   $status = "error";
  //   $output = $this->load->view('frontend/personal/chapter',$this->data,true);
  //   return $this->_ajax_output(array('status' => $status, 'output' => $output, 'edit_id' =>"","msg"=>$_POST), TRUE);
  // }
    
}
?>
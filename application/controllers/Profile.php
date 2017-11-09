<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH."libraries/Admin_controller.php");

class Profile extends Admin_controller 
{
   protected $_personal_validation_rules =    array (
                                array('field' => 'first_name', 'label' => 'First Name', 'rules' => 'trim|required'),
                                array('field' => 'middle_name', 'label' => 'Middle Name', 'rules' => 'trim'),
                                array('field' => 'last_name', 'label' => 'Last Name', 'rules' => 'trim|required'),
                                array('field' => 'mason', 'label' => 'Mason', 'rules' => 'trim|required'),
                                array('field' => 'status', 'label' => 'Status', 'rules' => 'trim|required'),
                                array('field' => 'is_admin', 'label' => 'Is Admin?', 'rules' => 'trim|required'),
                                array('field' => 'mobile', 'label' => 'Email', 'rules' => 'trim'),
                                array('field' => 'phone', 'label' => 'Home', 'rules' => 'trim|required'),
                                array('field' => 'work', 'label' => 'Email', 'rules' => 'trim'),
                                array('field' => 'off_email', 'label' => 'Office Email', 'rules' => 'trim'),
                                array('field' => 'email', 'label' => 'Email', 'rules' => 'trim|required|valid_email'),
                                array('field' => 'password', 'label' => 'Password', 'rules' => 'trim'),
                                array('field' => 'dob', 'label' => 'D.O.B', 'rules' => 'trim|required'),
                                array('field' => 'b_city', 'label' => 'Birth City', 'rules' => 'trim|required'),
                                array('field' => 'b_state', 'label' => 'Birth State', 'rules' => 'trim|required'),
                                array('field' => 'address1', 'label' => 'Address 1', 'rules' => 'trim|required'),
                                array('field' => 'address2', 'label' => 'Address 2', 'rules' => 'trim'),
                                array('field' => 'city', 'label' => 'City', 'rules' => 'trim|required'),
                                array('field' => 'state', 'label' => 'State', 'rules' => 'trim|required'),
                                array('field' => 'zip', 'label' => 'Zip', 'rules' => 'trim|required'),
                                array('field' => 'w_address1', 'label' => 'Address 1', 'rules' => 'trim'),
                                array('field' => 'w_address2', 'label' => 'Address 2', 'rules' => 'trim'),
                                array('field' => 'w_city', 'label' => 'City', 'rules' => 'trim'),
                                array('field' => 'w_state', 'label' => 'State', 'rules' => 'trim'),
                                array('field' => 'w_zip', 'label' => 'Zip', 'rules' => 'trim'),
                                array('field' => 'york_rite', 'label' => 'York Rite', 'rules' => 'trim|required'),
                                array('field' => 'scottish_rite', 'label' => 'Scottish Rite', 'rules' => 'trim'),
                                array('field' => 'shriner', 'label' => 'Shriner', 'rules' => 'trim'),
                                array('field' => 'grotto', 'label' => 'Grotto', 'rules' => 'trim'),
                                array('field' => 'spouse', 'label' => 'Spouse', 'rules' => 'trim'),
                                array('field' => 'kids', 'label' => 'Kids', 'rules' => 'trim')
                                );
   protected $_chapter_validation_rules =    array (
              array('field' => 'chapter_name', 'label' => 'Chapter Name', 'rules' => 'trim|required'),
              array('field' =>'chapter_no','label' =>'Chapter No','rules' =>'trim|required'),
              array('field' =>'district_no','label' =>'District No','rules' =>'trim|required'),
              array('field' =>'top_line_signer','label' =>'Top Line Signer','rules' =>'trim|required'),
              array('field' =>'date_joined','label' =>'Date Joined','rules' =>'trim|required'),
              array('field' =>'king','label' =>'King','rules' =>'trim|required')
            );
   protected $_council_validation_rules =    array (
              array('field' =>'council_name','label' =>'Council Name','rules' =>'trim|required'),
              array('field' =>'council_no','label' =>'Council No','rules' =>'trim|required'),
              array('field' =>'district_no','label' =>'District No','rules' =>'trim|required'),
              array('field' =>'top_line_signer','label' =>'Top Line Signer','rules' =>'trim|required'),
              // array('field' =>'most_il_master','label' =>'Most Il Master','rules' =>'trim|required'),
              // array('field' =>'district_il_master','label' =>'District Il Master','rules' =>'trim|required'),
            );
   protected $_commandery_validation_rules =    array (
          array('field' =>'comm_name','label' =>'Commandary Name','rules' =>'trim|required'),
          array('field' =>'comm_no','label' =>'Commandery No','rules' =>'trim|required'),
          array('field' =>'district_no','label' =>'District No','rules' =>'trim|required'),
          array('field' =>'top_line_signer','label' =>'Top Line Signer','rules' =>'trim|required'),
          array('field' =>'date_joined','label' =>'Date Joined','rules' =>'trim|required'),
          // $this->form_validation->set_rules('master_emi_cmdr','Master Emi Cmdr','trim|required');
          // $this->form_validation->set_rules('district_emi_cmdr','District High Priest','trim|required');
        );
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

  public function profile_add($edit_id='')
  {
    try
    {
      if($this->input->post('id'))
        $edit_id = $this->input->post('id');
      $this->form_validation->set_rules($this->_personal_validation_rules);
      $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
      if(count($_POST) && $this->form_validation->run())
      {
        $form = $this->input->post();
        $edit_id = $form['id'];
        if(isset($_FILES['file']['name']) && $_FILES['file']['size']>0)
        {
          $ins['photo'] = "assets/img/profile/".$this->do_upload()['file_name'];
        }
        /* Users Table*/
        $ins['first_name'] = $form['first_name'];
        $ins['middle_name'] = $form['middle_name'];
        $ins['last_name'] = $form['last_name'];
        $ins['email'] = $form['email'];
        if($form['password']!='')
          $ins['password'] = md5($form['password']);
        $ins['home_blue_lodge'] = $form['home_blue_lodge'];
        $ins['phone'] = $form['phone'];
        $ins['role_id'] = "2";
        $ins['status'] = $form['status'];
        /*Personal Info Table*/
        $ins1['mobile'] = $form['mobile'];
        $ins1['work'] = $form['work'];
        $ins1['off_email'] = $form['off_email'];
        $ins1['dob'] = date("Y-m-d",strtotime($form['dob']));
        $ins1['b_city'] = $form['b_city'];
        $ins1['b_state'] = $form['b_state'];
        $ins1['mason'] = $form['mason'];
        /*Home Address Table*/
        $ins2['address1'] = $form['address1'];
        $ins2['address2'] = $form['address2'];
        $ins2['city'] = $form['city'];
        $ins2['state'] = $form['state'];
        $ins2['zip'] = $form['zip'];
        /*Work Address Table*/
        $ins3['w_address1'] = $form['w_address1'];
        $ins3['w_address2'] = $form['w_address2'];
        $ins3['w_city'] = $form['w_city'];
        $ins3['w_state'] = $form['w_state'];
        $ins3['w_zip'] = $form['w_zip'];
        /*Affiliations Table*/
        $ins4['york_rite'] = $form['york_rite'];
        $ins4['scottish_rite'] = $form['scottish_rite'];
        $ins4['shriner'] = $form['shriner'];
        $ins4['grotto'] = $form['grotto'];
        /*Family Table*/
        $ins5['spouse'] = $form['spouse'];
        $kid1 = ($form['kids1']!='')?$form['kids1'].",":"";
        $kid2 = ($form['kids2']!='')?$form['kids2'].",":"";
        $kid3 = ($form['kids3']!='')?$form['kids3']:"";
        $ins5['kids'] = rtrim($kid1.$kid2.$kid3,",");
        if($edit_id)
        {
          $ins_id = $this->personal_model->update(array("id"=>$edit_id),$ins,"users");
          $msg = "Personal Info updated successfully.";
        }
        else
        {
          $ins['created_by'] = get_current_user_id();
          $ins_id = $this->personal_model->insert($ins,"users");
          $msg = "Personal Info inserted successfully.";
        }
        $chk1 = $this->personal_model->get_where(array("user_id"=>$edit_id),"id","personal_info")->row_array();
        $chk2 = $this->personal_model->get_where(array("user_id"=>$edit_id),"id","home_address")->row_array();
        $chk3 = $this->personal_model->get_where(array("user_id"=>$edit_id),"id","work_address")->row_array();
        $chk4 = $this->personal_model->get_where(array("user_id"=>$edit_id),"id","affiliations")->row_array();
        $chk5 = $this->personal_model->get_where(array("user_id"=>$edit_id),"id","family")->row_array();
        if($chk1)
          $ins_id1 = $this->personal_model->update(array("user_id"=>$edit_id),$ins1,"personal_info");
        else
        {
          $ins1['user_id'] = $edit_id;
          $ins_id1 = $this->personal_model->insert($ins1,"personal_info");
        }
        if($chk2)
          $ins_id2 = $this->personal_model->update(array("user_id"=>$edit_id),$ins2,"home_address");
        else
        {
          $ins2['user_id'] = $edit_id;
          $ins_id2 = $this->personal_model->insert($ins2,"home_address");
        }
        if($chk3)
          $ins_id3 = $this->personal_model->update(array("user_id"=>$edit_id),$ins3,"work_address");
        else
        {
          $ins3['user_id'] = $edit_id;
          $ins_id3 = $this->personal_model->insert($ins3,"work_address");
        }
        if($chk4)
          $ins_id4 = $this->personal_model->update(array("user_id"=>$edit_id),$ins4,"affiliations");
        else
        {
          $ins4['user_id'] = $edit_id;
          $ins_id4 = $this->personal_model->insert($ins4,"affiliations");
        }
        if($chk5)
          $ins_id5 = $this->personal_model->update(array("user_id"=>$edit_id),$ins5,"family");
        else
        {
          $ins5['user_id'] = $edit_id;
          $ins_id5 = $this->personal_model->insert($ins5,"family");
        }
        $status = 'success';
        $msg = "Profile updated successfully";
      }
      else
      {
        $this->data['editdata'] = array("info"=>array("user_id"=>"","first_name"=>"","status"=>"","is_admin"=>"","password"=>"","middle_name"=>"","last_name"=>"","home_blue_lodge"=>"","phone"=>"","photo"=>"","email"=>""),"personal"=>array("mobile"=>"","work"=>"","off_email"=>"","dob"=>"","b_city"=>"","b_state"=>"","notes"=>"mason",""=>""),"home_address"=>array("address1"=>"","address2"=>"","city"=>"","state"=>"","zip"=>""),"work_address"=>array("w_address1"=>"","w_address2"=>"","w_city"=>"","w_state"=>"","w_zip"=>""),"affiliations"=>array("york_rite"=>"","scottish_rite"=>"","shriner"=>"","grotto"=>""),"family"=>array("spouse"=>"","kids1"=>"","kids2"=>"","kids3"=>"","kids4"=>""));
        $status = 'error';
      }
    }
    catch (Exception $e)
    {
      $status   = 'error';
      $msg  = $e->getMessage();
    }  
    $info = get_user_info();
    if($info)
    {
      $info['kids1'] = $info['kids2'] = $info['kids3'] = $info['kids4'] = "";
      if($info['family']['kids'])
      {
        $kids = explode(",",$info['family']['kids']);
        $info['kids1'] = $kids[0];
        $info['kids2'] = $kids[1];
        $info['kids3'] = $kids[2];
        $info['kids4'] = $kids[3];
      }
    }
    $this->data['editdata'] = $info;
    if($this->input->is_ajax_request())
    {
      $output = $this->load->view('frontend/personal/profile',$this->data,true);
      return $this->_ajax_output(array('status' => $status, 'output' => $output, 'edit_id' =>"","msg"=>$msg), TRUE);
    }
    else
      $this->layout->view('frontend/personal/profile',$this->data);
  }
  
  public function chapter_add($edit_id='')
  {
    $msg = "";
    $user = get_user_data();
    try
    {
      $this->form_validation->set_rules($this->_chapter_validation_rules);
      $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
      if(count($_POST) && $this->form_validation->run())
      {
        $form = $this->input->post();
        $edit_id = $this->input->post('id');
        $ins_data['user_id']                   = $form['user_id'];
        $ins_data['chapter_name']              = $form['chapter_name'];
        $ins_data['chapter_no']                = $form['chapter_no'];
        $ins_data['district_no']               = $form['district_no'];
        $ins_data['top_line_signer']           = $form['top_line_signer'];
        $ins_data['second_line_signer']        = $form['second_line_signer'];
        $ins_data['date_joined']               = date("Y-m-d",strtotime($form['date_joined']));
        $ins_data['most_high_priest']          = $form['most_high_priest'];
        $ins_data['year1']                     = $form['year1'];
        $ins_data['district_high_priest']      = $form['district_high_priest'];
        $ins_data['year2']                     = $form['year2'];
        $ins_data['hight_priest']              = $form['hight_priest'];
        $ins_data['year3']                     = $form['year3'];
        $ins_data['king']                      = $form['king'];
        $ins_data['scribe']                    = $form['scribe'];
        $ins_data['secretary']                 = $form['secretary'];
        $ins_data['treasurer']                 = $form['treasurer'];
        $ins_data['capt_host']                 = $form['capt_host'];
        $ins_data['principal_sojourner']       = $form['principal_sojourner'];
        $ins_data['ra_captain']                = $form['ra_captain'];
        $ins_data['master_vef_1']              = $form['master_vef_1'];
        $ins_data['master_vef_2']              = $form['master_vef_2'];
        $ins_data['master_vef_3']              = $form['master_vef_3'];
        $ins_data['chaptain']                  = $form['chaptain'];
        $ins_data['sentinel']                  = $form['sentinel'];
        if($edit_id)
        {
          $msg = 'Chapter updated successfully';
          $this->personal_model->update(array("id" => $edit_id),$ins_data,"chapters");
        }
        else
        {   
          $new_id                   = $this->personal_model->insert($ins_data,"chapters");
          $msg                      = 'Chapter added successfully';
          $edit_id                  =  $new_id;
        }
        $status = "success";
      }
    }
    catch(Exception $e)
    {
      $status = "error"; 
      $msg  = $e->getMessage();     
    }
    $this->data['editdata']['chapters']=$this->personal_model->get_where(array("user_id"=>$user['id']),"*","chapters")->row_array();
    $output = $this->load->view('frontend/personal/chapter',$this->data,true);
    return $this->_ajax_output(array('status' => $status, 'output' => $output, 'edit_id' =>"","msg"=>$msg), TRUE);
  }
  public function council_add($edit_id='')
  {
    $msg = "";
    $user = get_user_data();
    try
    {
      $this->form_validation->set_rules($this->_council_validation_rules);
      $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
      if(count($_POST) && $this->form_validation->run())
      {
        $form = $this->input->post();
        $edit_id = $this->input->post('id');
        $ins_data['user_id']                   = $form['user_id'];
        $ins_data['council_name']              = $form['council_name'];
        $ins_data['council_no']                = $form['council_no'];
        $ins_data['district_no']               = $form['district_no'];
        $ins_data['top_line_signer']           = $form['top_line_signer'];  
        $ins_data['second_line_signer']        = $form['second_line_signer'];
        $ins_data['date_joined']               = date("Y-m-d",strtotime($form['date_joined']));
        $ins_data['most_il_master']            = $form['most_il_master'];
        $ins_data['year1']                     = $form['year1'];
        $ins_data['district_il_master']        = $form['district_il_master'];
        $ins_data['year2']                     = $form['year2'];
        $ins_data['illustrious_master']        = $form['illustrious_master'];
        $ins_data['year3']                     = $form['year3'];
        $ins_data['deputy_master']             = $form['deputy_master'];
        $ins_data['princ_cond_of_work']        = $form['princ_cond_of_work'];
        $ins_data['recorder']                  = $form['recorder'];
        $ins_data['treasurer']                 = $form['treasurer'];
        $ins_data['capt_of_guard']             = $form['capt_of_guard'];
        $ins_data['cond_of_council']           = $form['cond_of_council'];
        $ins_data['steward']                   = $form['steward'];
        $ins_data['chaptain']                  = $form['chaptain'];
        $ins_data['sentinel']                  = $form['sentinel'];
        $ins_data['marshal']                   = $form['marshal'];
        if($edit_id)
        {
          $msg = 'Council updated successfully';
          $this->personal_model->update(array("id" => $edit_id),$ins_data,"council");
        }
        else
        {   
          $new_id                   = $this->personal_model->insert($ins_data,"council");
          $msg                      = 'Council added successfully';
          $edit_id                  =  $new_id;
        }
        $status = "success";
      }
    }
    catch(Exception $e)
    {
      $status = "error"; 
      $msg  = $e->getMessage();     
    }
    $this->data['editdata']['council']=$this->personal_model->get_where(array("user_id"=>$user['id']),"*","council")->row_array();
    $output = $this->load->view('frontend/personal/council',$this->data,true);
    return $this->_ajax_output(array('status' => $status, 'output' => $output, 'edit_id' =>"","msg"=>$msg), TRUE);
  }
  public function commandery_add($edit_id='')
  {
    $msg = "";
    $user = get_user_data();
    try
    {
      $this->form_validation->set_rules($this->_commandery_validation_rules);
      $this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
      if(count($_POST) && $this->form_validation->run())
      {
        $form = $this->input->post();
        $edit_id = $this->input->post('id');
        $ins_data['comm_name']                 = $form['comm_name'];
        $ins_data['comm_no']                   = $form['comm_no'];
        $ins_data['district_no']               = $form['district_no'];
        $ins_data['top_line_signer']           = $form['top_line_signer'];  
        $ins_data['second_line_signer']        = $form['second_line_signer'];
        $ins_data['date_joined']               = date("Y-m-d",strtotime($form['date_joined']));
        $ins_data['master_emi_cmdr']           = $form['master_emi_cmdr'];
        $ins_data['year1']                     = $form['year1'];
        $ins_data['district_emi_cmdr']         = $form['district_emi_cmdr'];
        $ins_data['year2']                     = $form['year2'];
        $ins_data['emi_cmdr']                  = $form['emi_cmdr'];
        $ins_data['year3']                     = $form['year3'];
        $ins_data['generalsmo']                = $form['generalsmo'];
        $ins_data['capt_general']              = $form['capt_general'];
        $ins_data['recorder']                  = $form['recorder'];
        $ins_data['treasurer']                 = $form['treasurer'];
        $ins_data['sr_warden']                 = $form['sr_warden'];
        $ins_data['jr_warden']                 = $form['jr_warden'];
        $ins_data['prebate']                   = $form['prebate'];
        $ins_data['sword_bearer']              = $form['sword_bearer'];
        $ins_data['stand_bearer']              = $form['stand_bearer'];
        $ins_data['warden']                    = $form['warden'];
        $ins_data['sentinel']                  = $form['sentinel'];
        if($edit_id)
        {
          $msg = 'Commandery updated successfully';
          $this->personal_model->update(array("id" => $edit_id),$ins_data,"commendary");
        }
        else
        {   
          $new_id                   = $this->personal_model->insert($ins_data,"commendary");
          $msg                      = 'Commandery added successfully';
          $edit_id                  =  $new_id;
        }
        $status = "success";
      }
    }
    catch(Exception $e)
    {
      $status = "error"; 
      $msg  = $e->getMessage();     
    }
    $this->data['editdata']['commandery']=$this->personal_model->get_where(array("user_id"=>$user['id']),"*","commendary")->row_array();
    $output = $this->load->view('frontend/personal/commandery',$this->data,true);
    return $this->_ajax_output(array('status' => $status, 'output' => $output, 'edit_id' =>"","msg"=>$msg), TRUE);
  }
    
}
?>
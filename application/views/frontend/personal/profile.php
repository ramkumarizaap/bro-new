<form name="add_profile" action="" method="post" id="add_profile">
  <div class="col-sm-12">
    <div class="col-sm-6 col-md-3">
      <!--  -->
      <div class="form-group <?=(form_error('mason'))?'has-error':'';?> row">
        <label for="" class="col-sm-4 col-form-label col-form-label-sm">Mason?<span class="required">*</span></label>
        <div class="col-sm-8">
          <?php echo form_dropdown('mason', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('mason', $editdata['personal']['mason']), 'class="form-control width_select"');?>
        </div>
        <div class="clearfix"></div>
        <?=form_error('mason');?>
      </div>
      <!--  -->
    </div>              
    <div class="col-sm-6 col-md-3">
      <!--  -->
        <div class="form-group <?=(form_error('status'))?'has-error':'';?> row">
          <label for="" class="col-sm-4 col-form-label col-form-label-sm">Status<span class="required">*</span></label>
          <div class="col-sm-8">
            <?php echo form_dropdown('status', array('' => '-None-',"Active"=>"Active","Inactive"=>"Inactive"), set_value('status', $editdata['info']['status']), 'class="form-control width_select"');?>
          </div>
          <div class="clearfix"></div>
          <?=form_error('status');?>
        </div>
      <!--  -->  
    </div>
    <div class="col-sm-6 col-md-3">
      <!--  -->
        <div class="form-group row <?=(form_error('is_admin'))?'has-error':'';?>">
          <label for="" class="col-sm-5 col-form-label col-form-label-sm">Is Admin?<span class="required">*</span></label>
          <div class="col-sm-7">
            <?php echo form_dropdown('is_admin', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('is_admin', $editdata['info']['is_admin']), 'class="form-control width_select"');?>
          </div>
          <div class="clearfix"></div>
          <?=form_error('is_admin');?>
        </div>
      <!--  --> 
    </div>
    <div class="col-sm-6 col-md-3">
      <!--  -->
        <div class="form-group row">
          <label for="" class="col-sm-4 col-form-label col-form-label-sm">Password</label>
          <div class="col-sm-8">
            <input class="form-control" placeholder="" type="password" name="password" value="<?=set_value('password');?>">
          </div>
        </div>
      <!--  --> 
    </div>
    <div class="clearfix"></div>
    <hr>
  </div>
  <div class="col-sm-12 col-md-3">
    <center>
      <b>Personal Data</b>
    </center>
      <!--  -->
      <div class="form-group row <?=(form_error('first_name'))?'has-error':'';?>">
        <label for="" class="col-form-label col-form-label-sm">First Name<span class="required">*</span></label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
        </div>
        <div class="clearfix"></div>
        <?=form_error('first_name');?>
      </div>

      <!--  -->
      <div class="form-group row">
        <label for="" class="col-form-label col-form-label-sm">Middle Name</label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="middle_name" value="<?=set_value('middle_name',$editdata['info']['middle_name']);?>">
        </div>
        <div class="clearfix"></div>
        <?=form_error('middle_name');?>
      </div>

      <!--  -->
      <div class="form-group row <?=(form_error('last_name'))?'has-error':'';?>">
        <label for="" class="col-form-label col-form-label-sm">Last Name<span class="required">*</span></label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="last_name" value="<?=set_value('last_name',$editdata['info']['last_name']);?>">
        </div>
        <div class="clearfix"></div>
        <?=form_error('last_name');?>
      </div>

      <!--  -->
      <div class="form-group row">
        <label for="" class="col-form-label col-form-label-sm">Mobile</label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="mobile" value="<?=set_value('mobile',$editdata['personal']['mobile']);?>">
        </div>
      </div>

      <!--  -->
      <div class="form-group row <?=(form_error('phone'))?'has-error':'';?>">
        <label for="" class="col-form-label col-form-label-sm">Home<span class="required">*</span></label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="phone" value="<?=set_value('phone',$editdata['info']['phone']);?>">
        </div>
        <div class="clearfix"></div>
        <?=form_error('phone');?>
      </div>

      <!--  -->
      <div class="form-group row">
        <label for="" class="col-form-label col-form-label-sm">Work</label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="work" value="<?=set_value('work',$editdata['personal']['work']);?>">
        </div>
      </div>

      <!--  -->
      <div class="form-group row">
        <label for="" class="col-form-label col-form-label-sm">Office Email</label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="off_email" value="<?=set_value('off_email',$editdata['personal']['off_email']);?>">
        </div>
      </div>

      <!--  -->
      <div class="form-group row <?=(form_error('email'))?'has-error':'';?>">
        <label for="" class="col-form-label col-form-label-sm">Personal Email<span class="required">*</span></label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="email" value="<?=set_value('email',$editdata['info']['email']);?>">
        </div>
        <div class="clearfix"></div>
        <?=form_error('email');?>
      </div>

      <!--  -->
      <div class="form-group row <?=(form_error('dob'))?'has-error':'';?>">
        <label for="" class="col-form-label col-form-label-sm">Date of Birth<span class="required">*</span></label>
        <div class="col-sm-12">
          <input class="form-control singledate" type="text" name="dob" value="<?=set_value('dob',date("m/d/Y",strtotime($editdata['personal']['dob'])));?>">
        </div>
        <div class="clearfix"></div>
        <?=form_error('dob');?>
      </div>

      <!--  -->
      <div class="form-group row <?=(form_error('b_city'))?'has-error':'';?>">
        <label for="" class="col-form-label col-form-label-sm">Birth (City)<span class="required">*</span></label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="b_city" value="<?=set_value('b_city',$editdata['personal']['b_city']);?>">
        </div>
        <div class="clearfix"></div>
        <?=form_error('b_city');?>
      </div>
      <!--  -->
      <div class="form-group row <?=(form_error('b_state'))?'has-error':'';?>">
        <label for="" class="col-form-label col-form-label-sm">Birth (State)<span class="required">*</span></label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="b_state" value="<?=set_value('b_state',$editdata['personal']['b_state']);?>">
        </div>
        <div class="clearfix"></div>
        <?=form_error('b_state');?>
      </div>
      <div class="form-group row">
        <label for="" class="col-form-label col-form-label-sm">Home Blue Lodge</label>
        <div class="col-sm-12">
          <input class="form-control" placeholder="" type="text" name="home_blue_lodge" value="<?=set_value('home_blue_lodge',$editdata['info']['home_blue_lodge']);?>">
        </div>
        <div class="clearfix"></div>
        <?=form_error('b_state');?>
      </div>

    <!--  -->
  </div>
  <div class="col-md-6">
    <div class="row">
      <div class="col-md-6">
        <center>
          <b>Home Address</b>
        </center>

            <!--  -->
            <div class="form-group row <?=(form_error('address1'))?'has-error':'';?>">
              <label for="" class="col-form-label col-form-label-sm">Address1<span class="required">*</span></label>
              <div class="col-sm-12">
                <input class="form-control" placeholder="" type="text" name="address1" value="<?=set_value('address1',$editdata['home_address']['address1']);?>">
              </div>
              <div class="clearfix"></div>
              <?=form_error('address1');?>
            </div>

            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Address2</label>
              <div class="col-sm-12">
                <input class="form-control" placeholder="" type="text" name="address2" value="<?=set_value('address2',$editdata['home_address']['address2']);?>">
              </div>
            </div>
            <!--  -->
            <div class="form-group row <?=(form_error('city'))?'has-error':'';?>">
              <label for="" class="col-form-label col-form-label-sm">City<span class="required">*</span></label>
              <div class="col-sm-12">
                <input class="form-control" type="text" name="city" value="<?=set_value('city',$editdata['home_address']['city']);?>">
              </div>
              <div class="clearfix"></div>
              <?=form_error('city');?>
            </div>

            <div class="form-group row <?=(form_error('state'))?'has-error':'';?>">
              <label for="" class="col-form-label col-form-label-sm">State<span class="required">*</span></label>
              <div class="col-sm-12">
                <input class="form-control" type="text" name="state" value="<?=set_value('state',$editdata['home_address']['state']);?>">
              </div>
              <div class="clearfix"></div>
              <?=form_error('state');?>
            </div>
            <!--  -->
            <div class="form-group row <?=(form_error('zip'))?'has-error':'';?>">
              <label for="" class="col-form-label col-form-label-sm">Zip<span class="required">*</span></label>
              <div class="col-sm-12">
                <input class="form-control" placeholder="" type="text" name="zip" value="<?=set_value('zip',$editdata['home_address']['zip']);?>">
              </div>
              <div class="clearfix"></div>
              <?=form_error('state');?>
            </div>
             <hr>
            <center>
              <b>Work Address</b>
            </center>
            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Address1</label>
              <div class="col-sm-12">
                <input class="form-control" placeholder="" type="text" name="w_address1" value="<?=set_value('w_address1',$editdata['work_address']['w_address1']);?>">
              </div>
            </div>

            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Address2</label>
              <div class="col-sm-12">
                <input class="form-control" placeholder="" type="text" name="w_address2" value="<?=set_value('w_address2',$editdata['work_address']['w_address2']);?>">
              </div>
            </div>

            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">City</label>
              <div class="col-sm-12">
                <input class="form-control" type="text" name="w_city" value="<?=set_value('w_city',$editdata['work_address']['w_city']);?>">
              </div>
            </div>

            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">State</label>
              <div class="col-sm-12">
                <input class="form-control" placeholder="" type="text" name="w_state" value="<?=set_value('w_state',$editdata['work_address']['w_state']);?>">
              </div>
            </div>

            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Zip</label>
              <div class="col-sm-12">
                <input class="form-control" placeholder="" type="text" name="w_zip" value="<?=set_value('w_zip',$editdata['work_address']['w_zip']);?>">
              </div>
            </div>
      </div>
      <div class="col-md-6">
        <center>
          <b>Affiliations</b>
        </center>
            <!--  -->
            <div class="form-group row <?=(form_error('york_rite'))?'has-error':'';?>">
              <label for="" class="col-form-label col-form-label-sm">York Rite?<span class="required">*</span></label>
              <div class="col-sm-12">
                <?php echo form_dropdown('york_rite', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('york_rite', $editdata['affiliations']['york_rite']), 'class="form-control width_select"');?>
              </div>
              <div class="clearfix"></div>
              <?=form_error('york_rite');?>
            </div>

            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Scottish Rite?</label>
              <div class="col-sm-12">
                <?php echo form_dropdown('scottish_rite', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('scottish_rite', $editdata['affiliations']['scottish_rite']), 'class="form-control width_select"');?>
                <?=form_error('scottish_rite');?>
              </div>
            </div>

            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Shriners?</label>
              <div class="col-sm-12">
                <?php echo form_dropdown('shriner', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('shriner', $editdata['affiliations']['shriner']), 'class="form-control width_select"');?>
              </div>
            </div>
            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Grotto?</label>
              <div class="col-sm-12">
                <?php echo form_dropdown('grotto', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('grotto', $editdata['affiliations']['grotto']), 'class="form-control width_select"');?>
              </div>
            </div>
            <hr>
            <center>
              <b>Family</b>
            </center>
            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Spouse</label>
              <div class="col-sm-12">
                <input class="form-control" placeholder="" type="text" name="spouse" value="<?=set_value('spouse',$editdata['family']['spouse']);?>">
              </div>
            </div>

            <!--  -->
            <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Kids</label>
              <div class="col-sm-12">
                <input class="form-control" placeholder="Kid 1" type="text" name="kids1" value="<?=set_value('kids1',$editdata['kids1']);?>">
              </div>
            </div>

            <!--  -->
            <div class="form-group row">
              <!-- <label for="" class="col-form-label col-form-label-sm">Kids</label> -->
              <div class="col-sm-12">
                <input class="form-control" placeholder="Kid 2" type="text" name="kids2" value="<?=set_value('kids2',$editdata['kids2']);?>">
              </div>
            </div>

            <!--  -->
            <div class="form-group row">
              <!-- <label for="" class="col-form-label col-form-label-sm">Kids</label> -->
              <div class="col-sm-12">
                <input class="form-control" placeholder="Kid 3" type="text" name="kids3" value="<?=set_value('kids3',$editdata['kids3']);?>">
              </div>
            </div>

            <!--  -->
            <div class="form-group row">
              <!-- <label for="" class="col-form-label col-form-label-sm">Kids</label> -->
              <div class="col-sm-12">
                <input class="form-control" placeholder="Kid 4" type="text" name="kids4" value="<?=set_value('kids4',$editdata['kids4']);?>">
              </div>
            </div>
      </div>
    </div>
  </div>
  <!-- Col 3 -->
  <div class="col-md-3">
    <!--  -->
    <div class="form-group row">
      <label for="" class="col-form-label col-form-label-sm">Note</label>
      <div class="col-sm-12">
        <textarea name="" id="" class="form-control form-control-sm" cols="30" rows="10"><?=$editdata['personal']['notes'];?></textarea>
      </div>
    </div>
    <?php
      $created_by = get_user_by_id(array("id"=>$editdata['info']['created_by']),"users")['first_name'];
      $updated_by = get_user_by_id(array("id"=>$editdata['info']['updated_by']),"users")['first_name'];
      ?>
    <!--  -->
    <div class="form-group row">
      <div class="col-sm-12">
        <ul class="list-group custom--list">
          <li class="list-group-item">
            Created By: <span class="badge"><?=$created_by;?></span>
          </li>
          
          <li class="list-group-item">
            Created Date: <span class="badge"><?=date("m/d/Y H:i:s A",strtotime($editdata['info']['created_date']));?></span>
          </li>
          <li class="list-group-item">
            Changed By: <span class="badge"><?=$updated_by;?></span>
          </li>
          <li class="list-group-item">
            Changed Date: <span class="badge"><?=date("m/d/Y H:i:s A",strtotime($editdata['info']['updated_date']));?></span>
          </li>
        </ul>
      </div>
    </div>

  </div>
  <div class="clearfix"></div>
  <div class="form-group col-sm-12">
    <button type="button" class="btn btn-primary btn-block" onclick="tab_view('personal_info','profile/profile_add','add_profile')">Pay My Dues Now !</button>
  </div>  
</form>
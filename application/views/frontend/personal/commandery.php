<form name="add_commandery" action="" method="post" id="add_commandery">
  <input type="hidden" name="id" value="<?=$editdata['commandery']['id'];?>">
  <input type="hidden" name="user_id" value="<?=$editdata['info']['id'];?>">
  <div class="col-sm-12 col-md-9" style="padding-left: 0px;">
  	<div class="row">
  		<div class="col-md-6">
	  		<div class="form-group <?=(form_error('comm_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Commandery Name<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="comm_name" value="<?=set_value('comm_name',$editdata['commandery']['comm_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('comm_name');?>
		    </div>
		  </div>
		  <div class="col-md-6">
	  		<div class="form-group <?=(form_error('top_line_signer'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Commandery Top Line Singer<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="top_line_signer" value="<?=set_value('top_line_signer',$editdata['commandery']['top_line_signer']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('top_line_signer');?>
		    </div>
		  </div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group <?=(form_error('comm_no'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Commandery No<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="comm_no" value="<?=set_value('comm_no',$editdata['commandery']['comm_no']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('comm_no');?>
		    </div>
  		</div>
  		<div class="col-md-6">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Second Line Singer</label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="second_line_signer" value="<?=set_value('second_line_signer',$editdata['commandery']['second_line_signer']);?>">
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group <?=(form_error('district_no'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">District No<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="district_no" value="<?=set_value('district_no',$editdata['commandery']['district_no']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('district_no');?>
		    </div>
  		</div>
  		<div class="col-md-6">
  			<div class="form-group <?=(form_error('date_joined'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Date Joined<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control singledate" placeholder="" type="text" name="date_joined" value="<?=set_value('date_joined',date("d/m/Y",strtotime($editdata['commandery']['date_joined'])));?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('date_joined');?>
		    </div>
  		</div>
  	</div>
  	<div class="clearfix"></div><br><br>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">M. Emin. Cmdr?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('master_emi_cmdr', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('master_emi_cmdr', $editdata['commandery']['master_emi_cmdr']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Generalsmo?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('generalsmo', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('generalsmo', $editdata['commandery']['generalsmo']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Prebate?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('prebate', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('prebate', $editdata['commandery']['prebate']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="year1" value="<?=set_value('year1',$editdata['commandery']['year1']);?>">
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Capt. General?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('capt_general', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('capt_general', $editdata['commandery']['capt_general']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Sword Bearer?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('sword_bearer', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('sword_bearer', $editdata['commandery']['sword_bearer']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Dist. Emin. Cmdr?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('district_emi_cmdr', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('district_emi_cmdr', $editdata['commandery']['district_emi_cmdr']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Recorder?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('recorder', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('recorder', $editdata['commandery']['recorder']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Stand Bearer?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('stand_bearer', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('stand_bearer', $editdata['commandery']['stand_bearer']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="year2" value="<?=set_value('year2',$editdata['commandery']['year2']);?>">
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Treasurer</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('treasurer', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('treasurer', $editdata['commandery']['treasurer']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Warden?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('warden', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('warden', $editdata['commandery']['warden']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Eminent Cmdr?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('emi_cmdr', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('emi_cmdr', $editdata['commandery']['emi_cmdr']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Senior Warden?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('sr_warden', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('sr_warden', $editdata['commandery']['sr_warden']), 'class="form-control width_select"');?>
		      </div>		      
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
          <div class="form-group">
             <label class="col-form-label col-sm-5 col-form-label-sm">Sentinel?</label>
             <div class="col-md-7">
                <input type="text" class="form-control form-control-inline" name="sentinel" id="sentinel" value="<?php echo (isset($editdata['sentinel']))?$editdata['sentinel']:"";?>"> 
                <?php //echo form_error('date_joined'); ?>
             </div>
          </div>
       </div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="year3" value="<?=set_value('year3',$editdata['commandery']['year3']);?>">
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Junior Warden?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('jr_warden', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('jr_warden', $editdata['commandery']['jr_warden']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  </div>
  <div class="colsm-12 col-md-3">
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
    <button type="button" class="btn btn-primary btn-block" onclick="tab_view('commandery','profile/commandery_add','add_commandery')">What would you do like to do?</button>
  </div>  
</form>

<script type="text/javascript">init_datepicker();</script>
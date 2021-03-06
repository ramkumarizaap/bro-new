<form name="add_council" action="" method="post" id="add_council">
  <input type="hidden" name="id" value="<?=$editdata['council']['id'];?>">
  <input type="hidden" name="user_id" value="<?=$editdata['info']['id'];?>">
  <div class="col-sm-12 col-md-9" style="padding-left: 0px;">
  	<div class="row">
  		<div class="col-md-6">
	  		<div class="form-group <?=(form_error('council_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Council Name<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="council_name" value="<?=set_value('council_name',$editdata['council']['council_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('council_name');?>
		    </div>
		  </div>
		  <div class="col-md-6">
	  		<div class="form-group <?=(form_error('top_line_signer'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Council Top Line Singer<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="top_line_signer" value="<?=set_value('top_line_signer',$editdata['council']['top_line_signer']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('top_line_signer');?>
		    </div>
		  </div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group <?=(form_error('council_no'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Council No<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="council_no" value="<?=set_value('chapter_no',$editdata['council']['council_no']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('council_no');?>
		    </div>
  		</div>
  		<div class="col-md-6">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Second Line Singer</label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="second_line_signer" value="<?=set_value('second_line_signer',$editdata['council']['second_line_signer']);?>">
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group <?=(form_error('district_no'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">District No<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="district_no" value="<?=set_value('district_no',$editdata['council']['district_no']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('district_no');?>
		    </div>
  		</div>
  		<div class="col-md-6">
  			<div class="form-group <?=(form_error('date_joined'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Date Joined<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control singledate" placeholder="" type="text" name="date_joined" value="<?=set_value('date_joined',date("d/m/Y",strtotime($editdata['council']['date_joined'])));?>">
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
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Most IL Master?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('most_il_master', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('most_il_master', $editdata['council']['most_il_master']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Deputy Master?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('deputy_master', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('deputy_master', $editdata['council']['deputy_master']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Steward?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('steward', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('steward', $editdata['council']['steward']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="year1" value="<?=set_value('year1',$editdata['council']['year1']);?>">
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Princ. Cond. of Work?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('princ_cond_of_work', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('princ_cond_of_work', $editdata['council']['princ_cond_of_work']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Chaptain?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('chaptain', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('chaptain', $editdata['council']['chaptain']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">District IL Master?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('district_il_master', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('district_il_master', $editdata['council']['district_il_master']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Recorder?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('recorder', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('recorder', $editdata['council']['recorder']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Sentinel?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('sentinel', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('sentinel', $editdata['council']['sentinel']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="year2" value="<?=set_value('year2',$editdata['council']['year2']);?>">
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Treasurer</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('treasurer', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('treasurer', $editdata['council']['treasurer']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Marshal?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('marshal', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('marshal', $editdata['council']['marshal']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Illustrious Master?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('illustrious_master', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('illustrious_master', $editdata['council']['illustrious_master']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Capt. of the Guard?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('capt_of_guard', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('capt_of_guard', $editdata['council']['capt_of_guard']), 'class="form-control width_select"');?>
		      </div>		      
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="year3" value="<?=set_value('year3',$editdata['council']['year3']);?>">
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Cond. of Council?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('cond_of_council', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('cond_of_council', $editdata['council']['cond_of_councilcond_of_council']), 'class="form-control width_select"');?>
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
    <button type="button" class="btn btn-primary btn-block" onclick="tab_view('council','profile/council_add','add_council')">What would you do like to do?</button>
  </div>  
</form>

<script type="text/javascript">init_datepicker();</script>
<form name="add_chapter" action="" method="post" id="add_chapter">
  <input type="hidden" name="id" value="<?=$editdata['chapters']['id'];?>">
  <input type="hidden" name="user_id" value="<?=$editdata['info']['id'];?>">
  <div class="col-sm-12 col-md-9" style="padding-left: 0px;">
  	<div class="row">
  		<div class="col-md-6">
	  		<div class="form-group <?=(form_error('chapter_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Chapter Name<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="chapter_name" value="<?=set_value('chapter_name',$editdata['chapters']['chapter_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('chapter_name');?>
		    </div>
		  </div>
		  <div class="col-md-6">
	  		<div class="form-group <?=(form_error('top_line_signer'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Chapter Top Line Singer<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="top_line_signer" value="<?=set_value('top_line_signer',$editdata['chapters']['top_line_signer']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('top_line_signer');?>
		    </div>
		  </div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group <?=(form_error('chapter_no'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Chapter No<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="chapter_no" value="<?=set_value('chapter_no',$editdata['chapters']['chapter_no']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('chapter_no');?>
		    </div>
  		</div>
  		<div class="col-md-6">
  			<div class="form-group <?=(form_error('second_line_signer'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Second Line Singer<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="second_line_signer" value="<?=set_value('second_line_signer',$editdata['chapters']['second_line_signer']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('second_line_signer');?>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group <?=(form_error('district_no'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">District No<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="district_no" value="<?=set_value('district_no',$editdata['chapters']['district_no']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('district_no');?>
		    </div>
  		</div>
  		<div class="col-md-6">
  			<div class="form-group <?=(form_error('date_joined'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Date Joined<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control singledate" placeholder="" type="text" name="date_joined" value="<?=set_value('date_joined',date("d/m/Y",strtotime($editdata['chapters']['date_joined'])));?>">
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
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Most High Priest?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('most_high_priest', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('most_high_priest', $editdata['chapters']['most_high_priest']), 'class="form-control width_select"');?>
		      </div>
		      <div class="clearfix"></div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('king'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">King?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('king', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('king', $editdata['chapters']['king']), 'class="form-control width_select"');?>
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('king');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">R.A Captain?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('ra_captain', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('ra_captain', $editdata['chapters']['ra_captain']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="year1" value="<?=set_value('year1',$editdata['chapters']['year1']);?>">
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Scribe?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('scribe', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('scribe', $editdata['chapters']['scribe']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Master 3rd Vef?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('master_vef_3', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('master_vef_3', $editdata['chapters']['master_vef_3']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">District High Priest?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('district_high_priest', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('district_high_priest', $editdata['chapters']['district_high_priest']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Secretary?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('secretary', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('secretary', $editdata['chapters']['secretary']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Master 2nd Vef?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('master_vef_2', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('master_vef_2', $editdata['chapters']['master_vef_2']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="year2" value="<?=set_value('year2',$editdata['chapters']['year2']);?>">
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Treasurer</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('treasurer', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('treasurer', $editdata['chapters']['treasurer']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Master 1st Vef?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('master_vef_1', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('master_vef_1', $editdata['chapters']['master_vef_1']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">High Priest?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('hight_priest', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('hight_priest', $editdata['chapters']['hight_priest']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Capt. Host</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('capt_host', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('capt_host', $editdata['chapters']['capt_host']), 'class="form-control width_select"');?>
		      </div>		      
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Chaptain?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('chaptain', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('chaptain', $editdata['chapters']['chaptain']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="year3" value="<?=set_value('year3',$editdata['chapters']['year3']);?>">
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Principal Sojourner?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('principal_sojourner', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('principal_sojourner', $editdata['chapters']['principal_sojourner']), 'class="form-control width_select"');?>
		      </div>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Sentinel?</label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <?php echo form_dropdown('sentinel', array('' => '-None-',"Yes"=>"Yes","No"=>"No"), set_value('sentinel', $editdata['chapters']['sentinel']), 'class="form-control width_select"');?>
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
    <button type="button" class="btn btn-primary btn-block" onclick="tab_view('chapter','profile/chapter_add','add_chapter')">What would you do like to do?</button>
  </div>  
</form>

<script type="text/javascript">init_datepicker();</script>
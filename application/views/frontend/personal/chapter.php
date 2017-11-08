<form name="add_chapter" action="" method="post" id="add_chapter">
  <input type="hidden" name="submit" value="submit">
  <div class="col-sm-12 col-md-9" style="padding-left: 0px;">
  	<div class="row">
  		<div class="col-md-6">
	  		<div class="form-group <?=(form_error('chapter_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Chapter Name<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="chapter_name" value="<?=set_value('chapter_name',$editdata['info']['chapter_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('chapter_name');?>
		    </div>
		  </div>
		  <div class="col-md-6">
	  		<div class="form-group row <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Chapter Top Line Singer<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
		  </div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group row <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Chapter No<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-6">
  			<div class="form-group row <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Second Line Singer<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-6">
  			<div class="form-group row <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">District No<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-6">
  			<div class="form-group row <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-4 col-form-label-sm">Date Joined<span class="required">*</span></label>
		      <div class="col-sm-8">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  	</div>
  	<div class="clearfix"></div><br><br>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Most High Priest?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">King?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">R.A Captain?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Scribe?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Master 3rd Vef?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">District High Priest?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Secretary?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Master 2nd Vef?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Treasurer<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Master 1st Vef?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">High Priest?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Capt. Host<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Chaptain?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  	</div>
  	<div class="row">
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Year<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Principal Sojourner?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
		    </div>
  		</div>
  		<div class="col-md-4 padding-left-0 padding-right-0">
  			<div class="form-group <?=(form_error('first_name'))?'has-error':'';?>">
		      <label for="" class="col-form-label col-sm-5 col-form-label-sm">Sentinel?<span class="required">*</span></label>
		      <div class="col-sm-7 padding-left-0 padding-right-0">
		        <input class="form-control" placeholder="" type="text" name="first_name" value="<?=set_value('first_name',$editdata['info']['first_name']);?>">
		      </div>
		      <div class="clearfix"></div>
		      <?=form_error('first_name');?>
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
</form>
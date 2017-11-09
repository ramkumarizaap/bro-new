<div class="container maintainer">
  <div class="row">
    <header>
      <div class="text-left">
        <a href="<?=site_url('login/logout');?>" class="btn btn-primary"> 
          <i class="fa fa-chevron-left" aria-hidden="true"></i> 
          Signout
        </a>
        <a href="<?=site_url('dashboard');?>" class="btn btn-primary"> 
          <i class="fa fa-chevron-left" aria-hidden="true"></i> 
          Main
        </a>
      </div>
    </header>
  </div>
  <div class="col-md-2">
    <!-- Splash landing -->
		<center>
			<div class="user-pic">
				<img src="<?=base_url().$editdata['info']['photo'];?>" alt="" class="img-responsive" />
				<i class="fa fa-info circle-box" aria-hidden="true"></i>
			</div>
      <h3>Hendry Adams</h3>
		</center>
		<form>
			<div class="form-group">
        <label for="" class="">Phone</label>
			  <input type="text" id="" class="form-control" placeholder="" autofocus="" value="<?=$editdata['info']['phone'];?>">
      </div>
			
			<div class="form-group">
        <label for="" class="">Email</label>
			  <input type="text" id="" class="form-control" placeholder="" autofocus="" value="<?=$editdata['info']['email'];?>">
      </div>
			
			<div class="form-group">
        <label for="" class="">Home Blue Lodge</label>
			  <input type="text" id="" class="form-control" placeholder="" autofocus="" value="<?=$editdata['info']['home_blue_lodge'];?>">
      </div>
		</form>
    <center>
      <img src="<?=base_url();?>assets/images/small-logo.png" alt="" class="img-responsive small--logo" />
    </center>
  </div>
  <div class="col-md-10">
    <!-- Tab Style -->
    <ul class="nav nav-tabs main--tab">
      <li class="active"><a data-toggle="tab" onclick="tab_view('personal_info','profile/profile_add','');"  href="#personal_info">Personal Info</a></li>
      <li><a data-toggle="tab" href="#york_rite" onclick="tab_view('chapter','profile/chapter_add','');">York Rite</a></li>
      <li><a data-toggle="tab" href="#info-tab-2">Scotish Rite</a></li>
      <li><a data-toggle="tab" href="#info-tab-3">Shinners</a></li>
      <li><a data-toggle="tab" href="#info-tab-4">Grotto</a></li>
      <li><a data-toggle="tab" href="#info-tab-5">Blue Lodge</a></li>
    </ul>
    <div class="tab_wrapper">
      <div class="tab-content clearfix">
        <!-- <?=display_flashmsg($this->session->flashdata());?> -->
        <div class="blue-mat"></div>
        <div id="personal_info" class="tab-pane fade in active">
          
        </div>
        <div id="york_rite" class="tab-pane fade">         
         <!-- Tab Style -->
           <ul class="nav nav-tabs interior--tab">
            <li class="active"><a data-toggle="tab" onclick="tab_view('chapter','profile/chapter_add','');" href="#chapter">Chapter</a></li>
            <li><a data-toggle="tab" onclick="tab_view('council','profile/council_add','');" href="#council">Council</a></li>
            <li><a data-toggle="tab" onclick="tab_view('commandery','profile/commandery_add','');" href="#commandery">Commandery</a></li>
          </ul>
          <div class="tab_wrapper tab-interior">
            <div class="tab-content clearfix">
              <div id="chapter" class="tab-pane fade active in clearfix">
                <h3>Chapter</h3>
              </div>

              <div id="council" class="tab-pane fade clearfix">
                <h3>Council</h3>
              </div>

              <div id="commandery" class="tab-pane fade clearfix">
                <h3>Commandery</h3>
              </div>              
            </div>
          </div>          
        </div>
        <div id="info-tab-2" class="tab-pane fade">
          <h3>Tab 2</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
        </div>
        <div id="info-tab-3" class="tab-pane fade">
          <h3>Tab 3</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <div id="info-tab-4" class="tab-pane fade">
          <h3>Tab 4</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
        <div id="info-tab-5" class="tab-pane fade">
          <h3>Tab 5</h3>
          <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
      </div>
    </div>
  </div>
</div>
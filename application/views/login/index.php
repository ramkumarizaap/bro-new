    
    <div class="container maintainer">
        <div class="row">
            <header>
              <div class="text-left">
                <a href="<?=site_url('home');?>" class="btn btn-primary"> 
                  <i class="fa fa-chevron-left" aria-hidden="true"></i> 
                  Home
                </a>
              </div>
          </header>
        </div>

      <div class="col-sm-6">
        <!-- Splash landing -->

        <div class="site-wrapper auto--center">
          <div class="site-wrapper-inner">
            <div class="cover-container">
              <div class="inner cover">
                <center>
                  <img src="<?=base_url();?>assets/images/login--logo.png" class="img-responsive" alt="">
                </center>            
              </div>
            </div>
          </div>
        </div>       
      </div>

      <div class="col-sm-6">
      	<?=display_flashmsg($this->session->flashdata());?>
        <form class="form-signin auto--center" action="" method="post">
        <label for="inputId" class="sr-only">Member Name / ID</label>
        <input type="text" id="inputId" name="email" class="form-control" placeholder="Member Name / ID" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-md btn-primary btn-block" type="submit">GO <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
      </form>
      </div>

    </div> 
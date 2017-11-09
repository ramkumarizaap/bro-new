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
                  Home
                </a>
              </div>
          </header>
        </div>

        <div class="col-md-4">
         <div class="row">
           <div class="col-sm-6">
             <div class="view-title-wrapper">
               <h3>York Rite</h3>
               <h4>Jericho</h4>
             </div>
           </div>
           <div class="col-sm-6">
             <div class="view-title-image">
               <img src="<?=base_url();?>assets/images/detail-pick.jpg" alt="" class="img-responsive">
             </div>
           </div>
         </div>

         <div class="row">
           <div class="col-md-4">          
             <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Chapter Name</label>
              <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" id="" placeholder="Chapter Name">
              </div>
            </div>
           </div>

           <div class="col-md-4">
             <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">#</label>
              <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" id="" placeholder="#">
              </div>
            </div>
           </div>

           <div class="col-md-4">
             <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">District</label>
              <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" id="" placeholder="District">
              </div>
            </div>
           </div>

           <div class="col-md-12">
             <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Meeting Place</label>
              <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" id="" placeholder="Meeting Place">
              </div>
            </div>
           </div>

           <div class="col-md-12">
             <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Address</label>
              <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" id="" placeholder="Address">
              </div>
            </div>
           </div>

           <div class="col-md-4">
             <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">City</label>
              <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" id="" placeholder="City">
              </div>
            </div>
           </div>

           <div class="col-md-4">
             <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">State</label>
              <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" id="" placeholder="State">
              </div>
            </div>
           </div>

           <div class="col-md-4">
             <div class="form-group row">
              <label for="" class="col-form-label col-form-label-sm">Zip</label>
              <div class="col-sm-12">
                <input type="text" class="form-control form-control-sm" id="" placeholder="Zip">
              </div>
            </div>
           </div>
         </div>

         <div class="row view-detail--buttons">
           <div class="col-sm-6">
              <a href="javascript:void(0);" class="btn btn-md btn-primary btn-block">
              Chapter Forms </a>
           </div>
           <div class="col-sm-6">
              <a href="javascript:void(0);" class="btn btn-md btn-primary btn-block">
              Council Forms </a>
           </div>
           
           <div class="col-sm-12">
              <a href="javascript:void(0);" class="btn btn-md btn-primary btn-block">
              Member (Email) Communications <i class="fa fa-send"></i></a>
           </div>
           <div class="col-sm-6">
              <a href="javascript:void(0);" class="btn btn-md btn-primary btn-block">
              Commandery Forms</a>
           </div>
           <div class="col-sm-6">
              <a href="javascript:void(0);" class="btn btn-md btn-primary btn-block">
              Award Nominations</a>
           </div>

         </div>
         
        </div>

      <div class="col-md-8">
        
          <?=$search_bar;?>

          <div class="table--record">
            
            <div class="panel panel-default table-responsive">
              <!-- <table class="table table-fixed">
              </table> -->
              <?=$grid;?>
            </div>
          </div>
        
      </div>

    </div> 

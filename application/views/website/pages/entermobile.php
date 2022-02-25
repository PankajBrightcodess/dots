
    <section style="padding:1rem;">
    <div class="container ">
        <!-- <div class="register"> -->
  <div class="signup-form">
     <!-- <form action="<?= base_url('website/getmobileno')?>" method="post" enctype="multipart/form-data">  -->
     <?php echo form_open('website/getmobileno'); ?>
		<div class="row text-center">
             <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="card text-center">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                         <h4 style="color:black;">Enter Your Mobile Number</h4><hr>
                            <div>
                                <input type="tel" class="form-control" name="mobile" placeholder="Registered Mobile Number" required="required">        
                            </div>
                    </div>
                    <div class="col-md-7"></div>
                    <div class="col-md-5 ">
                         <button type="submit" name="submit" class="btn btn-info btn-sm btn-block">Submit</button>
                    </div>
                </div>

              
                <div class="col-md-12 form-group">
                   
                </div>
              </div>
            </div> 
          </div>
          <div class="col-md-4"></div>
        </div>
        <?php echo form_close(); ?>
	</section>

       

        <section style="padding:1rem;">
    <div class="container ">
  <div class="signup-form">
     <?php echo form_open('website/changepassword'); ?>
		<div class="row text-center">
             <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="card text-center">
              <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                         <h4 style="color:black;">Enter Your New Password</h4><hr>
                            <div>
                                <input type="password" class="form-control" name="password" placeholder="Enter New Password" required="required">  
                                <input type="hidden" name="id" value="<?php echo $abc['id']?>">
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

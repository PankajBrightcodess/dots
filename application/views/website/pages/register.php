
    <section style="padding:1rem;">
    <div class="container ">
        <!-- <div class="register"> -->
  <div class="signup-form">
    <!-- <form action="<?= base_url('website/createuser')?>" method="post" enctype="multipart/form-data"> -->
     <?php echo form_open('website/createuser'); ?>
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
	       	<input type="text" class="form-control" name="name" placeholder="Name" required="required">     	
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Create Password" required="required">
        </div>
        <div class="form-group">
	       	<input type="tel" class="form-control" name="mobile" placeholder="Mobile Number" required="required">     	
        </div>
        <!-- <div class="form-group">
	       	<input type="text" class="form-control" name="name" placeholder="Name" required="required">     	
        </div> -->
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		
		<!-- <div class="form-group">
            <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Confirm Password" required="required">
        </div>      -->
        <div class="form-group">
			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> & <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="createuser" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="<?= base_url('website/registerpage')?>">Sign in</a></div>
        <?php echo form_close(); ?>
	</section>
    <!-- <script>
        var password = document.getElementById("password")
  , confirm_password = document.getElementById("cpass");

function validatePassword(){
  if(password.value != cpass.value) {
    cpass.setCustomValidity("Passwords Don't Match");
  } else {
    cpass.setCustomValidity('');
  }
}

password.onchange = validatePassword;
cpass.onkeyup = validatePassword;
    </script> -->

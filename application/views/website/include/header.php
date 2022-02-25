 <?php
        if(!isset($_GET['page'])){
                $page="index";
            }else{
              $page=$_GET['page'];	
            }
        ?>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
	  <a class="navbar-brand" href="index.php"><img width="20%"  src="<?= base_url('assets/website/images/logo.png')?>"></a>
	  <a class="nav-link btn btn-md btn-success"  style="color:white;" href="<?php echo base_url('website/registerpage')?>">Register</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	 <div class="collapse navbar-collapse" style="font-weight: 700;" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
		<!-- <li class="nav-item"></li> -->
		    
	      <li class="nav-item">
	        <a class="nav-link" <?php if($page == "index") { echo "active"; } ?> href="<?php echo base_url('/')?>">Home</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link <?php if($page == "aboutus") { echo "active"; } ?>" href="<?php echo base_url('website/aboutus');?>?page=aboutus">About Us</a>
	      </li>
	      <li class="nav-item"><a class="nav-link <?php if($page == "gallery") { echo "active"; } ?>" href="<?php echo base_url('website/gallery');?>?page=gallery">Gallery</a></li>
	      <li class="nav-item"><a class="nav-link <?php if($page == "contact") { echo "active"; } ?>" href="<?php echo base_url('website/contact');?>?page=contact">Contact Us</a></li>
	      <li class="nav-item"><a class="nav-link <?php if($page == "Full marks") { echo "active"; } ?>" href="<?php echo base_url('assets/images/p.pdf');?>?page=contact">Full Marks</a></li>

	    </ul>
	  </div>
	</div>
</nav>

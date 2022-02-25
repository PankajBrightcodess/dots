<!doctype html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
     <!-- my-CSS -->
    <link rel="stylesheet" href="my-css/style.css">
     <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <!-- Goggle Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,600,700" rel="stylesheet">
	</head>
	<body>
	<?php include'menu.php'; ?>
    <img src="images/contactusbanner.jpg" width="100%">
<section class="banner-bottom">
	<div class="container">
    
    	<div class="row">
            <div class="col-md-5">
            	<h4 class="text-uppercase" style="color:#00af46">NETRA DHAM JAN SEVA SAMITI</h4><hr style="border:1px solid #ffc107">
                <p><strong  style="color:#00af46">Address :</strong> AT:- PANCHA, P.O- PANCHA, P.S- ORMANJHI, RANCHI, JHARKHAND-835219.</p>
                <p><strong  style="color:#00af46">Mobile No. :</strong> 9470512095 / 9472743813</p>
                <p><strong  style="color:#00af46">Email :</strong> info@netradhamjann </p>
            </div>
            <div class="col-md-7">
            	<h4 class="text-uppercase" style="color:#00af46">Send your Query</h4><hr style="border:1px solid #ffc107">
                <form>
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Full Name :" class="form-control upload-btn" required="">
                        </div>
                        <div class="form-group">
                            <input type="tel" name="mobile" placeholder="Contact No.:" class="form-control upload-btn" required="" maxlength="10" minlength="10">
                        </div>
                        <div class="form-group">
                            <input type="email" name="contact" placeholder="Email Id :" class="form-control upload-btn" required="">
                        </div>
                        <div class="form-group">
                            <textarea name="msg" class="form-control" placeholder="Enquiry Here : " rows="2" required=""></textarea>
                        </div>
                        <!-- <div class="form-group">
                            <select name="apply-for" class="form-control upload-btn" required="">
                                <option value="">---Select Required Post ---</option>
                                <option value="District Manager">District Manager</option>
                                <option value="Area Manager">Area Manager</option>
                                <option value="Supervisor">Supervisor</option>
                                <option value="Accountant">Accountant</option>
                                <option value="Cook">Cook</option>
                                <option value="Delivery Boy">Delivery Boy</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="file" name="resume" class="form-control upload-btn" required="">
                        </div> -->
                        <button type="submit" class="btn btn-sm btn-warning">Submit</button>
                    </form>
            </div>
        </div>
    
    </div>
</section>

<?php include'footer.php'; ?>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
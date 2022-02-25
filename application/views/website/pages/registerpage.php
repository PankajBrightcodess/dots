<section id="contacts-1-2" class="register ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 " style="margin-bottom: 0px; margin-top:2rem;">
                <h3 class="m-bottom-10" style="color:black;text-align:center;">Register</h3>
                <h5 style="color:black;text-align:center;"><a href="<?= base_url('/') ?>">Home</a> - Register</h5>
            </div>
        </div>
    </div>
</section>
<section id="contacts-2-1" style="margin-bottom: 1rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <!--  <h5 style="color:black;">The franchising of foreign goods and services to India is in its infancy. The first International Exhibition was only held in 2009.[38] India is, however, one of the biggest franchising markets because of its large middle-class of 300 million who are not reticent about spending and because the population is entrepreneurial in character. In a highly diversified society, (see Demographics of India) McDonald's is a success story despite its menu differing from that of the rest of the world.</h5> -->
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 text-center col-lg-offset-1 m-bottom-0">
                <p style="font-size: 20px;font-weight:bold; margin-bottom: 15px;">Doer Or Thinker Scholarship (DOTS) 2021-22
                    <br />
                    <span style="font-size: 16px;font-weight:normal;">
                    </span>
                </p>
                <!-- <p style="background: rgba(0, 148, 255, .1);padding:10px;margin-bottom:0px">
                    It's an online test open to all the students of class 1 to 12.
                    You can participate in this test from the comfort of your home.
                    <b>You need a laptop/desktop/tablet with web-camera and live internet connection(speed >= 512 kbps).</b>
                </p> -->

            </div>
        </div>
        <!-- <div class="row">
            <div class="col-sm-12 text-center col-lg-offset-1 m-bottom-0" id="divHeadBox">
                <div style="background: rgba(255, 216, 0, .2);padding:10px;">
                    <h2 style="font-size: 14px;line-height: 26px;margin-bottom: 10px">
                        <span style="color:#670909;font-size: 16px;">Doer Or Thinker:</span><br />For Needful Students:
                       We had Provide 150000/- <sup>th</sup> 2021, Class 6 to 10: November 7<sup>th</sup> 2021<br />
                        <span style="color:#670909;font-size: 16px;">Last Date for Registration</span>: Limited seats available<br />


                        <a class="btn btn-sm btn-green m-right-20" style="font-size: 16px; text-transform: none!important;" href="https://demo.softwarebss.com/dots/" target="_blank">System Compatibility Check for Online Exam</a>
                </div>
            </div>
        </div> -->
            <!-- <div class="row"> -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="contacts-7-txt bg-lightgrey grey-color bg-edit editContent" style="padding:15px!important">
                            <!-- Title -->
                            <h5 class="black-color txt-semi-bold" style="color: black;">New User? Register Here</h5>
                            <!-- <ul style="color:black;list-style:circle;text-align:justify;">
                                <li>50% amount of total Expenses</li>
                                <li>Skill Development</li>
                                <li>3 years job exprience in their feild of intrest.</li>
                                <li>27×7 customer support service</li>
                                <li><b>Registration fee is 200/-, With Late Fee 250/-</b></li>
                            </ul> -->
                            <a href="<?= base_url('website/register') ?>" style="text-transform:none" class="btn btn-md btn-info">New User? Click here to Register for Exam</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div style="margin-top: 20px;">
                            <h5  style="color: black;">Existing User? Log-in Here</h5>

                            <hr />
                            <?php echo form_open('website/validateuserlogin'); ?>
                                <input autocomplete="false" name="hidden" type="text" style="display: none;" />
                                <div  class="col-md-12 form-group">
                                    <input type="text" name="username" id="username" class="form-control username" placeholder="Register Mobile Number*" required="required" />
                                </div>
                                <div class="col-md-12 form-group">
                                    <input type="password" id="login_password" name="password" class="form-control password" placeholder="password*" required="required" />

                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" name="login" class="btn btn-info btn-lg btn-block">Login</button>
                                </div>
                                <div class="col-md-12 form-group">
                                    <p> <a href="<?php echo base_url('website/entermobile')?>">Forgot Your Password ?</a></p>
                                </div>
                                <div class="col-md-12 login-form-msg">
                                    <span class="red-color loading"></span>
                                </div>
                                <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
</section>
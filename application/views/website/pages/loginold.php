
    <section class="login">
    <div class="container content-justify-center" >
                    <div class="row " style="border: 5px; border-color:black; padding-left: 35%; padding-top: 10%;">
                    <!-- <label style="border: 5px; border-color:black;"> -->
                        <div clas="col-md-6">
                        <?php echo form_open('website/validateuserlogin'); ?>
                                <div class="form-group">
                                    <h2>Login</h2>
                                    <p>Enter Login Details</p>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="username" placeholder="User Name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="login" class="btn btn-success btn-lg btn-block">Login</button>
                                    </div>
                                    <div class="text-center">Don't have an account? <a href="<?= base_url('website/register')?>">Register Here</a></div>
                                </div>
                                <?php echo form_close();?>
                        </div>
                        <div clas="col-md-6">
                            <img class="svg11" src="<?= base_url('assets/website/images/download.jfif')?>" alt="ssss">
                        </div>
                    <!-- </label> -->

                    </div>


                </div>
    </section>


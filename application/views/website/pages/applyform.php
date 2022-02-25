<section class="apply">
    <div class="container">

        <div class="row">
            <div class="col-md-12 apply-form">
               <!-- <div class="text-center text-danger form-group">
                            <?php if($this->session->flashdata("msg")!==NULL){ echo $this->session->flashdata("msg");} ?>
                        </div> -->
                        
                        
                        
                        <?php if($this->session->flashdata("msg")!==NULL){ echo "<div class='alert alert-danger alert-dismissible msg-popup'><button type='button' id='msgpopup' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>".$this->session->flashdata("msg")."</div>"; }?>
                      
                 <form  action="<?= base_url('website/registerform')?>" method="post" enctype="multipart/form-data" >

                    <div class="row">
                        <div class="col-md-12" style="text-align: center;"><br><br><h3><b>REGISTRATION FORM</b></h3><hr></div>
                         <div class="col-md-12"><br><br><label><b>PERSONAL DETAILS</b></label><hr></div>
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12"><span>NAME OF STUDENT</span><input type="text" class="form-control"  required name="name" placeholder="Name"></div>
                                        <div class="col-md-12">
                                            <div class="row radio-con">
                                                <div class="col-md-4"><span>GENDER<span></div>
                                                <div class="col-md-4"><span>MALE : </span><input type="radio" id="javascript" name="fav_language" value="male"></div>
                                                <div class="col-md-4"><span >FEMALE : <input type="radio" id="javascript" name="fav_language" value="female"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md- 4">
                                <div class="col-md-12"><span>Upload Photo<span></div>
                                    <div class="col-md-12"><img src="<?= base_url('assets/website/images/imageuser.png')?>" alt="" height="100" width="100"></div>
                                    <div class="col-md-12"> <input type="file"  name="image" accept="image/png, image/jpeg"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12"><span>DATE OF BIRTH</span><input type="date" format="DD/MM/YYYY"  required name="dob" class="form-control"></div>
                        <div class="col-md-12"><span>AADHAR NO.</span><input type="number"  required name="aadhar" class="form-control" placeholder="Aadhar No."></div>
                        <div class="col-md-12"><span>CONTACT NO.</span><input type="number" name="contect" class="form-control" required placeholder="Contact Number"></div>
                        <div class="col-md-12"><span>FATHER'S NAME</span><input type="text" name="fname" class="form-control" required placeholder="Father's Name"></div>
                         <div class="col-md-12"><span>MOTHE'S NAME</span><input type="text" name="mname" class="form-control" required placeholder="Mother's Name"></div>

                         <div class="col-md-12"><br><br><label><b>ADDRESS</b></label><hr></div>
                         <div class="col-md-12"><span>VILLAGE/TOWN/CITY</span><input type="text" name="address" class="form-control" required placeholder="Village/Town/City"></div>
                         <div class="col-md-12"><span>PIN CODE</span><input type="number" name="pincode" class="form-control" required placeholder="Pin Code"></div>
                         <div class="col-md-12"><span>DISTRICT</span><input type="dist" name="pincode" class="form-control" required placeholder="District"></div>
                         <div class="col-md-12"><span>STATE</span><input type="dist" name="pincode" class="form-control" required placeholder="State"></div>


                         <div class="col-md-12"><br><br><label><b>SCHOOL/COLLEGE DETAILS</b></label><hr></div>
                         <div class="col-md-12"><br><br><label><b>FOR CLASS 2nd TO 12th STUDENTS ONLY:-</b></label><br><br></div>
                         <div class="col-md-12"><span>NAME OF SCHOOL</span><input type="text" name="school" class="form-control" placeholder="Name Of School"></div>
                        <div class="col-md-6"><span>CLASS</span><input type="text" name="class" class="form-control"  placeholder="Class"></div>
                        <div class="col-md-6"><span>ROLL NO.</span><input type="text" name="roll" class="form-control"   placeholder="Roll"></div>

                        <div class="col-md-12"><br><br><label><b>FOR GRADUATION LEVEL OR OTHER STUDENTS ONLY:-</b></label><br><br></div>
                        <div class="col-md-12"><span>NAME OF COLLEGE</span><input type="text" name="collage"  class="form-control" placeholder="Name Of College"></div>
                        <div class="col-md-6"><span>COURSE</span><input type="text" name="course" class="form-control"  placeholder="Course"></div>
                        <div class="col-md-6"><span>SESSION</span><input type="text" name="session" class="form-control"   placeholder="Session"></div>
                        <div class="col-md-6"></div>
                         <div class="col-md-6 "><input type="submit" name="submit" class="btn-sm btn-success" value="Submit"></div>
                    </div>
                   </form>
            </div>


        </div>
      
        
    </div>
    </div>
    </div>
</section>

<script>
// $("input:checkbox").on('click', function() {
//         var $box = $(this);
//         if ($box.is(":checked")) {
//         var group = "input:checkbox[name='" + $box.attr("name") + "']";
//         $(group).prop("checked", false);
//         $box.prop("checked", true);
//    } 
//    else {
//         $box.prop("checked", false);
//    }
// });
$('document').ready(function(){
        setTimeout(function() {
        $('#msgpopup').click();
    },3000);
});


</script>
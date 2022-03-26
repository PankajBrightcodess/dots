<section class="about-us">
   <div class="abouOverlay">
      <div class="container">
         <center>
            <!-- <h2 style="color: #8500A8;">OTHER BENEFITS FOR TOPPER</h2> -->
         </center>
       <!--   <hr style="border: 1px solid black"> -->
         <div class="row">
            <div class="col-md-12">
           <!--  <ul>
               <li><h5 style="text-align: justify; color: black">Cash prize.</h5></li>
               <li><h5 style="text-align: justify; color: black">Free services of FULLMARKS (answer writing skills).</h5></li>
               <li><h5 style="text-align: justify; color: black">Business scholarship of rupees 5lakh.</h5></li>
               <li><h5 style="text-align: justify; color: black">Educational loan for higher studies in india/ foregin countries.</h5></li>
               <li><h5 style="text-align: justify; color: black">Medal and certificate.</h5></li>
            </ul> -->
           <!--  <div class="col-md-6">
               <h5 style="color: #8500A8;">NORMALISATION FOR CLASS 2nd TO 5th</h5>
               <table class="table" style="font-weight:700">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Class </th>
                        <th scope="col"></th>
                        <th scope="col">Grace-Marks</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th scope="row">1</th>
                        <td>4th</td>
                        <td></td>
                        <td>score + 10% of scored marks</td>
                     </tr>
                     <tr>
                        <th scope="row">2</th>
                        <td>3rd</td>
                        <td></td>
                        <td>score + 20% of scored marks</td>
                     </tr>
                     <tr>
                        <th scope="row">3</th>
                        <td>2nd</td>
                        <td></td>
                        <td>score + 30% of scored marks</td>
                     </tr>
                  </tbody>
               </table>
            </div> -->
            <!-- <div class="col-md-6">
               <h5 style="color: #8500A8;">NORMALISATION FOR CLASS 6th TO 10th</h5>
               <table class="table" style="font-weight:700">
                  <thead>
                     <tr>
                        <th scope="col">#</th>
                        <th scope="col">Class </th>
                        <th scope="col"></th>
                        <th scope="col">Grace-Marks</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th scope="row">1</th>
                        <td>9th</td>
                        <td></td>
                        <td>score + 10% of scored marks</td>
                     </tr>
                     <tr>
                        <th scope="row">2</th>
                        <td>8th</td>
                        <td></td>
                        <td>score + 20% of scored marks</td>
                     </tr>
                     <tr>
                        <th scope="row">3</th>
                        <td>7th</td>
                        <td></td>
                        <td>score + 30% of scored marks</td>
                     </tr>
                     <tr>
                        <th scope="row">4</th>
                        <td>6th</td>
                        <td></td>
                        <td>score + 40% of scored marks</td>
                     </tr>
                  </tbody>
               </table>
            </div> -->
            <!-- <div class="row" style="margin-top: 4rem;">
               <div class="col-md-7" >
                  <h1 style="color: #8500A8;">Why? <span>Doer Or Thinker</span> </h1>
                  <hr style="border: 1px solid black">
                  <h5 style="text-align: justify; color:black;">
                     These monetary security will be used only for there educational purpose with some conditions. These financial help with our educational expertise adn wisdom will help our students to achive their goal and win this real life journey.
                  </h5>
               </div>
               <div class="col-md-5" >
                  <img src="<?= base_url('assets/website/images/exams/g-removebg-preview.png') ?>"width="100%">
               </div>
            </div> -->
            <!-- <div class="row" style="margin-top: 4rem;">
               <div class="col-md-5">
                  <center><img src="<?= base_url('assets/website/images/gallery/AK59162.png') ?>" class="img-fluid" width="100%"></center>
               </div>
               <div class="col-md-7">
                  <h2 style="color: #8500A8;">Our Mission</h2>
                  <hr style="border: 1px solid black">
                  <h5 style="text-align: justify; color:black">
                     Our mission helps determined our students build better lives and fulfilling careers by providing crucial support that enables them to complete an accredited college degree or career-training program.
                  </h5>
               </div>
            </div> -->
            <div class="row" style="margin-top: 4rem;">
               <div class="col-md-7">
                  <h2 style="color: #8500A8; margin-top: 50px;">Our Vision</h2>
                  <hr style="border: 1px solid black">
                 <?php
                    if(!empty($aboutwebsite)){
                     foreach ($aboutwebsite as $key => $value) {
                    ?>
                     
                       <h5 style="text-align: justify; color:black;"><?=  $value['vision'];  ?></h5>

                    <?php
                     }
                    }



                  ?>
                 <!--  <h5 style="text-align: justify; color:black;">We have an impact on the academic experiences of our students, helping them connect with transformative opportunities and resources. These experiences expand their perspective of themselves and the world. </h5> -->
               </div>
               <div class="col-md-5">
                  <center><img src="<?= base_url('assets/website/images/vision.png') ?>"width="100%"></center>
               </div>
            </div>
         </div>
         </div>
      </div>
   </div>
</section>
<section class="about-us">
   <div class="abouOverlay">
      <div class="container">
            <div class="col-md-12">
               <h2 style="color: #8500A8;">General Instructions For The Candidates</h2>
               <hr style="border: 1px solid black">
            </div>
            <div class="col-md-12">
               <ul style="color:black;">

                  <?php
                  if(!empty($aboutwebsite)){
                     foreach ($aboutwebsite as $key => $value) {
                        if(!empty($value['Instruction'])){
                           ?>
                            <li> <h5 style="text-align: justify; color: black"><?= $value['Instruction']; ?> </h5></li>
                       <?php

                        }
                        
                     }
                  }

                   ?>
                   </ul>
                  
                
                  <!-- <li> <h5 style="text-align: justify; color: black">Candidates should invariably bring the following at the time of reporting for the examination:<br>a) Admission certificate.<br>b)Two copies of their latest coloured passport size photo.<br>c) Atleast one valid photo bearing identity proof in original with clear photograph such as passport, aadhar card / e-Aadhar card, driving licence, service ID card issued by employees, pan card, Voter card, ID card of school / College.<br>d)Facemask.</h5></li> -->
                  <!-- <li> <h5 style="text-align: justify; color: black">Candidates shall be permitted to appear in the exam only at the venue as specified in the admission certificate.</h5></li>
                  <li><h5 style="text-align: justify; color: black"> Candidates must ensure that they do not appear in the examination more than once. Otherwise candidature of such candidates would be cancelled and appropriate action will be taken against them.</h5></li>
                  <li><h5 style="text-align: justify; color: black"> Candidature of candidates is purely provisional it is advised that candidates should satisfy themselves that they fulfill all the eligibility conditions. If at any stage, it is found that a candidate does not fulfill any of the eligibility condition his / her candidature shall be cancelled.</h5></li>
                  <li><h5 style="text-align: justify; color: black"> Prohibited items such as watches, books, pens, paper chits, magazines, electronic gadgets, etc are strictly not allowed in the examination lab.</h5></li>
                  <li><h5 style="text-align: justify; color: black">  Candidates are advised not to bring bags and prohibited items into the examination venue. In case they bring any such item they would have to make their own arrangements for safe custody of such items. The commission will not be liable to make any arrangement for such things.</h5></li>
                  <li><h5 style="text-align: justify; color: black">  Candidates are advised to visit the exam venue at least one day in advance so that they can reach the examination venue on the date of exam in time.</h5></li>
                  <li><h5 style="text-align: justify; color: black">  No candidate will be allowed to leave the examination lab before the completion of the examination time for any reason without permission.</h5></li>
                  <li><h5 style="text-align: justify; color: black">  Pen and paper for rough work would be provided in the examination lab.</h5></li>
                  <li><h5 style="text-align: justify; color: black"> Candidate must strictly abide by the instructions given by the exam functionaries.</h5></li>
                  <li><h5 style="text-align: justify; color: black"> If any candidate is found obstructing the conduct of the examination or creating disturbances at the examination venue his / her candidature shall be cancelled.</h5></li>
                  <li><h5 style="text-align: justify; color: black">  If the examination does not commence at the scheduled time, candidates should follow the instructions of the exam functionaries.</h5></li><li><h5 style="text-align: justify; color: black">If any candidate is found in  inebriated state that candidate will not be allowed entry to the venue.</h5></li>
                  <li><h5 style="text-align: justify; color: black">In case of any doubt or clarification the candidates are advised to contact the concerned regional office personally or through the helpline numbers as indicated in the admission certificate.</h5></li> -->
               

               <!-- <div class="button-h4"><a class="btn btn-highlight type1 " href="<?= base_url('website/aboutus')?>" title="">Read more</a></div> -->
            </div>
         </div>
      </div>
   </section>
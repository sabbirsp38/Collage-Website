<?php include 'inc/hader2.php'; ?>
<div style="min-height: 100px;"></div>
<div class="container-fluid fc">
  <div class="container regfrom">
      <center>
        <h1>Corporate Training Courses</h1>
      </center>
     <form data-provide="validation" data-disable="false" method="post" autocomplete="off" enctype="multipart/form-data" novalidate="true"   action="lccc/Registration.php">
      <input type="hidden" name="recipient" value="info@londoncomputercollege.co.uk">
      <input type="hidden" name="subject" value="Corporate Training Registration">
        <div class="row">
          <div class="sec1">
            <div class="col-md-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label for="text">Name:</label>
                <input name="name" type="text" class="form-control" id="text" placeholder="Your Full Names"  required>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label for="pwd">Company Business Name:</label>
                <input name="business" type="text" class="form-control" id="pwd" placeholder="Company Business Name" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label for="pwd">Business Address1:</label>
                <input name="address1" type="text" class="form-control" id="pwd" placeholder="Business Address" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label for="pwd">Business Address2:</label>
                <input name="address2" type="text" class="form-control" id="pwd" placeholder="Company Business Name" >
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label for="pwd">City:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Company Business Name" name="city" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label for="pwd">Country:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Company Business Name" name="country" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label for="pwd">Business Web Address:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Company Business Name" name="website" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label for="pwd">Your Business E-mail:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Company Business Name" name="email" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label for="pwd">Business Telephone Number:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Company Business Name" name="phone" required>
              </div>
            </div>
            <div class="col-md-6 col-lg-6 col-md-6">
              <div class="form-group">
                <label for="pwd">Your Mobile Number:</label>
                <input type="text" class="form-control" id="pwd" placeholder="Company Business Name" name="mobile" required>
              </div>
            </div>
            
          </div>
          <div class="sec2">
            <div class="col-md-12 col-lg-12 col-md-12">
              <div class="form-group">
                <label for="pwd">Which course(s) are you interested in?</label>
                <div class="checkbox">
                  <div class="col-md-3 col-lg-3 col-md-3">
                    <label><input type="checkbox" name="BEE" value="yes">Business Enterprise & Entrepreneurship</label> 
                    <label><input type="checkbox" name="Workshop" value="yes">Project Management Workshop</label>
                    <label><input type="checkbox" name="Prince2" value="yes">Prince2 Foundation</label>
                  </div>
                  <div class="col-md-3 col-lg-3 col-md-3">
                    <label><input type="checkbox" name="Prince2_Adv" value="yes">Prince2 Advanced</label>
                    <label><input type="checkbox" name="Project_Intro" value="yes">MS Project Introduction</label>
                    <label><input type="checkbox" name="Project_Inter" value="yes">MS Project Intermediate</label>
                  </div>
                  <div class="col-md-3 col-lg-3 col-md-3">
                    <label><input type="checkbox" name="Project_Adv" value="yes">MS Project Advanced</label>
                    <label><input type="checkbox" name="Risk_Management" value="yes">Risk Management</label>
                    <label><input type="checkbox" name="Quality_Management" value="yes">Quality Management</label>
                    <label><input type="checkbox" name="Strategic" value="yes">Strategic Management</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-12 col-md-12">
              <div class="form-group" style="margin-top: 15px;">
                <label for="pwd">Expected delegate numbers from same company (there is a 5% discount for 5 or more): </label>
                <input type="text" class="form-control" id="pwd" placeholder="Company Business Name" name="number" size="10" maxlength="10" required>
              </div>
            </div>
          </div>
          <div class="sec3 ">
            <div class="col-md-12 col-lg-12 col-md-12">
              <div class="form-group">
                <label for="sel1">How did you find us?</label>
                <select name="how" class="form-control" id="sel1">
                  <option value=""> -- Please select -- </option>
                  <option>Google</option>
                  <option>Link from a website</option>
                  <option>Word of mouth</option>
                  <option>Other</option>
                </select>
              </div>
              <div class="form-group">
                <label for="sel1">Comments:</label>
                <textarea name="comments" id="" cols="80" rows="6" class="form-control" spellcheck="false" placeholder="We are happy to receive any feedback"></textarea>
              </div>

              
            </div>
          </div>

          <div class="sec4">
            <div class="col-md-12 col-lg-12 col-md-12">
              <div class="checkbox">
               <center> <label><input type="checkbox" name="Prince2" value="yes" required> I have read the Terms & Conditions and accept them</label></center>
              </div>
            </div>
            <div class="col-md-12 col-lg-12 col-md-12">
             <center><button type="submit" class="btn btn-success btn-block success">Send Registration Form</button></center>
            </div>
          </div>
        </div>    
    </form>
   </div>
 </div> 

 <?php include 'inc/foter.php'; ?>
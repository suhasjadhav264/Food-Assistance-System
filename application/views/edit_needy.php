<div id="wrapper">
  <div class="main-content">
    <div class="row small-spacing">

<div class="container" style="">
  <center class="margin-bottom-20"><h3>Edit Needy</h3></center>
  <div class="row ">
     <div class="panel panel-primary">
       
       <div class="panel-body">
          <form action="" method="POST" enctype="multipart/form-data">

            <div class="col-lg-6">
              <div class="form-group">

                <label>Name</label>
                <input type="text" name="needy_name" class="form-control" value="<?php echo $needyData->needy_name ?>" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label>Address</label>
                <input type="text" name="needy_address" class="form-control" value="<?php echo $needyData->needy_address ?>"required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-check-label">Aadhaar No.</label>
                <input type="text" name="needy_aadhaar" class="form-control" value="<?php echo $needyData->aadhaar ?>" pattern="[1-9]{1}[0-9]{11}" maxlength="12" required>
              </div>
            </div>

            

            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-check-label">Age</label>
                <input type="number" name="needy_age" class="form-control" value="<?php echo $needyData->needy_age ?>" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-check-label">City</label>
                <input type="text" name="needy_city" class="form-control" value="<?php echo $needyData->city ?>" required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-check-label">Pincode</label>
                <input type="text" name="needy_pincode" class="form-control" value="<?php echo $needyData->pincode ?>" pattern="[1-9]{1}[0-9]{5}" maxlength="6"  required>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label >Gender</label>
                <div>
                  <label  class="radio-inline"><input type="radio" name="needy_gender" value="m" <?php if($needyData->needy_gender == 'm') echo 'checked'; ?> required>Male</label>
                  <label  class="radio-inline"><input type="radio" name="needy_gender" value="f" <?php if($needyData->needy_gender == 'f') echo 'checked'; ?> required>Female</label>
                  <label  class="radio-inline"><input type="radio" name="needy_gender" value="o" <?php if($needyData->needy_gender == 'o') echo 'checked'; ?> required>Others</label>
                </div>
              </div>
            </div>

            <!-- <div class="col-lg-6">
              <div class="form-group">
                <label class="form-check-label">Change Profile Pic</label>
                <input type="file" name="profile_pic" class="form-control">
              </div>
            </div> -->

            <div class="col-lg-12" style="text-align: right">
              <input type="submit" name="submit" class="btn btn-primary">
            </div>
          </form>
       </div>
     </div>
  </div>
</div>

</body>
</html>
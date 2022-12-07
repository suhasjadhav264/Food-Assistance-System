<div id="wrapper">
  <div class="main-content">
    <div class="row small-spacing">
<div class="container" style="">
  <div class="row">
     <div class="panel panel-primary">
       
       <div class="panel-body">
          <form action="<?php echo base_url().'Needy_master/add_restaurant'?>" method="POST">

            <div class="col-lg-6">
              <div class="form-group">
                <label>Restaurant Name</label>
                <input type="text" name="res_name" class="form-control" required>
              </div>
            </div>

            <div class="col-lg-6">
            <div class="form-group">
              <label>Address</label>
              <input type="text" name="res_address" class="form-control" required>
            </div>
            </div>
          
            <div class="col-lg-6">
           <div class="form-group">
              <label>Phone</label>
              <input type="text" name="res_phone" class="form-control" pattern="[0-9]{1}[1-9]{9}" maxlength="10"  required>
            </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label>City</label>
                <input type="text" name="res_city" class="form-control" required>
              </div>
            </div>

            <div class="col-lg-6">
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="res_email" class="form-control" required>
            </div>
            </div>

            <div class="col-lg-6">
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="res_username" class="form-control" required>
            </div>
            </div>

            <div class="col-lg-6">
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="res_password" class="form-control" required>
            </div>
            </div>

            <div class="col-lg-12" style="text-align: right;">
              <input type="submit" name="submit" class="btn btn-success">
            </div>
          
          </form>
       </div>
     </div>
  </div>
</div>

</body>
</html>
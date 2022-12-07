
<div id="wrapper">
  <div class="main-content">
    <div class="row small-spacing">
   <div class="container">
          <div class="card" style="background-color: #fff; padding: 25px;">
           <div class="card-body">

            <div class="row mb-3">
              <div class="col-lg-6">
                <h3>Needy List</h3>
              </div>

              <div class="col-lg-6" style="text-align: right">
                <a href="<?php echo base_url() ?>Needy_master/add_needy"><button class="btn btn-primary">+ Add New Needy</button></a>
              </div>
            </div>

            <table class="table  table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col">Needy ID</th>
              <th scope="col">Name </th>
              <th scope="col">Address</th>
              <th scope="col">Aadhar number</th>
              <th scope="col">Gender</th>
              <th scope="col">Age</th>
              <th scope="col">City</th>
              <th scope="col">Pincode</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
       <?php $i=0; foreach ($needy as $need ) {?>
       <tr>
         <td><?php echo $need->id ?></td>
          <td><?php echo $need->needy_name ?></td>
           <td><?php echo $need->needy_address ?></td>
           <td><?php echo $need->aadhaar ?></td>
            <td><?php echo $need->needy_gender ?></td>
             <td><?php echo $need->needy_age ?></td>
             <td><?php echo $need->city ?></td>
             <td><?php echo $need->pincode ?></td>
            <td>
            <a href="#" onclick="Delete_needy('<?php echo $need->id; ?>')" class="delete_rest" id="<?php echo $need->id; ?>">
                <font color="red"><i class="ti-trash"></i></font>
            </a>

            <a href="<?php echo base_url() ?>Needy_master/edit_needy/<?php echo $need->id ?>">
                <font color="blue"><i class="ti-pencil-alt"></i></font>
            </a>
          </td>
          <?php } ?>
       </tr>
    </tbody> 
  </table>
 </div>;
</div>
    

    

  <script type="text/javascript">
   
   function Delete_needy(id) {
    if (confirm("Are you sure want to delete this?")) 
    {
        window.location="<?php echo base_url(); ?>Needy_master/delete_needy/"+id;
    }
   }

  </script>
</body>
</html>


    



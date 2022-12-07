<div id="wrapper">
  <div class="main-content">
    <div class="row small-spacing">
   <div class="container">
            <div class="card"> 
           <div class="card-body">
                
            <div class="row margin-bottom-10">
                <div class="col-lg-6">
                    <h3>Restaurant List</h3>
                </div>

                <div class="col-lg-6" style="text-align: right">
                    <a href="<?php echo base_url() ?>Needy_master/add_restaurant"><button class="btn btn-primary">+ Add New Restaurant</button></a>
                </div>
            </div>

            <table class="table  table-hover table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Name Restaurant</th>
              <th>Address</th>
              <th>Phone</th>
              <th>City</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php $i=0; foreach ($restaurant as $res) {?>
        <tr>
         <td><?php echo ++$i ?></td>
          <td><?php echo $res->res_name ?></td>
           <td><?php echo $res->res_address ?></td>
           <td><?php echo $res->res_phone ?></td>
           <td><?php echo $res->res_city ?></td>
           <td><?php echo $res->res_email?></td>
           <td>
            <a href="#" onclick="Delete_Rest('<?php echo $res->id; ?>')" class="delete_rest" id="<?php echo $res->id; ?>">
                <font color="red"><i class="ti-trash"></i></font>
            </a>

            <a href="<?php echo base_url() ?>Needy_master/edit_rest/<?php echo $res->id ?>">
                <font color="blue"><i class="ti-pencil-alt"></i></font>
            </a>

          </td>
          <?php }?>
       </tr>
     </tbody>
  </table>
 </div>
</div>
</div>
    

    

  <script type="text/javascript">
    

        function Delete_Rest(id){
            if (confirm("Are you sure want to delete this?")) 
            {
                window.location="<?php echo base_url(); ?>Needy_master/delete_rest/"+id;
            }
        }
  </script>
</body>
</html>
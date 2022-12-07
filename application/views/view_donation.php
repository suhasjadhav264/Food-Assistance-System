
<div id="wrapper">
  <div class="main-content">
    <div class="row small-spacing">
   <div class="container">
          <div class="card" style="background-color: #fff; padding: 25px;">
           <div class="card-body">

            <div class="row mb-3">
              <div class="col-lg-6">
                <h3>Donations</h3>
              </div>

              <div class="col-lg-6" style="text-align: right">
                
              </div>
            </div>

            <table class="table  table-hover table-bordered">
          <thead>
            <tr>
              <th scope="col">Sl. No.</th>
              <th scope="col">Amount </th>
              <th scope="col">Donated By</th>
              <th scope="col">Donated Through</th>
              <th scope="col">Donation Date</th>
              <th scope="col">Action</th>
              
            </tr>
          </thead>
          <tbody>
       <?php $i=0; foreach ($donation_list as $d ) {?>
       <tr>
         <td><?php echo ++$i ?></td>
          <td><?php echo $d->amount ?></td>
           <td><?php echo $d->donated_by ?></td>
            <td><?php echo $d->donated_through ?></td>
             <td><?php echo $d->donated_date ?></td>
            <td>
            <a href="#" onclick="Delete_donation('<?php echo $d->id; ?>')" class="delete_rest" id="<?php echo $d->id; ?>">
                <font color="red"><i class="ti-trash"></i></font>
            </a>

          </td>
          <?php } ?>
       </tr>
    </tbody> 
  </table>
 </div>;
</div>
    

    

  <script type="text/javascript">
   
   function Delete_donation(id) {
    if (confirm("Are you sure want to delete this?")) 
    {
        window.location="<?php echo base_url(); ?>Reports/delete_donation/"+id;
    }
   }

  </script>
</body>
</html>


    



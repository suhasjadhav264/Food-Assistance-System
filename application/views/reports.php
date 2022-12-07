<div id="wrapper">
  <div class="main-content">
    <div class="row small-spacing">
   <div class="container">
            <div class="card"> 
           <div class="card-body">
                
            <div class="row margin-bottom-10">
                <div class="col-lg-6">
                    <h3><?php echo $title; ?></h3>
                </div>

                <div class="col-lg-6" style="text-align: right">
                    
                </div>
            </div>

            <table class="table  table-hover table-bordered">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Date</th>
              <th>Name Restaurant</th>
              <th>Needy Name</th>
              <th>Food Given Type</th>
              <th>Photo</th>
              <?php if($type == "not_paid"){ ?>
                <th>Action</th>
              <?php } else { ?>
                <th>Status</th>
              <?php } ?>
            </tr>
          </thead>
          <tbody>
          <?php $i=0; foreach ($reports as $res) {?>
        <tr>
         <td><?php echo ++$i ?></td>
         <td><?php echo $res->created_at ?></td>
          <td><?php echo $res->res_name ?></td>
           <td><?php echo $res->needy_name ?></td>
           <td><?php echo $res->type ?></td>
           <td><a href="<?php echo base_url()."assets/food_given/".$res->photo ?>" target="_blank"><img src="<?php echo base_url()."assets/food_given/".$res->photo ?>" height="50px" width="50px"></a></td>
           <td style="text-align: center">

            <?php if($type == "not_paid"){ ?>
                <button onclick="accept_('<?php echo $res->id ?>')" class="btn btn-success">Accept</button>
                <button onclick="reject_('<?php echo $res->id ?>')" class="btn btn-danger">Reject</button>
              <?php } else { 
                
                echo $res->payout;

              } ?>
                


           </td>
          <?php }?>
       </tr>
     </tbody>
  </table>
 </div>
</div>
</div>
    

    

  <script type="text/javascript">
    function accept_(id) {
        if(confirm("You want to accept this?")){
            window.location.href="<?php echo base_url() ?>Reports/accept/"+id;
        }
    }

    function reject_(id) {
        if(confirm("You want to Reject this?")){
            window.location.href="<?php echo base_url() ?>Reports/reject/"+id;
        }
    }
  </script>
</body>
</html>
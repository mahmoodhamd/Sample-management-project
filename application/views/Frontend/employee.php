 
        
<div class="container">
       
       <div class="row">
        <div class="col-md-12">
         <div class="card">
       <div class="card-header">
        <h5>
           Employee Data
         <a href="<?php echo base_url('employee/add');?>" class="btn btn-primary float-right">Add Employee </a>
   
        </h5>
   
       </div>
       <div class="card-body">
       <div class="box-header">
              <h4 class="box-title" align="center"><?php if ($this->session->flashdata('category_success')) { ?>
                  <div id="message" style="color: #EC722E;display:none;" align="center"> <i class="fa fa-check" style="font-size: 15px;color: green;"></i><b> <?= $this->session->flashdata('category_success') ?></b> </div>
    <?php } ?></h4>
               
               </div>
       <table class="table table-bordered">
             
              <thead>
                  <tr>
                   <th>ID</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Phone No.</th>
                   <th>Email Id</th>
                   <th>Edit</th>
                   <th>Delete</th>
                   <th> Confirm Delete </th>
                   
                   
                  </tr>
              </thead>
              <tbody>
               <?php foreach($employee as $row) :?>
                <tr>
           
                <td><?php echo $row->id; ?></td>
                   <td><?= $row->first_name ?></td>
                   <td><?= $row->last_name ?></td>
                   <td><?= $row->phone ?></td>
                   <td><?= $row->email ?></td>
                   <td>
                       <a href="<?= base_url('employee/edit/'.$row->id)  ?>" class="btn btn-success btn-sm">Edit</a>
                   </td>

                   <td>
                    <a href="<?php echo base_url('employee/createadvance');?>" class="btn btn-primary float-right">Advance </a>
                   </td>
   
                   <td>
                       <a href="<?= base_url('employee/delete/'.$row->id) ?>" class="btn btn-danger btn-sm">Delete</a>
                   </td>
                    
                    <td>
                   <button type="button" class="btn btn-danger confirm-delete" value="<?= $row->id ?>">Confirm Delete</button>
                   </td>
                  

                                
                   
                   
                </tr>
               <?php endforeach; ?>
              </tbody>
   
           </table>        
   
       </div>
   
   
         </div>
   
   
        </div>
   
       </div>
   
   
       </div>
   
       <!-- Optional JavaScript; choose one of the two! -->
   
       <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
       
     </body>
   </html>
   <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script>
        //When the page has loaded.
        $( document ).ready(function(){
            <?php if ($this->session->flashdata('category_success')) { ?>
            $('#message').fadeIn('slow', function(){
               $('#message').delay(5000).fadeOut(); 
            });
            <?php $this->session->unset_userdata('category_success'); ?>
        <?php } ?>
        });
        </script>

<div class="container">
       
       <div class="row">
        <div class="col-md-12">
         <div class="card">
       <!-- <div class="card-header">
        <h5>
           Driver's Data
           php echo base_url('employee/add');?
         <a href="" class="btn btn-primary float-right">Add Employee </a>
   
        </h5>
   
       </div> -->
       <div class="card-body">
           <table class="table table-bordered">
   
              <thead>
                  <tr>
                   <th>ID</th>
                   <th>Driver Name</th>
                   <th>Driver Last Name</th>
                   <th>Driver Phone No.</th>
                   <th>Driver Email Id</th>
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
                   <!-- <td>
                     <a href="<>" class="btn btn-success btn-sm">Edit</a>
                   </td>

                   <td>
                  
                    <a href="<>" class="btn btn-primary float-right">Advance </a>
                   </td>
   
                   <td>
                       <a href="<>" class="btn btn-danger btn-sm">Delete</a>
                   </td>
                    
                    <td>
                   <button type="button" class="btn btn-danger confirm-delete" value="<>">Confirm Delete</button>
                   </td> -->
                  

                                
                   
                   
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
   


<div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Edit</h2>
      </div>

      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Edit Post</h4>
          <a href="<?php echo base_url('employee');?>" class="btn btn-danger float-right">Back </a>

        </div>
        <div class="card-body">
        <form action="<?php echo base_url('employee/update/' .$employee->id) ?>" method="POST">

          <div class="form-group">
            <label>First Name</label>
            <input class="form-control" type="text" name="first_name" value="<?php echo $employee->first_name; ?>">
            <small><?php echo form_error('first_name'); ?></small>
        </div>

          <div class="form-group">
            <label>Last Name</label>
            <input class="form-control" type="text" name="last_name" value="<?php echo $employee->last_name; ?>">
            <small><?php echo form_error('last_name'); ?></small>
	   
        </div>


          
          <div class="form-group">
            <label>Phone</label>
            <input class="form-control" type="text" name="phone" value="<?php echo $employee->phone; ?>">
            <small><?php echo form_error('phone'); ?></small>
	   
        </div>

          <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="text" name="email" value="<?php echo $employee->email; ?>">
            <small><?php echo form_error('email'); ?></small>
	  
        </div>

          <div class="form-group">
            <button type="submit" class="btn btn-info">  Update </button>
          </div>

        </form>
        </div>

      </div>
    </div>
  </div>



 
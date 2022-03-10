<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
    <div class="card shadow">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
    
    <form action="<?= base_url('Auth/RegisterController/register')?>" method="post" >
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="validationCustom01" value="<?= set_value('name') ?>" name="name">
    <span class="text-danger"><?php echo form_error('name');?></span>

  </div>
  <br>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">UserName (Alpha Numeric)</label>
    <input type="text" class="form-control" id="validationCustom02"value="<?= set_value('username') ?>" name="username">
    <span class="text-danger"><?php echo form_error('username');?></span>

  </div>
  <br>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="validationCustom02" value="<?= set_value('mobile_number') ?>" name="mobile_number">
    <span class="text-danger"><?php echo form_error('mobile_number');?></span>

  </div>
  <br>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="validationCustom01" value="<?= set_value('email') ?>" name="email">
    <span class="text-danger"><?php echo form_error('email');?></span>

  </div>
  <br>
  
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationCustom02"  name="password">
    <span class="text-danger"><?php echo form_error('password');?></span>

  </div>
  <br>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Confirm Password</label>
    <input type="text" class="form-control" id="validationCustom02" name="cpassword">
    <span class="text-danger"><?php echo form_error('cpassword');?></span>

  </div>
  <br>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>

</form>
</div>
</div>
</div>
</div>
</body>
</html>
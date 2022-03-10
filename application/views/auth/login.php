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
        <?php if($this->session->flashdata('status')) :?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('status');?>
            </div>
            <?php endif; ?>
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
    
    <form action="<?= base_url('Auth/LoginController/login')?>" method="post" >
  
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">UserName (Alpha Numeric)</label>
    <input type="text" class="form-control" id="validationCustom02"value="<?= set_value('username') ?>" name="username">
    <span class="text-danger"><?php echo form_error('username');?></span>

  </div>
  
  
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationCustom02"  name="password">
    <span class="text-danger"><?php echo form_error('password');?></span>

  </div>
  
  <br>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Login</button>
  </div>

  </form>
</div>
</div>
</div>
</body>
</html>
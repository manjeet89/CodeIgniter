<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Document</title>
</head>
<body>
<?php if($this->session->flashdata('status')) :?>
            <div class="alert alert-success">
                <?= $this->session->flashdata('status');?>
            </div>
            <?php endif; ?>
    <div class="container">
     
        <a style="float:left" href="<?= base_url('auth/UserPage/logout')?>"> Logout</a>
        <table class="table table-striped">
            <thead>
                <th scope="col">Full Name</th>
                <th scope="col"> UsereName</th>
                <th scope="col">Mobile Nuber</th>
                <th scope="col">Email</th>

            </thead>
            <tbody>
       
                <tr>
                   <th><?=  $this->session->userdata('auth_user')['full_name'] ;?></th>
                   <th><?=  $this->session->userdata('auth_user')['username'] ;?></th>
                   <th><?=  $this->session->userdata('auth_user')['mobile_number'] ;?></th>
                   <th><?=  $this->session->userdata('auth_user')['email'] ;?></th>

                </tr>
              
            </tbody>
        </table>
    </div>
</body>
</html>
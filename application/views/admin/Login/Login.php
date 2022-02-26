<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/bootstrap.css">

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/admin/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/css/app.css">
</head>

<body>
    <div id="auth">

<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="<?php echo base_url(); ?>assets/admin/images/favicon.svg" height="48" class='mb-4'>
                        <h3>Sign In</h3>
                        <!-- <p>Please sign in to continue to Voler.</p> -->
                    </div>
                    <form method="post" action="<?php echo base_url();?>Login/">
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="text" name="username" class="form-control" id="username" value="">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                            </div>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="password" id="password" value="">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="float-right">
                                <a href="<?php echo base_url() ?>Register">Don't have an account?</a>
                            </div>
                        </div>
                        <div class="clearfix">
                          <?php if(isset($message)) echo $message; ?>
                            <button class="btn btn-primary float-right"> LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="<?php echo base_url(); ?>assets/admin/js/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/js/app.js"></script>

    <script src="<?php echo base_url(); ?>assets/admin/js/main.js"></script>
</body>

</html>

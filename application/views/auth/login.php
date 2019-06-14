<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="<?= base_url('assets/backend/') ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/backend/') ?>dist/css/AdminLTE.min.css">

    <link rel="shortcut icon" href="<?= base_url('assets/img/logo.png'); ?>">

    <style>
        body {
            height: 0;
        }

        .login-box-body {
            padding: 20px 20px 40px 20px;
        }

        .login-box {
            margin-top: 150px;
        }
    </style>

</head>

<body class="bg-green">
    <div class="login-box">
        <div class="login-box-body">
            <div class="login-logo">
                <a href="" class="text-green"><b>MA</b>YPI</a>
            </div>

            <form action="" method="post" id="form-login">
                <div class="form-group has-feedback">
                    <input type="text" name="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success btn-block btn-flat">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="http://localhost/ta/assets/jquery/jquery.min.js"></script>
    <script src="http://localhost/ta/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
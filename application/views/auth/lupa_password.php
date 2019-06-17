<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?></title>
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
                <h3>Pemulihan Akun</h3>
            </div>
                    
            <?= $this->session->flashdata('message'); ?>

            <form action="<?= base_url('auth/lupa_password'); ?>" method="post" id="form-login">
                <div class="form-group has-feedback">
                    <input type="text" name="email" class="form-control" placeholder="Masukkan Email Anda" value="<?= set_value('email'); ?>">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <?= form_error('email'); ?>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success btn-block btn-flat">Reset Password</button>
                        <a href="<?= base_url('auth'); ?>" class="btn btn-block">Kembali ke Login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="http://localhost/ta/assets/jquery/jquery.min.js"></script>
    <script src="http://localhost/ta/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
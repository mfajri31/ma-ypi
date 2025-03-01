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
                <h3>Ganti Password</h3>
            </div>

            <form action="<?= base_url('auth/ganti_password'); ?>" method="post" id="form-login">
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Baru" value="<?= set_value('password'); ?>">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('password'); ?>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="passconf" class="form-control" placeholder="Masukkan Konfirmasi Password Baru" value="<?= set_value('passconf'); ?>">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <?= form_error('passconf'); ?>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-success btn-block btn-flat">Ganti Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="http://localhost/ta/assets/jquery/jquery.min.js"></script>
    <script src="http://localhost/ta/assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
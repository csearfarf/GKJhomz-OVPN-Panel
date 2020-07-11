<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="../asset/css/sb-admin-2.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 ver-parent">
                <?php if ($PHP): ?>
                    
                        <div class="alert alert-danger ver-center">
                            <h1>Error !!</h1> PHP minimal versi 5.3.4... Update PHP anda !
                        </div>
                    
                    <?php else: ?>
                        <?php if ($message): ?>
                            <div class="alert alert-<?php echo $message['type']; ?>"><?php echo $message['data']; ?></div>
                        <?php endif; ?>
                        <div class="login-panel panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> Installation</h3>
                            </div>
                            <form role="form" action="<?php echo $URI; ?>" method="POST">
                                <fieldset>
                                    <div class="panel-body">
                                        <h1>Database</h1>
                                        <div class="form-group">
                                            <label>Database Host</label>
                                            <input class="form-control" placeholder="localhost" name="DB_HOST" type="text" value="localhost" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Database Name</label>
                                            <input class="form-control" placeholder="OCS_PANEL" name="DB_NAME" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Database User</label>
                                            <input class="form-control" placeholder="root" name="DB_USER" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Database Pass</label>
                                            <input class="form-control" placeholder="p4s5w0ord" name="DB_PASS" type="text">
                                        </div>
                                        <h1>Admin Login</h1>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" placeholder="admin" name="username" type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Password Baru</label>
                                            <input class="form-control" placeholder="New Password" name="password" type="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Masukkan Ulang Password Baru</label>
                                            <input class="form-control" placeholder="Re-enter New Password" name="password_confirmation" type="password" required>
                                        </div>
                                    </div>
                                    <div class="panel-footer">
                                        <button class="btn btn-lg btn-success btn-block">Install</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    
                <?php endif; ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="../asset/js/sb-admin-2.js"></script>
</body>
</html>

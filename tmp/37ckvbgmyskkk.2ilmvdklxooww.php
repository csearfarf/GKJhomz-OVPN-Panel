<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Setting</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php if ($message): ?>
                <div class="alert alert-<?php echo $message['type']; ?>"><?php echo $message['data']; ?></div>
            <?php endif; ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-gear fa-fw"></i> Change Password
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo $URI; ?>" method="POST">
                        <div class="form-group">
                            <label>Old Password:</label>
                            <input class="form-control" placeholder="Old Password" name="oldpass" type="password" required>
                        </div>
                        <div class="form-group">
                            <label>New Password:</label>
                            <input class="form-control" placeholder="New Password" name="password" type="password" required>
                        </div>
                        <div class="form-group">
                            <label>Re-Enter New Password:</label>
                            <input class="form-control" placeholder="Re-enter New Password" name="password_confirmation" type="password" required>
                        </div>
                        <button class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

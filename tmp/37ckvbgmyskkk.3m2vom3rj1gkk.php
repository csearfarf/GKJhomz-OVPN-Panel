<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php if ($seller->id): ?>
                    
                        Edit Seller Account
                        <a href="/home/admin/seller" class="btn btn-default pull-right"><i class="fa fa-arrow-left fa-fw"></i> Back</a>
                    
                    <?php else: ?>
                        Add Seller Account
                    
                <?php endif; ?>
            </h1>
        </div>
    </div>
    <div class="row">
        <?php if ($message): ?>
            <div class="col-lg-12">                    
                <div class="alert alert-<?php echo $message['type']; ?>"><?php echo $message['data']; ?></div>
            </div>
        <?php endif; ?>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-user fa-fw"></i> Account Details
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo $URI; ?>" method="POST">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" placeholder="Username" name="username" type="text" value="<?php echo $seller->username; ?>" required>
                        </div>
                        <?php if (!$seller->id): ?>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="New Password" name="password" type="password" required>
                            </div>
                            <div class="form-group">
                                <label>Re-Enter Password</label>
                                <input class="form-control" placeholder="Re-enter Password" name="password_confirmation" type="password" required>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label>Balance</label>
                            <div class="input-group">
                                <span class="input-group-addon">Credits </span>
                                <input class="form-control" placeholder="10000" name="saldo" type="number" step="100" value="<?php echo $seller->saldo; ?>" required>
                            </div>
                        </div>
                        <button class="btn btn-primary">Save</button>
                        <?php if ($seller->id): ?>
                            
                                <?php if ($seller->active==1): ?>
                                    
                                        <a href="<?php echo $URI.'/active/0'; ?>" class="btn btn-warning">Lock</a>
                                    
                                    <?php else: ?>
                                        <a href="<?php echo $URI.'/active/1'; ?>" class="btn btn-success">Unlock</a>
                                    
                                <?php endif; ?>
                                <a href="<?php echo $URI.'/delete'; ?>" class="btn btn-danger hapus">Delete</a>
                            
                            <?php else: ?>
                                <a href="/home/admin/seller" class="btn btn-default">Back</a>
                            
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
        <?php if ($seller->id): ?>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-gear fa-fw"></i> Change Password
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo $URI; ?>" method="POST">
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" placeholder="New Password" name="password" type="password" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" placeholder="Re-Enter New Password" name="passwordconfirmation" type="password" required>
                            </div>
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
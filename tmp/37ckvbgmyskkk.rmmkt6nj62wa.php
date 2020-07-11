<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php if ($user->uid): ?>
                    
                        Edit SSH User
                        <a href="/home/admin/server/<?php echo $server->id; ?>/account/" class="btn btn-default pull-right"><i class="fa fa-arrow-left fa-fw"></i> Back</a>
                    
                    <?php else: ?>
                        Add SSH User
                    
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
                            <input class="form-control" placeholder="Username" name="user" type="text" value="<?php echo $user->user; ?>" required>
                        </div>
                        <?php if (!$user->uid): ?>
                            <div class="form-group">
                                <label>New Password:</label>
                                <input class="form-control" placeholder="New Password" name="pass" type="password" required>
                            </div>
                            <div class="form-group">
                                <label>Re-Enter New Password:</label>
                                <input class="form-control" placeholder="Re-enter Password" name="pass_confirmation" type="password" required>
                            </div>
                        <?php endif; ?>
                        <div class="form-group">
                            <label>Expiration</label>
                            <div class="input-group date">
                                <input type="text" class="form-control" name="exp" value="<?php echo $user->exp?$user->exp:date("Y/m/d",strtotime("+7 days")); ?>">
                                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                            </div>
                        </div>
                        <button class="btn btn-primary">Save</button>
                        <?php if ($user->uid): ?>
                            
                                <?php if ($user->lock): ?>
                                    
                                        <a href="<?php echo $URI.'/active/1'; ?>" class="btn btn-success">Unlock</a>
                                    
                                    <?php else: ?>
                                        <a href="<?php echo $URI.'/active/0'; ?>" class="btn btn-warning">Lock</a>
                                    
                                <?php endif; ?>
                                <a href="<?php echo $URI.'/delete'; ?>" class="btn btn-danger hapus">Delete</a>
                            
                            <?php else: ?>
                                <a href="/home/admin/server/<?php echo $server->id; ?>/account/" class="btn btn-default">Back</a>
                            
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
        <?php if ($user->uid): ?>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-gear fa-fw"></i> Change Password
                    </div>
                    <div class="panel-body">
                        <form role="form" action="<?php echo $URI; ?>" method="POST">
                            <div class="form-group">
                                <label>New Password:</label>
                                <input class="form-control" placeholder="New Password" name="pass" type="password" required>
                            </div>
                            <div class="form-group">
                                <label>Re-Enter New Password:</label>
                                <input class="form-control" placeholder="Re-enter Password" name="pass_confirmation" type="password" required>
                            </div>
                            <button class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
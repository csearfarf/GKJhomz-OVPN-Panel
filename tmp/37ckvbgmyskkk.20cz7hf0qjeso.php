<!--
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php if ($server->id): ?>
                    
                        <?php echo $server->servername; ?>
                    
                    <?php else: ?>
                        Add Server
                    
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
                    <i class="fa fa-gear fa-fw"></i> Server Settings
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo $URI; ?>" method="POST">
                        <div class="form-group">
                            <label>Server Name</label>
                            <input class="form-control" placeholder="Server 1" name="servername" type="text" value="<?php echo $server->servername; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Server Location</label>
                            <input class="form-control" placeholder="Singapore" name="country" type="text" value="<?php echo $server->country; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>IP / Host</label>
                            <input class="form-control" placeholder="192.168.1.1 atau www.example-server.com" name="host" type="text" value="<?php echo $server->host; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Price / 7 Days</label>
                            <div class="input-group">
                                <span class="input-group-addon">Credits: </span>
                                <input class="form-control" placeholder="10000" name="price" type="number" step="100" value="<?php echo $server->price; ?>" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Root Password</label>
                            <input class="form-control" placeholder="Root Password" name="root_pass" type="password">
                        </div>
                        <button class="btn btn-primary">Save</button>
                        <?php if ($server->id): ?>
                            <?php if ($server->active==1): ?>
                                
                                    <a href="<?php echo $URI.'/active/0'; ?>" class="btn btn-warning">Lock</a>
                                
                                <?php else: ?>
                                    <a href="<?php echo $URI.'/active/1'; ?>" class="btn btn-success">Unlock</a>
                                
                            <?php endif; ?>
                            <a href="<?php echo $URI.'/delete'; ?>" class="btn btn-danger hapus">Delete</a>
                        <?php endif; ?>
                        <a href="/home/admin/server" class="btn btn-default">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

-->

<div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">
                            <?php if ($server->active==1): ?>
							Edit Server
							<?php endif; ?>
                            <?php if ($server->active==0): ?>
							Add Server
							<?php endif; ?>
			  </h4>
            </div>
            <div class="card-body">
                    <div id="container">
                            <div class="row">
                                    <?php if ($message): ?>
                                            <div class="col-lg-12">                    
                                                <div class="alert alert-<?php echo $message['type']; ?>"><?php echo $message['data']; ?></div>
                                            </div>
                                    <?php endif; ?>
                            </div>
                            <div class="row pr-1 pl-1">
                             <div class="card card-plain col-sm-8">
                           <div class="card-header card-header-primary">
                             <h4 class="card-title"> <b>Server Settings</b></h4>
                           </div>
                           <div class="card-body">
                                 <form role="form" action="<?php echo $URI; ?>" method="POST">
                                     <div class="pr-4 m-auto pb-3 ">
                                         <div class="input-group pb-4 mt-4">
                                           <div class="input-group-prepend">
                                             <span class="input-group-text">
                                               <i class="material-icons">perm_data_setting</i>
                                             </span>
                                           </div>
                                           <input type="text" class="form-control" placeholder="VPS Server 1" name="servername" value="<?php echo $server->servername; ?>" autofocus required>
                                         </div>
                                         <div class="input-group pb-4 mt-4">
                                           <div class="input-group-prepend">
                                             <span class="input-group-text">
                                               <i class="material-icons">flag</i>
                                             </span>
                                           </div>
                                           <input type="text" class="form-control" placeholder="Singapore" name="country" value="<?php echo $server->country; ?>" required>
                                         </div>
                                         <div class="input-group pb-4 mt-4">
                                           <div class="input-group-prepend">
                                             <span class="input-group-text">
                                               <i class="material-icons">tv</i>
                                             </span>
                                           </div>
                                           <input type="text" class="form-control" placeholder="192.168.1.1" name="host" value="<?php echo $server->host; ?>" required>
                                         </div>
                                         <div class="input-group pb-4 mt-4">
                                           <div class="input-group-prepend">
                                             <span class="input-group-text">
                                               <i class="material-icons">credit_card</i>
                                             </span>
                                           </div>
                                             <input class="form-control" placeholder="100" name="price" type="number" step="100" value="<?php echo $server->price; ?>" required>
										</div>
                                         <div class="input-group pb-4">
                                           <div class="input-group-prepend">
                                             <span class="input-group-text">
                                               <i class="material-icons">lock_outline</i>
                                             </span>
                                           </div>
                                           <input class="form-control" placeholder="Root Password" name="root_pass" type="password" required>
                                         </div>
										<?php if ($server->id): ?>
											<button class="btn btn-primary">Save</button>
											<?php if ($server->active==1): ?>
												
													<a href="<?php echo $URI.'/active/0'; ?>" class="btn btn-warning">Lock</a>
												
												<?php else: ?>
													<a href="<?php echo $URI.'/active/1'; ?>" class="btn btn-success">Unlock</a>
												
											<?php endif; ?>
											<a href="<?php echo $URI.'/delete'; ?>" class="btn btn-danger hapus">Delete</a>
											<a href="/home/admin/server" class="btn btn-default">Back</a>
										<?php endif; ?>
										<?php if ($server->active==0): ?>
                                          <div class="row">
                                          <div class="col-6">
                                                <button class="btn btn-lg btn-info btn-block" ><i class="material-icons">add</i> Add Server</button>
                                          </div>
                                          <div class="col-6">
											<a href="/home/member/server" class="btn btn-lg btn-default btn-block" data-toggle="tooltip" data-placement="top" title="Back to Server List" >
                                                  <i class="material-icons">subdirectory_arrow_left</i>
                                                  Back
											</a>
                                           </div>
                                           </div>
										<?php endif; ?>
                                   </form>
                             
                           </div>


                           </div>
                           
                           
                            </div>
                        </div>
           
            </div>
          </div>
        </div>
      </div>


      
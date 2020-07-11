<div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title"><?php echo $server->servername; ?></h4>
              Total Users : <B><?php echo $me->saldo; ?></B>
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
                            <div class="row pr-2 pl-2">
                             <div class="card card-plain col-sm-12">
                                   <div class="card-body">
                                       <h2>SSH User List</h2>
                                              <div class="card-body">
                                                    <form role="form" action="<?php echo $URI; ?>" method="POST">
                                                        <div class="pr-1 m-auto pb-1 ">
                                                              <div class="row">
																  <div class="col-12">
																		<a href="<?php echo $URI; ?>/add" class="btn btn-success pull-right"> <i class="material-icons">add</i> Add User</a>
																	</div>
                                                                </div>
                                                      </form>
                                              </div>
											 </div>
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table table-hover">
												<thead>
													<tr>
														<th>#</th>
														<th>Username</th>
														<th>Create By</th>
														<th>Expiration</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<?php if ($users): ?>
														
															<?php $no=0; foreach (($users?:array()) as $user): $no++; ?>
																<tr>
																	<td><?php echo $no; ?></td>
																	<td><?php echo $user->user; ?></td>
																	<td><?php echo $user->real; ?></td>
																	<td><?php echo $user->exp; ?></td>
																	<td> 
																		<div class="row">
                                                                         <div class="col-sm-4">
                                                                         <a href="<?php echo $URI.'/'.$user->uid; ?>" class="btn  btn-primary btn-block"><i class="material-icons">settings</i> Edit</a>
                                                                         </div>
																		<?php if ($user->lock): ?>
																			
                                                                                 <div class="col-sm-4">
                                                                                 <a href="<?php echo $URI.'/'.$user->uid; ?>/active/1" class="btn  btn-info btn-block"><i class="material-icons">lock_open</i> Unlock</a>
                                                                                 </div>
																			
																			<?php else: ?>
                                                                                 <div class="col-sm-4">
                                                                                 <a href="<?php echo $URI.'/'.$user->uid; ?>/active/0" class="btn  btn-warning btn-block"><i class="material-icons">lock_outline</i> Lock</a>
                                                                                 </div>
																			
                                                                         <?php endif; ?>
                                                                         <div class="col-sm-4">
                                                                         <a href="<?php echo $URI.'/'.$user->uid; ?>/delete" class="btn  btn-danger btn-block"><i class="material-icons">delete_forever</i> Delete</a>
                                                                         </div>
																		</div>
																	</td>
																 </tr>
															<?php endforeach; ?>
														
														<?php else: ?>
															<tr>
																<td class="text-muted text-center" colspan="5"> No User</td>
															</tr>
														
													<?php endif; ?>
												</tbody>
											</table>
										</div>
									</div>
                                   </div>
                                 </div>
								</div>
            </div>
          </div>
        </div>
      </div>


<!--
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">SSH User List
                <small><?php echo $server->servername; ?></small>
                <a href="<?php echo $URI; ?>/add" class="btn btn-default pull-right"><i class="fa fa-plus fa-fw"></i> Add User</a>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-group fa-fw"></i> Account List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Create By</th>
                                    <th>Expiration</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($users): ?>
                                    
                                        <?php $no=0; foreach (($users?:array()) as $user): $no++; ?>
                                            <tr>
                                                <td><?php echo $no; ?></td>
                                                <td><?php echo $user->user; ?></td>
                                                <td><?php echo $user->real; ?></td>
                                                <td><?php echo $user->exp; ?></td>
                                                <td>
                                                    <a href="<?php echo $URI.'/'.$user->uid; ?>" class="btn btn-primary">Edit</a>
                                                    <?php if ($user->lock): ?>
                                                        
                                                            <a href="<?php echo $URI.'/'.$user->uid; ?>/active/1" class="btn btn-success">Unlock</a>
                                                        
                                                        <?php else: ?>
                                                            <a href="<?php echo $URI.'/'.$user->uid; ?>/active/0" class="btn btn-warning">Lock</a>
                                                        
                                                    <?php endif; ?>
                                                    <a href="<?php echo $URI.'/'.$user->uid; ?>/delete" class="btn btn-danger hapus">Delete</a>
                                                </td>
                                             </tr>
                                        <?php endforeach; ?>
                                    
                                    <?php else: ?>
                                        <tr>
                                            <td class="text-muted text-center" colspan="6"> No User</td>
                                        </tr>
                                    
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
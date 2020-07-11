<div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title"><?php echo $server->servername; ?></h4>
              Credits : <B><?php echo $me->saldo; ?></B>
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
                                                     
                                        <div class="card card-plain col-sm-6">
                                             
                                              <div class="card-body">
                                                  <h2>Server Info</h2>
                                                    <table class="table">
                                                            <tr>
                                                                <td>Location</td><td><?php echo $server->country; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Host</td><td><?php echo $server->host; ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Price</td><td><?php echo $server->price; ?></td>
                                                            </tr>
                                                        </table>
                                              </div>
                                            </div>
                                    
                                        <div class="card card-plain col-sm-6">
                                              <div class="card-header card-header-primary">
                                                <h4 class="card-title"> <b>Server Settings</b></h4>
                                              </div>
                                              <div class="card-body">
                                                    <form role="form" action="<?php echo $URI; ?>" method="POST">
                                                        <div class="pr-4 m-auto pb-3 ">
                                                            <div class="input-group pb-4 mt-4">
                                                                        <div class="input-group-prepend">
                                                                          <span class="input-group-text">
                                                                            <i class="material-icons">sentiment_satisfied</i>
                                                                          </span>
                                                                        </div>
                                                                        <input type="text" name="user" class="form-control" placeholder="Username" autofocus required>
                                                            </div>
                                                            <div class="input-group pb-4">
                                                              <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                  <i class="material-icons">lock_outline</i>
                                                                </span>
                                                              </div>
                                                              <input class="form-control" placeholder="New Password" name="pass" type="password" required>
                                                            </div>
                                                            <div class="input-group pb-4">
                                                                    <div class="input-group-prepend">
                                                                      <span class="input-group-text">
                                                                        <i class="material-icons">lock_outline</i>
                                                                      </span>
                                                                    </div>
                                                                    <input class="form-control" placeholder="Confirm Password" name="pass_confirmation" type="password" required>
                                                                  </div>
                                                          </div>
                                                          <div class="panel-footer text-center">
                                                              <div class="row">
                                                              <div class="col-6">
                                                                    <button class="btn btn-lg btn-info btn-block" data-toggle="tooltip" data-placement="top" title="Create SSH Account" ><i class="material-icons">add</i> Create</button>
                                                              </div>
                                                               <div class="col-6">
																	<a href="/home/member/server" class="btn btn-lg btn-default btn-block" data-toggle="tooltip" data-placement="top" title="Back to Server List" >
                                                                        <i class="material-icons">subdirectory_arrow_left</i>
                                                                        Back
																	</a>
                                                                </div>
                                                                </div>
                                                        </div>
                                                      </form>
                                                
                                              </div>


                                            </div>
                                            
                                  
                            </div>
                        </div>
           
            </div>
          </div>
        </div>
      </div>


      
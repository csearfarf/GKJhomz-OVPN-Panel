<div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">SERVER LIST</h4>
              <p class="card-category">Create your own account by your choice :) Credits Resets @ 12:00AM (+8:00 GMT)</p>
            </div>
            <div class="card-body">
                    <div id="container">
                            <div class="row">
                               <div class="col-sm-6 col-md-5 col-md-4 col-lg-3">
                                    <div class="well">Credits : <B><?php echo $me->saldo; ?></B></div>
                                </div>
                            </div>
                            <div class="row pr-2 pl-2">
                                <?php if ($message): ?>
                                    <div class="col-lg-12">
                                        <div class="alert alert-<?php echo $message['type']; ?>"><?php echo $message['data']; ?></div>
                                    </div>
                                <?php endif; ?>
                                <?php foreach (($servers?:array()) as $server): ?>
                                        <div class="card card-plain col-sm-3 col-md-4 col-lg-4 ">
                                              <div class="card-header card-header-primary">
                                                <h4 class="card-title"> <b><?php echo $server->servername; ?></b></h4>
						
                                                <p class="card-category"><?php echo $server->active==1?'':'( Locked )'; ?></p>
                                              </div>
                                              <div class="card-body table-responsive">
                                                <table class="table table-hover">
                                                  <tbody>
                                                    <tr>
                                                    <td>Location</td><td><?php echo $server->country; ?></td>
                                                    </tr>
                                                    <tr>
                                                    <td>IP/Host:</td><td><?php echo $server->host; ?></td>
                                                    </tr>
                                                    <tr>
                                                    <td>OpenVPN:</td><td>TCP 1194</td>
                                                    </tr>
                                                    <tr>
                                                    <td>OpenSSH:</td><td>22, 143</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Dropbear:</td><td>109, 110, 442</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Validity:</td><td>7 Days</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Squid Proxy:</td><td>80, 3128, 8000, 8080 (limit to IP Server)</td>
                                                    </tr>
                                                    <tr>
                                                    <td>Price:</td><td><?php echo $server->price; ?></td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                               <div class="panel-footer text-center">
                                                    <div class="row">
                                                            <div class="col-lg-6 p-1">
                                                                    <a href="<?php echo $URI.'/'.$server->id; ?>" class="btn btn-info btn-block"  data-toggle="tooltip" data-placement="top" title="Create SSH Account" ><i class="material-icons">add</i> Create</a>
                                                            </div>
                                                            <div class="col-lg-6 p-1">
                                                                    <a href="http://<?php echo $server->host; ?>:85/client.ovpn" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="Download OVPN"><i class="material-icons">get_app</i> Download</a>
                                                            </div>
                                                    </div>
                                                 </div>
                                            </div>
                                <?php endforeach; ?>   
                            </div>
                        </div>
           
            </div>
          </div>
        </div>
      </div>
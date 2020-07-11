<div class="content">
        <div class="container-fluid">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title">SSH Account</h4>
            </div>
            <div class="card-body">
                    <div id="container">
                            <div class="row">
                                    <?php if ($message): ?>
                                            <div class="col-lg-12 hidden-print">                     
                                                <div class="alert alert-<?php echo $message['type']; ?>"><?php echo $message['data']; ?></div>
                                            </div>
                                    <?php endif; ?>
                            </div>
                            <div class="row pr-2 pl-2">
                                                     
                                        <div class="card card-plain col-sm-6">
                                             
                                              <div class="card-body">
                                                    <h2>Account Details</h2>
                                                    <table class="table table-hover">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Username</td><td><b><?php echo $user->user; ?></b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Password</td><td><b><?php echo $user->pass; ?></b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Host</td><td><b><?php echo $server->host; ?></b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Location</td><td><b><?php echo $server->country; ?></b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Dropbear</td><td><b>109, 110, 442</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Squid Proxy</td><td><b>80, 3128, 8000, 8080</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Expiration</td><td><b><?php echo \Webmin::exp_decode($user->expire); ?></b></td>
                                                                </tr>
                                                                
                                                            <tr class="hidden-print">
                                                           
                                                            </tr>
                                                        </tbody>
                                                        </table>
                                              </div>
                                              <div class="panel-footer text-center">
                                                    <div class="row">
                                                    <div class="col-6">
                                                          <a href="http://<?php echo $server->host; ?>:85/client.ovpn">
                                                          <button class="btn btn-lg btn-success btn-block" data-toggle="tooltip" data-placement="top" title="Download OVPN Config" ><i class="material-icons">cloud_download</i> Download</button>
                                                          </a>
                                                    </div>
                                                     <div class="col-6">
                                                          <a href="/home/member/server">
                                                              <button class="btn btn-lg btn-default btn-block" data-toggle="tooltip" data-placement="top" title="Back to Server List" >
                                                              <i class="material-icons">subdirectory_arrow_right</i>
                                                              Back
                                                              </button>
                                                          </a>
                                                      </div>
                                                      </div>
                                              </div>
                                            </div>
                                            <div class="card card-plain col-sm-6">
                                                    <div class="card-header card-header-danger">
                                                        <b><h4 style="font-weight: bolder" class="text-center pb-0">READ AND FOLLOW THE RULES!!!</h4></b>
                                                    </div>
                                                    <div class="card-body">
                                                        <br><font color='#860000'>1. NO SPAM !!!</font>
                                                        <br><font color='#1E90FF'>2. NO DDOS !!!</font>
                                                        <br><font color='#FF0000'>3. NO HACKING !!!</font>
                                                        <br><font color='#008080'>4. NO CARDING !!!</font>
                                                        <br><font color='#BA55D3'>5. NO TORRENT !!!</font>
                                                        <br><font color='#32CD32'>6. NO MULTI-LOGIN !!!</font>
                                                        <br><font color='#FF000'>7. DONT SELL!!! FREE !!! LIBRE TO !!!</font>
                                                        <br>
                                                        <br><i class="text-center"><font color='#FF0000' >FOLLOW THE RULES OR YOUR ACCOUNT WILL BE BANNED</font></i>
                                                        <hr>
                                                        <b><h5 style="font-weight: bolder" class="text-left pb-0">CREDITS</h5></b>
                                                        <font color='#0000FF'>Powered by <font color='#000'>GodKnowsJhomz</font></font><br>
                                                        <br>
                                                        <b><h5 style="font-weight: bolder" class="text-left pb-0">SHOUTOUTS</h5></b>
                                                        <font color='#0000FF'>For the Design: <font color='#000'>Csearfarf, DYRA</font></font>
                                                        <br><font color='#0000FF'>For the Servers: <font color='#000'>Barry THE FLASH, Amazed, matthewxd</font></font>
                                                        <br><font color='#0000FF'>For the Scripts: <font color='#000'>Motoharu, 0123456</font></font>
                                                    </div>
                                                    
                                                </div>
                                    
                                            
                                </div>     
                                  
                            </div>
                        </div>
           
            </div>
        </div>
</div>
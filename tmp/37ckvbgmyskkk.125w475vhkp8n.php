<!--
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Server List
            </h1>
        </div>
    </div>
    <div class="row">
        <?php if ($message): ?>
            <div class="col-lg-12">
                <div class="alert alert-<?php echo $message['type']; ?>"><?php echo $message['data']; ?></div>
            </div>
        <?php endif; ?>
        <?php foreach (($servers?:array()) as $server): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <b><?php echo $server->servername; ?></b> <?php echo $server->active==1?'':'( Locked )'; ?>
                    </div>
                    <table class="table">
                        <tr>
                            <td>Location:</td><td><?php echo $server->country; ?></td>
                        </tr>
                        <tr>
                            <td>Host:</td><td><?php echo $server->host; ?></td>
                        </tr>
                        <tr>
                            <td>Price:</td><td><?php echo $server->price; ?> Credits</td>
                        </tr>
                    </table>
                    <div class="panel-footer text-center">
                        <a href="<?php echo $URI.'/'.$server->id; ?>" class="btn btn-primary"><i class="fa fa-edit fa-fw"></i> Edit Server</a>
                        <a href="<?php echo $URI.'/'.$server->id; ?>/account" class="btn btn-default"><i class="fa fa-group fa-fw"></i> Check Users</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
-->
<div class="content">
<div class="container-fluid">
<div class="card">
<div class="card-header card-header-primary">
<h4 class="card-title">Server List</h4>
<p class="card-category">Add / Remove / Edit Servers</p>
</div>
<div class="card-body"><center>
               <div class="col-lg-6 p-1">
                <a href="<?php echo $URI; ?>/add" class="btn btn-info btn-block"  data-toggle="tooltip" data-placement="top" title="Add VPS Server"><i class="fa fa-plus fa-fw"></i> Add Server</a>
			   </div>
			   </center>
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
                                 <td>Price:</td><td><?php echo $server->price; ?></td>
                                 </tr>
                               </tbody>
                             </table>
                           </div>
                            <div class="panel-footer text-center">
                                 <div class="row">
                                         <div class="col-lg-6 p-1">
                                                 <a href="<?php echo $URI.'/'.$server->id; ?>" class="btn btn-info btn-block"  data-toggle="tooltip" data-placement="top" title="Modify Server" ><i class="material-icons">build</i> Edit</a>
                                         </div>
                                         <div class="col-lg-6 p-1">
                                                 <a href="<?php echo $URI.'/'.$server->id; ?>/account" class="btn btn-success btn-block" data-toggle="tooltip" data-placement="top" title="Check Users"><i class="material-icons">group</i> Users</a>
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
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Seller List
                <a href="/home/admin/seller/add" class="btn btn-default pull-right"><i class="fa fa-plus fa-fw"></i> Add Seller</a>
            </h1>
        </div>
    </div>
    <div class="row">
        <?php if ($message): ?>
            <div class="col-lg-12">                    
                <div class="alert alert-<?php echo $message['type']; ?>"><?php echo $message['data']; ?></div>
            </div>
        <?php endif; ?>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-group fa-fw"></i> Seller List
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Username</th>
                                    <th>Credits</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=0; foreach (($sellers?:array()) as $seller): $no++; ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $seller->username; ?></td>
                                        <td><?php echo $seller->saldo; ?></td>
                                        <td>
                                            <a href="/home/admin/seller/<?php echo $seller->id; ?>" class="btn btn-primary"></i>Edit</a>
                                            <?php if ($seller->active==1): ?>
                                                
                                                    <a href="/home/admin/seller/<?php echo $seller->id; ?>/active/0" class="btn btn-warning">Lock</a>
                                                
                                                <?php else: ?>
                                                    <a href="/home/admin/seller/<?php echo $seller->id; ?>/active/1" class="btn btn-success">Unlock</a>
                                                
                                            <?php endif; ?>
                                            <a href="/home/admin/seller/<?php echo $seller->id; ?>/delete" class="btn btn-danger hapus">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-money fa-fw"></i> Quick Deposit
                </div>
                <div class="panel-body">
                    <form role="form" action="/home/admin/seller/deposit" method="POST">
                        <div class="form-group">
                            <label>Seller</label>
                            <select class="form-control" name="id">
                                <?php foreach (($sellers?:array()) as $seller): ?>
                                    <option value="<?php echo $seller->id; ?>"><?php echo $seller->username; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Deposit</label>
                            <div class="input-group">
                                <span class="input-group-addon">Credits </span>
                                <input class="form-control" placeholder="10000" name="deposit" type="number" min="100" step="100" required>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Deposit</button>
                        <button class="btn btn-default" type="reset">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
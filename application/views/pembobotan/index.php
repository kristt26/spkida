<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pembobotan Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('pembobotan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idpembobotan</th>
						<th>Idkaryawan</th>
						<th>Idperiode</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($pembobotan as $p){ ?>
                    <tr>
						<td><?php echo $p['idpembobotan']; ?></td>
						<td><?php echo $p['idkaryawan']; ?></td>
						<td><?php echo $p['idperiode']; ?></td>
						<td>
                            <a href="<?php echo site_url('pembobotan/edit/'.$p['idpembobotan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('pembobotan/remove/'.$p['idpembobotan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

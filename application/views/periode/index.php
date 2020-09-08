<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Periode Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('periode/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idperiode</th>
						<th>Periode</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($periode as $p){ ?>
                    <tr>
						<td><?php echo $p['idperiode']; ?></td>
						<td><?php echo $p['periode']; ?></td>
						<td>
                            <a href="<?php echo site_url('periode/edit/'.$p['idperiode']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('periode/remove/'.$p['idperiode']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

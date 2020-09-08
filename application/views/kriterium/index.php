<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Kriteria Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('kriterium/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idkriteria</th>
						<th>Kriteria</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($kriteria as $k){ ?>
                    <tr>
						<td><?php echo $k['idkriteria']; ?></td>
						<td><?php echo $k['kriteria']; ?></td>
						<td>
                            <a href="<?php echo site_url('kriterium/edit/'.$k['idkriteria']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('kriterium/remove/'.$k['idkriteria']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

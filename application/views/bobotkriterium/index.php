<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bobotkriteria Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bobotkriterium/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Idbobotkriteria</th>
						<th>Idkriteria</th>
						<th>Idkriteria1</th>
						<th>Bobot</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($bobotkriteria as $b){ ?>
                    <tr>
						<td><?php echo $b['idbobotkriteria']; ?></td>
						<td><?php echo $b['idkriteria']; ?></td>
						<td><?php echo $b['idkriteria1']; ?></td>
						<td><?php echo $b['bobot']; ?></td>
						<td>
                            <a href="<?php echo site_url('bobotkriterium/edit/'.$b['idbobotkriteria']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bobotkriterium/remove/'.$b['idbobotkriteria']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

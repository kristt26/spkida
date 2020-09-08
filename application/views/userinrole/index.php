<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Userinrole Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('userinrole/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Iduserinrole</th>
						<th>Iduser</th>
						<th>Idrole</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($userinrole as $u){ ?>
                    <tr>
						<td><?php echo $u['iduserinrole']; ?></td>
						<td><?php echo $u['iduser']; ?></td>
						<td><?php echo $u['idrole']; ?></td>
						<td>
                            <a href="<?php echo site_url('userinrole/edit/'.$u['iduserinrole']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('userinrole/remove/'.$u['iduserinrole']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

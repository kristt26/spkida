<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Userinrole Edit</h3>
            </div>
			<?php echo form_open('userinrole/edit/'.$userinrole['iduserinrole']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="iduser" class="control-label">Iduser</label>
						<div class="form-group">
							<input type="text" name="iduser" value="<?php echo ($this->input->post('iduser') ? $this->input->post('iduser') : $userinrole['iduser']); ?>" class="form-control" id="iduser" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idrole" class="control-label">Idrole</label>
						<div class="form-group">
							<input type="text" name="idrole" value="<?php echo ($this->input->post('idrole') ? $this->input->post('idrole') : $userinrole['idrole']); ?>" class="form-control" id="idrole" />
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>
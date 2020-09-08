<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bobotkriterium Add</h3>
            </div>
            <?php echo form_open('bobotkriterium/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idkriteria" class="control-label">Idkriteria</label>
						<div class="form-group">
							<input type="text" name="idkriteria" value="<?php echo $this->input->post('idkriteria'); ?>" class="form-control" id="idkriteria" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idkriteria1" class="control-label">Idkriteria1</label>
						<div class="form-group">
							<input type="text" name="idkriteria1" value="<?php echo $this->input->post('idkriteria1'); ?>" class="form-control" id="idkriteria1" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="bobot" class="control-label">Bobot</label>
						<div class="form-group">
							<input type="text" name="bobot" value="<?php echo $this->input->post('bobot'); ?>" class="form-control" id="bobot" />
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
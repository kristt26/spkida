<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Periode Add</h3>
            </div>
            <?php echo form_open('periode/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="periode" class="control-label">Periode</label>
						<div class="form-group">
							<input type="text" name="periode" value="<?php echo $this->input->post('periode'); ?>" class="form-control" id="periode" />
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
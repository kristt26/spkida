<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Kriterium Add</h3>
            </div>
            <?php echo form_open('kriterium/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="kriteria" class="control-label">Kriteria</label>
						<div class="form-group">
							<input type="text" name="kriteria" value="<?php echo $this->input->post('kriteria'); ?>" class="form-control" id="kriteria" />
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
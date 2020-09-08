<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Pembobotan Edit</h3>
            </div>
			<?php echo form_open('pembobotan/edit/'.$pembobotan['idpembobotan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idkaryawan" class="control-label">Idkaryawan</label>
						<div class="form-group">
							<input type="text" name="idkaryawan" value="<?php echo ($this->input->post('idkaryawan') ? $this->input->post('idkaryawan') : $pembobotan['idkaryawan']); ?>" class="form-control" id="idkaryawan" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="idperiode" class="control-label">Idperiode</label>
						<div class="form-group">
							<input type="text" name="idperiode" value="<?php echo ($this->input->post('idperiode') ? $this->input->post('idperiode') : $pembobotan['idperiode']); ?>" class="form-control" id="idperiode" />
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
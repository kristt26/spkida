<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Karyawan Edit</h3>
            </div>
			<?php echo form_open('karyawan/edit/'.$karyawan['idkaryawan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $karyawan['nama']); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="karyawancol" class="control-label">Karyawancol</label>
						<div class="form-group">
							<input type="text" name="karyawancol" value="<?php echo ($this->input->post('karyawancol') ? $this->input->post('karyawancol') : $karyawan['karyawancol']); ?>" class="form-control" id="karyawancol" />
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
<?php
// Session
if($this->session->flashdata('success')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('success');
	echo '</div>';
}

// cetak error kalau ada salah input
echo validation_errors('<div class="alert alert-warning"><i class="fa fa-warning"></i>','</div>');

echo form_open(base_url('admin/bahasa/edit/'.$bahasa->id_bahasa));
?>

<div class="col-lg-6">
	<div class="form-group form-group-lg">
		<label>Nama Jenis Buku</label>
		<input type="text" name="nama_bahasa" class="form-control" placeholder="Nama Jenis Buku" value="<?php echo $bahasa->nama_bahasa ?>" required>
	</div>
	<div class="form-group form-group-lg">
		<label>Kode Jenis Buku</label>
		<input type="text" name="kode_bahasa" class="form-control" placeholder="Kode Jenis Buku" value="<?php echo $bahasa->kode_bahasa ?>" required>
	</div>
  <div class="form-group form-group-lg">
    <label>Urutan Tampil</label>
    <input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo $bahasa->urutan ?>" >
  </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group form-group-lg">
      <label>Keterangan Lain</label>
      <textarea name="keterangan" class="form-control" placeholder="keterangan"> <?php echo $bahasa->keterangan ?> </textarea>
    </div>
    <div class="form-group form-group-lg">
  		<input type="submit" name="Submit" class="btn btn-primary btn-lg" value="Save Data">
  		<input type="reset" name="reset" class="btn btn-default btn-lg" value="Reset">
  	</div>
  </div>



<?php echo form_close() ?>

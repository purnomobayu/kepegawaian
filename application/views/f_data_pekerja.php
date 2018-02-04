<?php 
$nik = ($this->uri->segment(3) == "add") ? "" : $pekerja->nik;
$nama = ($this->uri->segment(3) == "add") ? "" : $pekerja->nama;
$alamat = ($this->uri->segment(3) == "add") ? "" : $pekerja->alamat;
$tgl_lahir = ($this->uri->segment(3) == "add") ? "" : $pekerja->tgl_lahir;
$tgl_masuk = ($this->uri->segment(3) == "add") ? "" : $pekerja->tgl_masuk;
$url = ($this->uri->segment(3) == "add") ? "kepegawaian_controller/pekerja/add/proses" : "kepegawaian_controller/pekerja/edit/proses/".$nik;
?>
<?php echo form_open(base_url().$url); ?>
<div class="form-group has-success">
  <label class="form-control-label" for="nik">NIK</label>
  <input name="nik" value="<?php echo $nik ?>" class="form-control is-valid" id="nik" type="text">
</div>
<div class="form-group has-success">
  <label class="form-control-label" for="nama">Nama</label>
  <input name="nama" value="<?php echo $nama ?>" class="form-control is-valid" id="nama" type="text">
</div>
<div class="form-group has-success">
  <label class="form-control-label" for="alamat">Alamat</label>
  <input name="alamat" value="<?php echo $alamat ?>" class="form-control is-valid" id="alamat" type="text">
</div>
<div class="form-group has-success">
  <label class="form-control-label" for="tlhr">Tanggal Lahir</label>
  <input name="tgl_lahir" value="<?php echo $tgl_lahir ?>" class="form-control is-valid" id="tlhr" type="text">
</div>
<div class="form-group has-success">
  <label class="form-control-label" for="tms">Tanggal Masuk</label>
  <input name="tgl_masuk" value="<?php echo $tgl_masuk ?>" class="form-control is-valid" id="tms" type="text">
</div>
<button class="btn btn-primary" type="submit"></button>
<?php echo form_close(); ?>
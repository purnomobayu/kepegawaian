<?php 
$nik = ($this->uri->segment(3) == "add") ? "" : $cuti->nik;
$catatan = ($this->uri->segment(3) == "add") ? "" : $cuti->catatan;
$lama_cuti = ($this->uri->segment(3) == "add") ? "" : $cuti->lama_cuti;
$tgl_mulai = ($this->uri->segment(3) == "add") ? "" : $cuti->tgl_mulai;
$url = ($this->uri->segment(3) == "add") ? "kepegawaian_controller/cuti/add/proses" : "kepegawaian_controller/cuti/edit/proses/".$nik;
?>
<?php echo form_open(base_url().$url); ?>
<div class="form-group has-success">
  <label class="form-control-label" for="nik">NIK</label>
  <input name="nik" value="<?php echo $nik ?>" class="form-control is-valid" id="nik" type="text">
</div>
<div class="form-group has-success">
  <label class="form-control-label" for="tm">Tanggal Mulai</label>
  <input name="tgl_mulai" value="<?php echo $tgl_mulai ?>" class="form-control tgl is-valid" id="tm" type="text">
</div>
<div class="form-group has-success">
  <label class="form-control-label" for="lama_cuti">Lama Cuti</label>
  <input name="lama_cuti" value="<?php echo $lama_cuti ?>" class="form-control is-valid" id="lama_cuti" type="text">
</div>
<div class="form-group has-success">
  <label class="form-control-label" for="catatan">Catatan</label>
  <textarea name="catatan" value="" class="form-control is-valid" id="catatan"><?php echo $catatan ?></textarea>
</div>
<button class="btn btn-primary" type="submit"></button>
<?php echo form_close(); ?>
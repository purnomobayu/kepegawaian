<?php echo $this->session->flashdata('notif'); ?>
<table class="table table-hover">
		<thead>
		<th class="table-light">No</th>
		<th>Nik</th>
		<th>Nama</th>
		<th>TGL MULAI</th>
		<th>LAMA CUTI</th>
		<th>Opsi</th>
	</thead>
	<?php foreach ($cuti as $key => $value) { ?>
	<tbody>
		<td><?php echo ++$key ?></td>
		<td><?php echo $value->nik ?></td>
		<td><?php echo $value->nama ?></td>
		<td><?php echo date("d-m-Y",strtotime($value->tgl_mulai)); ?></td>
		<td><?php echo $value->lama_cuti; ?></td>
		<td><?php echo $value->catatan; ?></td>
		<td>
			<a class="btn btn-info" href="<?php echo base_url('kepegawaian_controller/cuti/edit/').$value->nik; ?>" title="edit">Edit</a>
			<a class="btn btn-danger" href="<?php echo base_url('kepegawaian_controller/cuti/delete/').$value->id; ?>">Hapus</a>
		</td>
	</tbody>
	<?php } ?>
</table>
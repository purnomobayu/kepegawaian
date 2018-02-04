<?php echo $this->session->flashdata('notif'); ?>
<table class="table table-hover">
		<thead>
		<th class="table-light">No</th>
		<th>Nik</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>TGL Lahir</th>
		<th>TGL Masuk</th>
		<th>Opsi</th>
	</thead>
	<?php foreach ($pekerja as $key => $value) { ?>
	<tbody>
		<td><?php echo $key ?></td>
		<td><?php echo $value->nik ?></td>
		<td><?php echo $value->nama ?></td>
		<td><?php echo $value->alamat ?></td>
		<td><?php echo date("d-m-y",strtotime($value->tgl_lahir)); ?></td>
		<td><?php echo date("d-m-y",strtotime($value->tgl_masuk)); ?></td>
		<td>
			<a class="btn btn-info" href="<?php echo base_url('kepegawaian_controller/pekerja/edit/').$value->nik; ?>" title="edit">Edit</a>
			<a class="btn btn-danger" href="<?php echo base_url('kepegawaian_controller/pekerja/delete/').$value->nik; ?>">Hapus</a>
		</td>
	</tbody>
	<?php } ?>
</table>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.2.js"></script>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">belajar framework ci</h1>

	<div class="ui grid">
		<div class="fifteen wide column">
			<table class="ui celled table" id="table.id">
				<thead>
					<tr>
						<th style="text-align: center;">ID</th>
						<th>Nama</th>
						<th>Nim</th>
						<th>Jurusan</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($t_mahasiswa as $row):?>
					<tr>
						<th style="text-align: center">
							<?=$no++?>
						</th>
						<td>
							<?=$row->nama?>
						</td>
						<td>
							<?=$row->nim?>
						</td>
						<td>
							<?=$row->jurusan?>
						</td>

					</tr>
					<?php endforeach; ?>	

				</tbody>
			</table>
		</div>
	<div class="one wide column">
	<a href="<?=site_url('mahasiswa/cetak')?>" target="_blank" type="button" class="ui primary botton">Print</a>
</div>	
</div>

<script type="text-javascript" src="<?=base_url('asset')?>/vendor/semantic/dist/semantic.min.js"></script>
<script type="text-javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text-javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.semantucui.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#table.id').DataTable({
			"order":[]
		});
	});
</script>

</body>
</html>
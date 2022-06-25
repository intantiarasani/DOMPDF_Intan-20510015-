<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>Data Mahasiswa Prodi Sistem Informasi</h1>
	<table class="table" border="1" width="100%">
		<thead>
			<tr>
				<th style="text-align: center;">#</th>
				<th style="text-align: center;">NIM</th>
				<th style="text-align: center;">Jurusan</th>

			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($t_mahasiswa as $row):?>
				<tr> 
				<th style="text-align: center;">
					<?$no++?>
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

</body>
</html>
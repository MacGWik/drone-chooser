<head>
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css'>
<style>
	.headerTop
	{
		border-top: 0px;
		border-bottom: 1px solid #000;
		border-left: 0px;
	    border-right: 0px;
		text-align:center;
	}
	.headerNoBorder
	{
		border-top: 0px;
	    border-bottom: 0px;
	    border-left: 0px;
	    border-right: 0px;
	}
	.headerBorder
	{
		text-align:center;
		border-collapse: collapse;
		border-top: 1px solid #000;
	    border-bottom: 1px solid #000;
	    border-left: 1px solid #000;
	    border-right: 1px solid #000;
	}
	.contentBorder
	{
		border-collapse: collapse;
		border-top: 1px solid #000;
	    border-bottom: 1px solid #000;
	    border-left: 1px solid #000;
	    border-right: 1px solid #000;
	}
	.leftAlign
	{
		text-align: left;
		padding-left: 5px;
	}
	.centerAlign
	{
		text-align: center;
	}
	.rightAlign
	{
		text-align: right;
		padding-right: 5px;
	}
</style>
</head>
<br />

	<table width="100%">
		<tbody>
			<tr style="">
				<td class="headerTop" colspan="3">
					<h2>List Barang</h2>
				</td>
			</tr>
		</tbody>
	</table>
<br />
	<table width="100%">
		<thead>
			<tr>
				<th class="headerBorder" width="3%">No</th>
				<!-- <th class="headerBorder" width="9%">Barang ID</th> -->
				<!-- <th class="headerBorder">Grup</th> -->
				<!-- <th class="headerBorder">Tipe</th> -->
				<th class="headerBorder">Nama Barang</th>
				<th class="headerBorder">Rusak</th>
				<th class="headerBorder">Digunakan</th>
				<th class="headerBorder">Tersedia</th>
				<th class="headerBorder">Jumlah</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$no = 1;
			foreach ($dataTipe as $key => $dataSatuan) {
			?>
			<tr>
				<td class="contentBorder leftAlign"><?php echo $no;$no++; ?></td>
<!-- 				<td class="contentBorder leftAlign"><?php echo $dataSatuan['barang_id']; ?></td>
				<td class="contentBorder leftAlign"><?php echo $dataSatuan['grup_nama']; ?></td> -->
				<td class="contentBorder leftAlign"><?php echo $dataSatuan['tipe_nama']; ?></td>
				<!-- <td class="contentBorder leftAlign"><?php echo $dataSatuan['nama']; ?></td> -->
				<td class="contentBorder rightAlign"><?php echo $dataSatuan['qtyRusak']; ?></td>
				<td class="contentBorder rightAlign"><?php echo $dataSatuan['qtyDigunakan']; ?></td>
				<td class="contentBorder rightAlign"><?php echo $dataSatuan['qtyTersedia']; ?></td>
				<td class="contentBorder rightAlign"><?php echo $dataSatuan['qtyJumlah']; ?></td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>
</body>
<!-- </div> -->
<!-- /.row
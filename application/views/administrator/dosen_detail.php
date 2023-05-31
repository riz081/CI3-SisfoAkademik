<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
		<i class="fas fa-eye"></i> Detail 
  	</div>

  	<table class="table table-bordered table-hover table-striped">

  		<?php foreach($detail as $dt) : ?>

  			<img class="mb-4" src="<?php echo base_url('assets/uploads/').$dt->photo ?>" style="width: 20%">

  		<tr>
  			<td>Nidn</td>
  			<td><?php echo $dt->nidn; ?></td>
  		</tr>

  		<tr>
  			<td>Nama Dosen</td>
  			<td><?php echo $dt->nama_dosen; ?></td>
  		</tr>

  		<tr>
  			<td>Alamat</td>
  			<td><?php echo $dt->alamat; ?></td>
  		</tr>

  		<tr>
  			<td>Jenis Kelamin</td>
  			<td><?php echo $dt->jenis_kelamin; ?></td>
  		</tr>

  		<tr>
  			<td>Email</td>
  			<td><?php echo $dt->email; ?></td>
  		</tr>

  		<tr>
  			<td>No. Telepon</td>
  			<td><?php echo $dt->telp; ?></td>
  		</tr>

  	<?php endforeach; ?>
  	</table>

  	<?php echo anchor('administrator/dosen','<div class="btn btn-sm btn-primary mt-3 mb-3">Kembali</div>')?><br>

</div>
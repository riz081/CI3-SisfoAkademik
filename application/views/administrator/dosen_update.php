<div class="container-fluid">
	
	<div class="alert alert-success" role="alert">
		<i class="fas fa-university"></i> Form Edit
  	</div>

    <?php foreach($dosen as $dsn) : ?>
  	<?php echo form_open_multipart('administrator/dosen/update_dosen_aksi') ?>

  	<div class="form-group">
  		<label>Nomor Induk Dosen Nasional</label>
      <input type="hidden" name="id_dosen" class="form-control" value="<?php echo $dsn->id_dosen ?>">
  		<input type="text" name="nidn" class="form-control" value="<?php echo $dsn->nidn ?>">
  		<?php echo form_error('nidn','<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Nama Dosen</label>
  		<input type="text" name="nama_dosen" class="form-control" value="<?php echo $dsn->nama_dosen ?>">
  		<?php echo form_error('nama_dosen','<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>Alamat</label>
  		<input type="text" name="alamat" class="form-control" value="<?php echo $dsn->alamat ?>">
  		<?php echo form_error('alamat','<div class="text-danger small ml-3">','</div>') ?>
  	</div>

    <div class="form-group">
      <label>Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-control" value="<?php echo $dsn->jenis_kelamin ?>">
        <option>Laki-laki</option>
        <option>Perempuan</option>
      </select>
      <?php echo form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div>') ?>
    </div>


  	<div class="form-group">
  		<label>Email</label>
  		<input type="text" name="email" class="form-control" value="<?php echo $dsn->email ?>">
  		<?php echo form_error('email','<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">
  		<label>No.Telepon</label>
  		<input type="text" name="telp" class="form-control" value="<?php echo $dsn->telp ?>">
  		<?php echo form_error('telp','<div class="text-danger small ml-3">','</div>') ?>
  	</div>

  	<div class="form-group">

      <?php foreach($detail as $dt) : ?>
        <img style="width: 20%" src="<?php echo base_url(). 'assets/uploads/'.$dsn->photo ?>">
      <?php endforeach; ?><br>
  		<label>Foto</label><br>
  		<input type="file" name="userfile" value="<?php echo $dsn->photo ?>">
  	</div>

  	<button type="submit" class="btn btn-primary">Simpan</button>

  	<?php form_close(); ?>
  <?php endforeach; ?>
</div>
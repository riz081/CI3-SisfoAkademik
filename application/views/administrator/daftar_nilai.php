<?php 

$nilai = get_instance();
$nilai->load->model('krs_model');
$nilai->load->model('mahasiswa_model');
$nilai->load->model('matakuliah_model');
$nilai->load->model('tahunakademik_model');

$krs = $nilai->krs_model->get_by_id($id_krs[0]);
$kode_matakuliah = $krs->kode_matakuliah;	
$id_thn_akad = $krs->id_thn_akad;
 ?>


 <div class="container-fluid">
 	<div class="alert alert-success">
 		<i class="fas fa-university"></i> Daftar Nilai mahasiswa
 	</div>

 	<center>
 		<legend><strong>Daftar Nilai Mahasiswa</strong></legend>
 		<table>
 			<tr>
 				<td>Kode Matakuliah</td>
 				<td>: <?php echo $kode_matakuliah; ?></td>
 			</tr>
 		</table>
 	</center>
 </div>
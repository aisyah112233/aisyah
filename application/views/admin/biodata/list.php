<?php $this->load->view("_partial/admin/header.php") ?>
<h3><span class="glyphicon glyphicon-user"></span> Biodata</h3>

<br/>
<br/>


<?php 
//$per_hal=10;
//$jumlah_record=mysqli_query($koneksi,"SELECT COUNT(*) from biodata");
//jum=mysql_result($jumlah_record, 0);
//$jum=mysqli_fetch_array($jumlah_record,MYSQLI_NUM);
//$halaman=ceil($jum[0] / $per_hal);
//$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
//$start = ($page - 1) * $per_hal;
?>

<table class="table table-hover">		
	</tr>
	<tr>
		<th class="col-sm-1">No</th>
		<th class="col-sm-1">Pembuka</th>
		<th class="col-sm-1">Profesi</th>
		<th class="col-sm-1">Nama</th>
		<th class="col-sm-1">JK</th>
		<th class="col-sm-1">TTL</th>
		<th class="col-sm-1">Alamat</th>
		<th class="col-sm-1">Agama</th>
		<th class="col-sm-1">Status</th>
		<th class="col-sm-1">Foto</th>
		<th class="col-sm-3">DLL</th>
		<!-- <th class="col-md-1">Sisa</th>		 -->
	</tr>
	<?php 
	//if(isset($_GET['cari'])){
		//$cari=mysqli_real_escape_string($koneksi,$_GET['cari']);
		//$brg=mysqli_query($koneksi,"select * from biodata where nama like '%$cari%'");
	//}else{
		//$brg=mysqli_query($koneksi,"select * from biodata limit $start, $per_hal");
	//}
	$no=1;
	//while($b=mysqli_fetch_array($brg)){
	?>
			<?php foreach ($biodata as $b): ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $b->pembuka ?></td>
			<td><?php echo $b->profesi ?></td>
			<td><?php echo $b->nama ?></td>
			<td><?php echo $b->jk ?></td>
			<td><?php echo $b->ttl ?></td>
			<td><?php echo $b->alamat ?></td>
			<td><?php echo $b->agama ?></td>
			<td><?php echo $b->status ?></td>
			<td><?php echo $b->foto ?></td>
			<td>
				<a href="<?= base_url('admin/biodata/edit/') . $b->id_biodata ?>" class="btn btn-warning">Edit</a>
				<a onclick="deleteConfirm('<?php echo site_url('admin/biodata/delete/'.$b->id_biodata) ?>')" href="#!" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
			<?php endforeach; ?>
		<?php 
	//}

	?>
</table>
<!-- Disini Tampilan Halaman -->
		<?php/*$query = "SELECT max (buku_kode) as maxKode FROM buku";
		$hasil = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($hasil);
		$buku_kode = $data['maxKode'];
		$noUrut = (int) substr($buku_kode,4,4);
		$noUrut++;
		$kode = "B-";
		$newID = $kode . sprintf("%03s",$noUrut);*/
		?>
<!-- modal input -->
<div id="myModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Tambah Biodata Baru</h4>
			</div>
			<div class="modal-body">
				  <form role="form" action="<?php base_url('admin/biodata/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
				
				<div class="form-group">
                    <label for="pembuka">Pembuka</label>
                    <input type="text" class="form-control <?php echo form_error('pembuka') ? 'is-invalid':'' ?>" id="pembuka" placeholder="Pembuka" name="pembuka">
                    <div class="invalid-feedback">
                        <?php echo form_error('pembuka') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="profesi">Profesi</label>
                    <input type="text" class="form-control <?php echo form_error('profesi') ? 'is-invalid':'' ?>" id="profesi" placeholder="Profesi" name="profesi">
                    <div class="invalid-feedback">
                        <?php echo form_error('profesi') ?>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>" id="nama" placeholder="Nama" name="nama">
                    <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                    </div>
                </div>
                  

                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <input type="text" class="form-control <?php echo form_error('jk') ? 'is-invalid':'' ?>" id="jk" placeholder="Jenis Kelamin" name="jk">
                    <div class="invalid-feedback">
                        <?php echo form_error('jk') ?>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="ttl">Tempat, Tanggal Lahir</label>
                    <input type="text" class="form-control <?php echo form_error('ttl') ? 'is-invalid':'' ?>" id="ttl" placeholder="Tempat, Tanggal Lahir" name="ttl">
                    <div class="invalid-feedback">
                        <?php echo form_error('ttl') ?>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control <?php echo form_error('alamat') ? 'is-invalid':'' ?>" id="alamat" placeholder="Alamat" name="alamat">
                    <div class="invalid-feedback">
                        <?php echo form_error('alamat') ?>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="agama">Agama</label>
                    <input type="text" class="form-control <?php echo form_error('agama') ? 'is-invalid':'' ?>" id="agama" placeholder="Agama" name="agama">
                    <div class="invalid-feedback">
                        <?php echo form_error('agama') ?>
                    </div>
                </div>
				
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>" id="status" placeholder="Status" name="status">
                    <div class="invalid-feedback">
                        <?php echo form_error('status') ?>
                    </div>
                </div>
				
				<div class="form-group">
                    <label for="foto">Foto</label></br>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input <?php echo form_error('foto') ? 'is-invalid':'' ?>" id="foto" name="foto">
                        <label class="custom-file-label" for="foto">Choose file</label>
                        <div class="invalid-feedback">
                            <?php echo form_error('foto') ?>
                        </div>
                      </div>
                    </div>
                </div>
				  
                <div class="form-group">
                    <label for="resume">Resume</label>
                    <textarea class="form-control <?php echo form_error('resume') ? 'is-invalid':'' ?>" id="resume" style="width: 100%" name="resume"></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('resume') ?>
                    </div>
                </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
		</div>
	</div>
</div>


<?php $this->load->view("_partial/admin/footer.php") ?>

 <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"><?php ?></h1>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <?php echo $judul ?>
                        </div>
                        <div class="card shadow mb-4">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>JB-Harga</th>
							<th>JB-Kepemilikan</th>
							<th>JB-Fungsi</th>
							<th>JML-Pendapatan</th>
							<th>Latitude</th>
                            <th>Longitude</th>
                            <th>Foto</th>
                            <th>Action</th>
						</tr>
					</thead>
					<tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($bank as $row) { ?>
                            <tr>
                                 <td><?php echo $i ?></td>
                                 <td><?php echo $row->nama ?></td>
                                 <td><?php echo $row->jb_harga ?></td>
                                 <td><?php echo $row->jb_kepemilikan ?></td>
                                 <td><?php echo $row->jb_fungsi ?></td>
                                 <td><?php echo $row->jml_pendapatan ?></td>
                                 <td><?php echo $row->latitude ?></td>
                                 <td><?php echo $row->longitude ?></td>
                                 <td><img src="<?php echo $row->link_foto ?>" style="width:100px" class="img-thumbnail"></td>
                                 
                                <td>
									<a href="<?= base_url('Bank_data/hapus/'.$row->no) ?> " class="badge badge-danger"
                                    onClick="return confirm('Apakah Data Ingin Dihapus??')">Hapus</a>
									<a href="<?= base_url('Bank_data/edit/'.$row->no) ?> " class="badge badge-warning">Edit</a>
								</td>
                            </tr>
                            <?php $i++; ?>
                            <?php } ?>
                            
					</tbody>
				</table>
			</div>
		</div>
	</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
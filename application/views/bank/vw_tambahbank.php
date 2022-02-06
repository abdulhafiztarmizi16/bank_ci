<!-- Begin Page For Map -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php  ?></h1>
	<div class="row ">
		<div class="col-md-6 ">
			<div class="card">
				<div class="card-header">
					Maps
				</div>
				<div class="card-body">
					<div id="map" style="height: 600px;"></div>
				</div>
			</div>

		</div>

        <!-- Begin Page For Content -->
        <div class="col-md-6 ">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Bank
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input name="nama" autocomplete="off" type="text" value="<?= set_value('nama'); ?>" class="form-control" id="nama" >
							<?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="jb_harga">JB Harga</label>
							<select name="jb_harga" class="form-control" id="jb_harga">
								<option value="Bank Konvensional">Bank Konvensional</option>
								<option value="Bank Syariah">Bank Syariah</option>
							</select>
								<?= form_error('jb_harga', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="jb_kepemilikan">JB Kepemilikan</label>
							<select name="jb_kepemilikan" class="form-control" id="jb_kepemilikan">
								<option value="Bank Milik Pemerintah ">Bank Milik Pemerintah</option>
								<option value="Bank Swasta Milik Nasional">Bank Swasta Milik Nasional</option>
								<option value="Bank Pembangunan Daerah">Bank Pembangunan Daerah</option>
								<option value="Bank Asing">Bank Asing</option>
								<option value="Bank Milik Campuran">Bank Milik Campuran</option>
							</select>
							<?= form_error('jb_kepemilikan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<div class="form-group">
							<label for="jb_fungsi">JB Fungsi</label>
							<select name="jb_fungsi" class="form-control" id="jb_fungsi">
								<option value="Bank Umum">Bank Umum</option>
								<option value="Bank Sentral">Bank Sentral</option>
								<option value="Bank Indonesia">Bank Indonesia</option>
							</select>
							<?= form_error('jb_fungsi', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
                        <div class="form-group">
							<label for="jml_pendapatan">JML Pendapatan</label>
							<input name="jml_pendapatan" autocomplete="off" value="<?= set_value('jml_pendapatan'); ?>" type="text" class="form-control" id="jml_pendapatan" >
							<?= form_error('jml_pendapatan', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
                        <div class="form-group">
							<label for="latitude">Latitude</label>
							<label id=Llat style="color:white;background-color:black;"></label>
							<input id="lokasi1" name="latitude" autocomplete="off" value="<?= set_value('latitude'); ?>" type="text" class="form-control">
							<?= form_error('latitude', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
                        <div class="form-group">
							<label for="longitude">Longitude</label>
							<label id=Llng style="color:white;background-color:black;"></label>
							<input id = "lokasi2" name="longitude" autocomplete="off" value="<?= set_value('longitude'); ?>" type="text" class="form-control">
							<?= form_error('longitude', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
                        <div class="form-group">
							<label for="link_foto">Foto</label>
							<input name="link_foto" autocomplete="off" value="<?= set_value('link_foto'); ?>" placeholder="https://drive.google.com/uc?export=view&id=" type="text" class="form-control" id="link_foto">
							<?= form_error('link_foto', '<small class="text-danger pl-3">', '</small>'); ?>
						</div>
						<!-- <div class="form-group">
							<label for="link_foto">Foto</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" name="gambar" id="link_foto">
								<label for="link_foto" class="custom-file-label">Choose File</label>
							</div>
						</div> -->
						<button type="submit" name="tambah" class="btn btn-primary float-left">Tambah Bank</button>
                        <button style="margin-left:10px;" type="reset" name="tambah" class="btn btn-success float-left">Reset</button>
					</form>
				</div>
			</div>

		</div>
	</div>
</div>
</div>

<!-- BELUM SELESAI -->
<!-- script memanggil map -->
<script>

	var map = L.map('map').setView([0.5102756596410103, 101.44848654368349], 14);

	var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox/streets-v11',
	}).addTo(map);

	//var marker = L.marker([0.5102756596410103, 101.44848654368349],{draggable:true}).addTo(map)
// var marker = L.marker([0.5102756596410103, 101.44848654368349],{draggable:false}).addTo(map)
// 		.bindPopup('<b>Latitude : </b>'+lat[1]+'<br><b>Longitude : </b>'+lng[0]).openPopup(); 
	var popup = L.popup()
		.setLatLng([0.5102756596410103, 101.44848654368349],14)

	function onMapClick(e) {
	
    var coord = e.latlng.toString().split(',');
    var lat = coord[0].split('(');
    var lng = coord[1].split(')');
	var lokasi1 = lat[1];
	var lokasi2 =lng[0];
	document.getElementById("Llat").innerHTML = "--> Koordinat : "+lokasi1;
	document.getElementById("Llng").innerHTML = "--> Koordinat : "+lokasi2;
		
		//alert(lokasi1  +' | '+ lokasi2); 
		
	}
  map.on('click',onMapClick);

</script>


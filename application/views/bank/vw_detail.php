<!-- Begin Page For Map -->
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?php  ?></h1>
	<div class="row ">
		<div class="col-md-6 ">
			<div class="card">
				<div class="card-header">
					PICTURE
				</div>
				<div class="card-body">
                 
					<div>
                    <img style="width:100%" src="<?=$bank->link_foto?>" alt="foto_bank">
                    </div>
                   
				</div>
			</div>

		</div>

        <!-- Begin Page For Content -->
        <div class="col-md-6 ">
			<div class="card">
				<div class="card-header">
					<?php echo $judul?>
				</div>
				<div class="card-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Nama</label>
							<input class="form-control" value="<?=$bank->nama?>" disabled>
                        </div>
                        <div class="form-group">
							<label>JB Harga</label>
							<input class="form-control" value="<?=$bank->jb_harga?>" disabled>
                        </div>
                        <div class="form-group">
							<label>JB Kepemilikan</label>
							<input class="form-control" value="<?=$bank->jb_kepemilikan?>" disabled>
                        </div>
                        <div class="form-group">
							<label>JB Fungsi</label>
							<input class="form-control" value="<?=$bank->jb_fungsi?>" disabled>
                        </div>
                        <div class="form-group">
							<label>JML Pendapatan</label>
							<input class="form-control" value="<?=$bank->jml_pendapatan?>" disabled>
                        </div>
                        <div class="form-group">
							<label>Latitude</label>
							<input class="form-control" value="<?=$bank->latitude?>" disabled>
                        </div>
                        <div class="form-group">
							<label>Longitude</label>
							<input class="form-control" value="<?=$bank->longitude?>" disabled>
                        </div>

                        

                        
						
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


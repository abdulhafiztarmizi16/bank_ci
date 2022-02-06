<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php ?></h1>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    ABDUL HAFIZ TARMIZI</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">1955301001</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    LUCKY ROSALINA</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">1955301064</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    MUHAMMAD IQBAL ALI</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">1955301098</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Isi konten disini -->
        <div class="col-lg-15 mb-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h1 mb-0 text-black-800"><b>Pemetaan Bank</h1>
<!-- button search -->
	<?php echo form_open('') ?>
            <div>
                <input type="text" style="height:37px;border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"  name="keyword" autocomplete="off" placeholder="search">
		<input class="btn btn-primary " type="submit" name="search_submit" value="Cari">
            </div>
		
	<?php echo form_close() ?>

        </div>
<!-- MEMANGGIL MAP -->
        <div id="map" style="width:100%; height: 550px;"></div>
       
        </div>


 
<script>           
//=================================================================//
//  |   |   |   |   CONTROL LAYER
//=================================================================//
// LAYER SEARCH   

var search = L.layerGroup();
     <?php foreach ($products as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(search);
    <?php } ?>
//  LAYER 1 -> ALL DATA
    var bankLayer = L.layerGroup();
     <?php foreach ($bank as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(bankLayer);
    <?php } ?>
// LAYER 2 -> SELEKSI JB-HARGA = BANK SYARIAH
var jbhargaLayerBS = L.layerGroup();
     <?php foreach ($filterBS as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(jbhargaLayerBS);
    <?php } ?>
// LAYER 3 -> SELEKSI JB-HARGA = BANK KONVENSIONAL
var jbhargaLayerBK = L.layerGroup();
     <?php foreach ($filterBK as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(jbhargaLayerBK);
    <?php } ?>
// LAYER 4 -> SELEKSI JB-FUNGSI = BANK UMUM
var jbfungsiLayerBU = L.layerGroup();
     <?php foreach ($filterBU as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(jbfungsiLayerBU);
    <?php } ?>
// LAYER 5 -> SELEKSI JB-FUNGSI = BANK SENTRAL
var jbfungsiLayerBST = L.layerGroup();
     <?php foreach ($filterBST as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(jbfungsiLayerBST);
    <?php } ?>
// LAYER 6 -> SELEKSI JB-FUNGSI = BANK PERKREDITAN RAKYAT
var jbfungsiLayerBPR = L.layerGroup();
     <?php foreach ($filterBPR as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(jbfungsiLayerBPR);
    <?php } ?>
// LAYER 7 -> SELEKSI JB-KEPEMILIKAN = BANK MILIK PEMERINTAH
var jbkepemilikanLayerBMP = L.layerGroup();
     <?php foreach ($filterBMP as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(jbkepemilikanLayerBMP);
    <?php } ?>
// LAYER 8 -> SELEKSI JB-KEPEMILIKAN = BANK SWASTA MILIK NASIONAL
var jbkepemilikanLayerBSMN = L.layerGroup();
     <?php foreach ($filterBSMN as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(jbkepemilikanLayerBSMN);
    <?php } ?>
// LAYER 9 -> SELEKSI JB-KEPEMILIKAN = BANK PEMBANGUNAN DAERAH
var jbkepemilikanLayerBPD = L.layerGroup();
     <?php foreach ($filterBPD as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(jbkepemilikanLayerBPD);
    <?php } ?>
// LAYER 10 -> SELEKSI JB-KEPEMILIKAN = BANK ASING
var jbkepemilikanLayerBA = L.layerGroup();
     <?php foreach ($filterBA as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(jbkepemilikanLayerBA);
    <?php } ?>
// LAYER 11 -> SELEKSI JB-KEPEMILIKAN = BANK MILIK CAMPURAN
var jbkepemilikanLayerBMC = L.layerGroup();
     <?php foreach ($filterBMC as $key) { ?>
	var lokasi = L.marker([<?=$key->latitude ?>, <?=$key->longitude ?>]).bindPopup("<center><b>INFORMATION</b></center><br>"+
           "<?=$key->nama ?><br>"+
           "<?=$key->jb_harga ?><br>"+
           "<?=$key->jb_kepemilikan ?><br>"+
           '<a href ="<?=base_url('bank_data/detail/').$key->no?>">See Detail...</a>').addTo(jbkepemilikanLayerBMC);
    <?php } ?>

	var mbAttr = 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>';
	var mbUrl = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var grayscale = L.tileLayer(mbUrl, {id: 'mapbox/light-v9', tileSize: 512, zoomOffset: -1, attribution: mbAttr});
	var streets = L.tileLayer(mbUrl, {id: 'mapbox/streets-v11', tileSize: 512, zoomOffset: -1, attribution: mbAttr});

	var map = L.map('map', {
		center: [0.5102756596410103, 101.44848654368349],
		zoom: 10,
		layers: [streets, search]
	});

	var baseLayers = {
		'Grayscale': grayscale,
		'Streets': streets,
	};

	var overlays = {
		'All Data': bankLayer,
        'Bank Syariah' : jbhargaLayerBS,
        'Bank Konvensional' : jbhargaLayerBK,
        'Bank Umum' : jbfungsiLayerBU,
        'Bank Sentral' : jbfungsiLayerBST,
        'Bank Perkreditan Rakyat' : jbfungsiLayerBPR,
        'Bank Milik Pemerintah' : jbkepemilikanLayerBMP,
        'Bank Milik Swasta Nasional' : jbkepemilikanLayerBSMN,
        'Bank Pembangunan Daerah' : jbkepemilikanLayerBPD,
        'Bank Asing' : jbkepemilikanLayerBA,
        'Bank Milik Campuran' : jbkepemilikanLayerBMC,
        'Use Search' : search,
	};

	var layerControl = L.control.layers(baseLayers, overlays).addTo(map);

        </script>
       
        </div>
    </div>


</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


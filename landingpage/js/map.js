// base url project
const base_url = 'http://localhost/projectgis';
const kecamatan = document.getElementsByName("kecamatan");
const ukuranLubang = document.getElementById("ukuran_lubang");
const btnShow = document.getElementById("btnShow");
const lonLatKecamatan = new Map([
    ["all", [101.458309, 0.555440]],
    ["bukitraya", [101.46872, 0.47749]],
    ["limapuluh", [101.45912, 0.53975]],
    ["marpoyandamai", [101.43412, 0.47078]],
    ["payungsekaki", [101.40006, 0.52510]],
    ["pekanbarukota", [101.44745, 0.52296]],
    ["rumbai", [101.39542, 0.62451]],
    ["rumbaipesisir", [101.48843, 0.60416]],
    ["sail", [101.45914, 0.51596]],
    ["senapelan", [101.43725, 0.53491]],
    ["sukajadi", [101.43807, 0.51792]],
    ["tampan", [101.38685, 0.46958]],
    ["tenayanraya", [101.53172, 0.51459]]
]);

// style layer
const style = new ol.style.Style({
    fill: new ol.style.Fill({
        color: '#eeeeee',
    }),
    stroke: new ol.style.Stroke({
        color: 'rgba(255, 255, 255, 0.7)',
        width: '2'
    }),
});

// map
const map = new ol.Map({
    target: 'map',
    layers: [
        new ol.layer.Tile({
            source: new ol.source.OSM()
        })
    ],
    view: new ol.View({
        center: ol.proj.fromLonLat([101.458309, 0.555440]),
        zoom: 11.5
    })
});

// add Full Screen control
const control = new ol.control.FullScreen();
map.addControl(control);

// add overlay information
const overlay = new ol.Overlay({
    element: document.getElementById('overlay'),
    positioning: 'bottom-center'
});

// layer kecamatan pku
const poly_kec_pku = new ol.layer.Vector({
    //background: '#e5e6d3',
    source: new ol.source.Vector({
        format: new ol.format.GeoJSON(),
        url: `${base_url}/assets/data/polygon_kecamatan_pku.json`
    }),
    style: function (feature) {
        const color = feature.get('Warna') || '#eeeeee';
        style.getFill().setColor(color);
        return style;
    },
    opacity: 0.7,
});
map.addLayer(poly_kec_pku);
poly_kec_pku.set('name', 'kecamatan_pku');

const featureOverlay = new ol.layer.Vector({
    source: new ol.source.Vector(),
    map: map,
    style: new ol.style.Style({
        stroke: new ol.style.Stroke({
            color: '#54514c',
            width: 3,
        }),
    }),
});

let highlight;
const displayKecamatan = function (pixel) {
    const feature = map.forEachFeatureAtPixel(pixel, function (feature) {
        return feature;
    });

    const info_kec = document.getElementById('info_kec');
    if (feature) {
        info_kec.innerHTML = feature.get('Kecamatan') || '-';
    } else {
        info_kec.innerHTML = '-';
    }

    if (feature !== highlight) {
        if (highlight) {
            featureOverlay.getSource().removeFeature(highlight);
        }
        if (feature) {
            featureOverlay.getSource().addFeature(feature);
        }
        highlight = feature;
    }
};

map.on('pointermove', function (evt) {
    if (evt.dragging) {
        return;
    }
    const pixel = map.getEventPixel(evt.originalEvent);
    displayKecamatan(pixel);
});

map.on("click", function (evt) {
    var feature = map.forEachFeatureAtPixel(evt.pixel,
        function (feature) {
            return feature;
        });
    var coord = evt.coordinate;
    var element = overlay.getElement();

    // overlay will appear if feature that clicked is valid, else made feature disappear
    if (feature && feature.get('Lokasi') != undefined) {
        // update the overlay element's content
        element.innerHTML =
            '<div class="card" style="width: 18rem;">' +
            '<img src="' + feature.get('Link Foto') + '" class="card-img-top" alt="jalan berlubang">' +
            '<div class="card-body">' +
            '<h5>Diameter Lubang : ' + feature.get('Ukuran Lubang (cm)') + ' (cm)</h5>' +
            '<i>Lokasi</i> : ' + feature.get('Lokasi') + '<br>' +
            '<i>Status</i> : ' + feature.get('Status Jalan') + '<br>' +
            '<i>Kepadatan Jalan</i> : ' + feature.get('Kepadatan Jalan') + '<br>' +
            '<button class="btn btn-sm btn-outline-primary float float-right mt-2" onclick="closer(this)">Tutup</button>' +
            '</div></div>';
        // position the element (using the coordinate in the map's projection)
        overlay.setPosition(coord);
        // and add it to the map
        map.addOverlay(overlay);
    }
    else {
        map.removeOverlay(overlay);
    }
});


let styleFeature = new ol.style.Style({
    image: new ol.style.Icon({
        anchor: [0.5, 46],
        anchorXUnits: 'flaticon',
        anchorYUnits: 'pixels',
        src: `${base_url}/assets/images/location.png` // path icon
    })
});

// first layer
var layerJB = new ol.layer.Vector({
    source: new ol.source.Vector({
        format: new ol.format.GeoJSON(),
        url: `${base_url}/assets/data/jalanberlubang.json`
    }),
    style: new ol.style.Style({
        image: new ol.style.Icon({
            anchor: [0.5, 46],
            anchorXUnits: 'flaticon',
            anchorYUnits: 'pixels',
            src: `${base_url}/assets/images/location.png` // path icon
        })
    })
});
map.addLayer(layerJB);
layerJB.set('name', 'layerJB');

function cekSelectedKec(kecFeature) {
    var selected = [];
    for (var i = 0; i < kecamatan.length; i++) {
        if (kecamatan[i].checked) {
            selected.push(kecamatan[i].value);
        }
    }
    //
    for (var i = 0; i < selected.length; i++) {
        if (selected[i] == kecFeature) {
            return true;
        } else {
            continue;
        }
    }
    return false;
}

function filterData() {
    map.removeLayer(layerJB);
    map.getLayers().forEach(function (layer) {
        if (layer.get('name') != undefined && (layer.get('name') == "newLayer" || layer.get("name") == "spasialLayer")) {
            map.removeLayer(layer);
        }
    });

    var newLayer = new ol.layer.Vector({
        source: new ol.source.Vector({
            url: `${base_url}/assets/data/jalanberlubang.json`,
            format: new ol.format.GeoJSON(),
        }),
        visible: true,
        style: function (feature) {
            if (ukuranLubang.value == "kecil" && feature.get('Ukuran Lubang (cm)') < 100 && cekSelectedKec(feature.get('Kecamatan'))) {
                return styleFeature;
            } else if (ukuranLubang.value == "besar" && feature.get('Ukuran Lubang (cm)') >= 100 && cekSelectedKec(feature.get('Kecamatan'))) {
                return styleFeature;
            } else if (ukuranLubang.value == "all" && cekSelectedKec(feature.get('Kecamatan'))) {
                return styleFeature;
            }
        }
    });
    map.addLayer(newLayer);
    newLayer.set('name', 'newLayer');
}

function analisaSpasial() {
    map.removeLayer(layerJB);
    map.getLayers().forEach(function (layer) {
        if (layer.get('name') != undefined && (layer.get('name') == "newLayer" || layer.get("name") == "spasialLayer")) {
            map.removeLayer(layer);
        }
    });

    var spasialLayer = new ol.layer.Vector({
        source: new ol.source.Vector({
            format: new ol.format.GeoJSON(),
            url: `${base_url}/assets/data/analisa_spasial.json`
        }),
        style: new ol.style.Style({
            image: new ol.style.Icon({
                anchor: [0.5, 46],
                anchorXUnits: 'flaticon',
                anchorYUnits: 'pixels',
                src: `${base_url}/assets/images/pin.png` // path icon
            })
        })
    });
    spasialLayer.set("name", "spasialLayer");
    map.addLayer(spasialLayer);
}

// Event ini akan dijalankan saat kecamatan dipilih
for (let i = 0; i < kecamatan.length; i++) {
    kecamatan[i].addEventListener("click", function (e) {
        filterData();
    });
}
// Event ini akan dijalankan saat ukuran lubang dipilih
ukuranLubang.addEventListener("change", function () {
    filterData();
});

function closer(closer) {
    overlay.setPosition(undefined);
    closer.blur();
}

btnShow.addEventListener("click", function () {
    analisaSpasial();
});
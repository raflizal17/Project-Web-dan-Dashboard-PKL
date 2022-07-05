// file geojson
var bb_geojson = L.geoJSON("",{
    style: myStyle,
    onEachFeature: onEachFeature
});

function fetchJSON(url) {
    return fetch(url)
    .then(function(response) {
        return response.json();
    });
};

fetchJSON('/assets/peta_laju/bandung_barat/bb_laju.geojson')
.then(function(data) { 
    bb_geojson.addData(data);
});

// Map
var petaLaju_bb = L.map('map').setView([-6.89848, 107.41204],10);
bb_geojson.addTo(petaLaju_bb);

// Base Map
L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
	subdomains: 'abcd',
	maxZoom: 20
}).addTo(petaLaju_bb);

// Interactive
function highlightFeature_bb(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 5,
        color: '#666'
    });
    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
    }
    infoLaju_bb.update(layer.feature.properties);
}

var default_styleLaju = {
    weight: 1.7,
    opacity: 1,
    color: 'white',
    fillOpacity: 0.9
}

function resetHighlight_bb(e) {
    bb_geojson.resetStyle();
    infoLaju_bb.update();
}

function zoomToFeature_bb(e) {
    petaLaju_bb.fitBounds(e.target.getBounds());
}

function onEachFeature(feature, layer) {
    layer.on({
        mouseover: feature.properties.nmkab == 'Bandung Barat' ? highlightFeature_bb : '',
        mouseout: feature.properties.nmkab == 'Bandung Barat' ? resetHighlight_bb : '',
        click: feature.properties.nmkab == 'Bandung Barat' ? zoomToFeature_bb : ''
    });
}

var colPal_laju = ['#508d4f', '#63b463', '#77dd77', '#84ea83','#a9e9a4'];

function getColor(d, kab) {
    if (kab == 'Bandung Barat') {
        return d > 66.419 ? colPal_laju[4] :
        d > 52.791 ? colPal_laju[3] :
        d > 46.259 ? colPal_laju[2] :
        d > 38.664 ? colPal_laju[1] :
        colPal_laju[0];
    } else if (kab == 'Purwakarta'){
        return d > 44.702 ? colPal_laju[4] :
        d > 38.554 ? colPal_laju[3] :
        d > 30.581 ? colPal_laju[2] :
        d > 21.363 ? colPal_laju[1] :
        colPal_laju[0];
    } 
}

function myStyle(feature) {
    return {
        fillColor: getColor(feature.properties.laju, feature.properties.nmkab),
        weight: 1.7,
        opacity: 1,
        color: 'white',
        fillOpacity: 0.9
    }
};

// Home Button
L.easyButton('<i class="fa-solid fa-house"></i>', function(btn, map){
    map.setView([-6.89848, 107.41204], 10);
}).addTo(petaLaju_bb);

// Legend
var legend_bb = new L.control({position: 'bottomright'});

legend_bb.onAdd = function (map, grades) {
    this._div = L.DomUtil.create('div', 'infoLaju LegendLaju')
    grades = [38.6, 38.7, 46.3, 52.8, 66.4, 76.3]

    for (var i = 0; i < grades.length - 1; i++) {
        this._div.innerHTML +=
        '<i style="background:' + colPal_laju[i] + '"></i> ' +
        grades[i] + ' &ndash; ' + grades[i + 1] + '<br>';
    }
    return this._div;
};

legend_bb.addTo(petaLaju_bb);

// Informasi Laju alih fungsi
var infoLaju_bb = L.control();

infoLaju_bb.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'infoLaju'); 
    this.update();
    return this._div;
};

infoLaju_bb.update = function (dat) {
    this._div.innerHTML = 
    '<h4>Laju Alih Fungsi Lahan</h4>' +  (dat ?
    '<b>Kab : ' + dat.nmkab + '</b><br/>' +
    '<b>Kec : ' + dat.nmkec + '</b><br/>' +
    dat.laju.toFixed(3) + ' %'
    : 'Hover over a district');
};

infoLaju_bb.addTo(petaLaju_bb);
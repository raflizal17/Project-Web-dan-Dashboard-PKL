// file geojson
var geojson_bb = L.geoJSON("",{
    style: petaLuasStyle_bb,
    onEachFeature: onEachFt_bbLuas
});

function fetchJSON(url) {
    return fetch(url)
    .then(function(response) {
        return response.json();
    });
};

fetchJSON('/assets/peta_luas_sawah/bandung_barat/bb_LajuLuas.geojson')
.then(function(data) { 
    geojson_bb.addData(data);
});


// Map
var petaLuas_bb = L.map('map').setView([-6.89848, 107.41204], 10);
geojson_bb.addTo(petaLuas_bb);

// Base Map
L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
	subdomains: 'abcd',
	maxZoom: 20
}).addTo(petaLuas_bb);



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
    infoLuas_bb.update(layer.feature.properties);
}

function resetHighlight_bb(e) {
    geojson_bb.resetStyle();
    infoLuas_bb.update();
}

function zoomToFeature_bb(e) {
    petaLuas_bb.fitBounds(e.target.getBounds());
}

function onEachFt_bbLuas(feature, layer) {
    layer.on({
        mouseover: highlightFeature_bb, 
        mouseout: resetHighlight_bb,
        click: zoomToFeature_bb 
    });
}

var colPal_Luas = ['#508d4f', '#63b463', '#77dd77', '#84ea83','#a9e9a4'];
// 961.64 1633.46 2207.34 2867.15 3770.09 4911.88
function naturalBreaksLuas_bb(d) {
    return d > 3770.09 ? colPal_Luas[0] :
    d > 2867.15 ? colPal_Luas[1] :
    d > 1633.46 ? colPal_Luas[2] :
    d > 961.64 ? colPal_Luas[3] :
    colPal_Luas[4];
}

function petaLuasStyle_bb(feature) {
    return {
        fillColor: naturalBreaksLuas_bb(feature.properties.estimasi_luas),
        weight: 1.7,
        opacity: 1,
        color: 'white',
        fillOpacity: 0.9
    }
};





// Home Button
L.easyButton('<i class="fa-solid fa-house"></i>', function(btn, map){
    map.setView([-6.89848, 107.41204], 10);
}).addTo(petaLuas_bb);




// Legend
var legendLuas_bb = new L.control({position: 'bottomright'});

legendLuas_bb.onAdd = function (map, grades) {
    this._div = L.DomUtil.create('div', 'infoLuas LgndLuas')
    grades = [961.6, 1633.5, 2207.3, 2867.2, 3770.1, 4911.9]

    for (var i = 0; i < grades.length - 1; i++) {
        this._div.innerHTML +=
        '<i style="background:' + colPal_Luas[4 - i] + '"></i> ' +
        grades[i] + ' &ndash; ' + grades[i + 1] + '<br>';
    }
    return this._div;
};
legendLuas_bb.addTo(petaLuas_bb);



// Informasi Luas alih fungsi
var infoLuas_bb = new L.control();

infoLuas_bb.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'infoLuas'); 
    this.update();
    return this._div;
};

infoLuas_bb.update = function (dat) {
    this._div.innerHTML = 
    '<h4 id="title_luas">Estimasi Luas Sawah Tahun 2021</h4>' +  (dat ?
    '<b>Kab : ' + dat.nmkab + '</b><br/>' +
    '<b>Kec : ' + dat.nmkec + '</b><br/>' +
    dat.estimasi_luas.toFixed(2) + ' Ha'
    : 'Hover over a district');
};

infoLuas_bb.addTo(petaLuas_bb);


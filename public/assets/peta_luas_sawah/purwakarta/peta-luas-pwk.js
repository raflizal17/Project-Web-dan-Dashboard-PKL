// file geojson
var geojson_pwk = L.geoJSON("",{
    style: petaLuasStyle_pwk,
    onEachFeature: onEachFt_pwkLuas
});

function fetchJSON(url) {
    return fetch(url)
    .then(function(response) {
        return response.json();
    });
};


fetchJSON('/assets/peta_luas_sawah/purwakarta/pwk_LajuLuas.geojson')
.then(function(data) { 
    geojson_pwk.addData(data);
});



// Map
var petaLuas_pwk = L.map('map').setView([-6.60139, 107.44292], 10);
geojson_pwk.addTo(petaLuas_pwk);

// Base Map
L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
	subdomains: 'abcd',
	maxZoom: 20
}).addTo(petaLuas_pwk);


// Interactive
function highlightFeature_pwk(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 4,
        color: '#666'
    });
    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
    }
    infoLuas_pwk.update(layer.feature.properties);
}

function resetHighlight_pwk(e) {
    geojson_pwk.resetStyle();
    infoLuas_pwk.update();
}

function zoomToFeature_pwk(e) {
    petaLuas_pwk.fitBounds(e.target.getBounds());
}

function onEachFt_pwkLuas(feature, layer) {
    layer.on({
        mouseover: highlightFeature_pwk, 
        mouseout: resetHighlight_pwk,
        click: zoomToFeature_pwk 
    });
}

var colPal_Luas = ['#508d4f', '#63b463', '#77dd77', '#84ea83','#a9e9a4'];


// 434.96  434.96 1239.71 1705.62 2195.93 2781.48
function naturalBreaksLuas_pwk(d) {
    return d > 2195.93 ? colPal_Luas[0] :
        d > 1705.62 ? colPal_Luas[1] :
        d > 1239.71 ? colPal_Luas[2] :
        d > 434.96 ? colPal_Luas[3] :
        colPal_Luas[4];

}

function petaLuasStyle_pwk(feature) {
    return {
        fillColor: naturalBreaksLuas_pwk(feature.properties.estimasi_luas),
        weight: 1.7,
        opacity: 1,
        color: 'white',
        fillOpacity: 0.9
    }
};





// Home Button
L.easyButton('<i class="fa-solid fa-house"></i>', function(btn, map){
    map.setView([-6.60139, 107.44292], 10);
}).addTo(petaLuas_pwk);





// Legend
var legendLuas_pwk = new L.control({position: 'bottomright'});

legendLuas_pwk.onAdd = function (map, grades) {
    this._div = L.DomUtil.create('div', 'infoLuas LgndLuas')
    grades = [434.9, 435.0, 1239.7, 1705.6, 2195.9, 2781.5]

    for (var i = 0; i < grades.length - 1; i++) {
        this._div.innerHTML +=
        '<i style="background:' + colPal_Luas[4 - i] + '"></i> ' +
        grades[i].toFixed(1) + ' &ndash; ' + grades[i + 1].toFixed(1) + '<br>';
    }
    return this._div;
};
legendLuas_pwk.addTo(petaLuas_pwk);




// Informasi Luas lahan Sawah
var infoLuas_pwk = L.control();

infoLuas_pwk.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'infoLuas'); 
    this.update();
    return this._div;
};

infoLuas_pwk.update = function (dat) {
    this._div.innerHTML = 
    '<h4 id="title_luas">Estimasi Luas Sawah Tahun 2021</h4>' +  (dat ?
    '<b>Kab : ' + dat.nmkab + '</b><br/>' +
    '<b>Kec : ' + dat.nmkec + '</b><br/>' +
    dat.estimasi_luas.toFixed(2) + ' Ha'
    : 'Hover over a district');
};

infoLuas_pwk.addTo(petaLuas_pwk);


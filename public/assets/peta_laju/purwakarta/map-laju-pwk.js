// file geojson
var pwk_geojson = L.geoJSON("",{
    style: myStyle,
    onEachFeature: onEachFeature
});

function fetchJSON(url) {
    return fetch(url)
    .then(function(response) {
        return response.json();
    });
};

fetchJSON('/assets/peta_laju/purwakarta/pwk_laju.geojson')
.then(function(data) { 
    pwk_geojson.addData(data);
});

// Map
var petaLaju_pwk = L.map('map').setView([-6.60139, 107.44292], 10);
pwk_geojson.addTo(petaLaju_pwk);

// Base Map
L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
	subdomains: 'abcd',
	maxZoom: 20
}).addTo(petaLaju_pwk);

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
    infoLaju_pwk.update(layer.feature.properties);
}

var default_styleLaju = {
    weight: 1.7,
    opacity: 1,
    color: 'white',
    fillOpacity: 0.9
}

function resetHighlight_pwk(e) {
    pwk_geojson.resetStyle();
    infoLaju_pwk.update();
}

function zoomToFeature_pwk(e) {
    petaLaju_pwk.fitBounds(e.target.getBounds());
}

function onEachFeature(feature, layer) {
    layer.on({
        mouseover: feature.properties.nmkab == 'Purwakarta' ? highlightFeature_pwk : '',
        mouseout: feature.properties.nmkab == 'Purwakarta' ? resetHighlight_pwk : '',
        click: feature.properties.nmkab == 'Purwakarta' ? zoomToFeature_pwk : ''
    });
}

var colPal_laju = ['#508d4f', '#63b463', '#77dd77', '#84ea83','#a9e9a4'];

function getColor(d, kab) {
    if (kab == 'Purwakarta'){
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
    map.setView([-6.60139, 107.44292], 10);
}).addTo(petaLaju_pwk);

// Legend
var legend_pwk = new L.control({position: 'bottomright'});

legend_pwk.onAdd = function (map, grades) {
    this._div = L.DomUtil.create('div', 'infoLaju LegendLaju')
    grades = [19.8, 21.4, 30.6, 38.6, 44.7, 63.4]

    for (var i = 0; i < grades.length - 1; i++) {
        this._div.innerHTML +=
        '<i style="background:' + colPal_laju[i] + '"></i> ' +
        grades[i] + ' &ndash; ' + grades[i + 1] + '<br>';
    }
    return this._div;
};

legend_pwk.addTo(petaLaju_pwk);


// Informasi Laju alih fungsi
var infoLaju_pwk = L.control();

infoLaju_pwk.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'infoLaju'); 
    this.update();
    return this._div;
};

infoLaju_pwk.update = function (dat) {
    this._div.innerHTML = 
    '<h4>Laju Alih Fungsi Lahan</h4>' +  (dat ?
    '<b>Kab : ' + dat.nmkab + '</b><br/>' +
    '<b>Kec : ' + dat.nmkec + '</b><br/>' +
    dat.laju.toFixed(3) + ' %'
    : 'Hover over a district');
};

infoLaju_pwk.addTo(petaLaju_pwk);


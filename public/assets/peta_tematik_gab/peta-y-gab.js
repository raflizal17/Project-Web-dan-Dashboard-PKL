// file geojson
var geojson_Gab = L.geoJSON("",{
    style: petaStyle_Gab,
    onEachFeature: onEachFt_Gab
});

var pwkbb_batas = L.geoJSON("",{
    style : {
        weight: 1,
        color: 'black',
        fillOpacity: 1
    }
});

function fetchJSON(url) {
    return fetch(url)
    .then(function(response) {
        return response.json();
    });
};


fetchJSON('/assets/geojson-pwkbb/pwk_bb_gab.geojson')
.then(function(data) { 
    geojson_Gab.addData(data);
});

fetchJSON('/assets/geojson-pwkbb/pwk_bb_batas.geojson')
.then(function(data) { 
    pwkbb_batas.addData(data);
});


// Map
var peta_Gab = L.map('map').setView([-6.75835, 107.44749], 10);
geojson_Gab.addTo(peta_Gab).bringToBack();
pwkbb_batas.addTo(peta_Gab).bringToFront();


// Base Map
L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
	subdomains: 'abcd',
	maxZoom: 20
}).addTo(peta_Gab);


// Interactive
function highlightFeature_Gab(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 4,
        color: '#666',
        fillOpacity: 1
    });

    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
    }
    info_Gab.update(layer.feature.properties);
}

function resetHighlight_Gab(e) {
    geojson_Gab.resetStyle().bringToBack();
    pwkbb_batas.resetStyle().bringToFront();
    info_Gab.update();
}

// function zoomToFeature_Gab(e) {
//     peta_Gab.fitBounds(e.target.getBounds());
// }

function onEachFt_Gab(feature, layer) {
    layer.on({
        mouseover: highlightFeature_Gab, 
        mouseout: resetHighlight_Gab,
        // click: zoomToFeature_Gab 
    });
}

var colPalLaju = ['#006D2C', '#20AC4B', '#7AC27F', '#A4D29F','#CFE6CA'];
// var nb_y = ["< -7.816", "[-7.816, -1.625)", "[-1.625, 3.126)", "[3.126, 6.782)", ">= 6.782"]; 
var nb_y = ["< 4.438", "[4.438, 5.556)", "[5.556, 7.352)", "[7.352, 8.302)", ">= 8.302" ]

function getColor_Gab(d) {
    return d === nb_y[0] ? colPalLaju[4] :
        d === nb_y[1] ? colPalLaju[3]:
        d === nb_y[2] ? colPalLaju[2] :
        d === nb_y[3] ? colPalLaju[1] :
        colPalLaju[0];
}

function petaStyle_Gab(feature) {
    return {
        fillColor: getColor_Gab(feature.properties.Y_nb),
        weight: 1,
        opacity: 1,
        color: 'white',
        fillOpacity: 0.85
    }
};

// Home Button
L.easyButton('<i class="fa-solid fa-house"></i>', function(btn, map){
    map.setView([-6.75835, 107.44749], 10);
}).addTo(peta_Gab);

// Legend
var legend_Gab = new L.control({position: 'bottomright'});

legend_Gab.onAdd = function (map, grades) {
    this._div = L.DomUtil.create('div', 'infoGab LgndGab')

    for (var i = 0; i < nb_y.length; i++) {
        this._div.innerHTML +=
        '<i style="background:' + colPalLaju[4 - i] + '; "></i> ' + 
        (nb_y[i] == '>= 8.302'? '≥ 8.302': nb_y[i]) + '<br>';
    }
    return this._div;
};
legend_Gab.addTo(peta_Gab);

// Informasi _Gab 
var info_Gab = L.control();

info_Gab.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'infoGab'); 
    this.update();
    return this._div;
};

info_Gab.update = function (dat) {
    this._div.innerHTML = 
    '<h4 id="title_Gab">Persentase Laju Alih Fungsi<br>Lahan Sawah Tahunan</h4>' +  (dat ?
    '<b>Kab : ' + dat.nmkab + '</b><br/>' +
    '<b>Kec : ' + dat.nmkec + '</b><br/>' +
    dat.Y.toFixed(3) + ' '
    : 'Hover over a district');
};

info_Gab.addTo(peta_Gab);
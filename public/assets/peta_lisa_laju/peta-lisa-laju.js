// file geojson
var geojsonLISA = L.geoJSON("",{
    style: petaStyleLISA,
    onEachFeature: onEachFtLISA
});

var batas_kabPWKBB = L.geoJSON("",{
    style : {
        weight: 1,
        color: 'black',
        fill: 'black',
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
    geojsonLISA.addData(data);
});
fetchJSON('/assets/geojson-pwkbb/pwk_bb_batas.geojson')
.then(function(data) { 
    batas_kabPWKBB.addData(data);
});




// Map
var petaLISA = L.map('map').setView([-6.75835, 107.44749], 10);

geojsonLISA.addTo(petaLISA).bringToBack();
batas_kabPWKBB.addTo(petaLISA).bringToFront();



// Base Map
L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
	attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
	subdomains: 'abcd',
	maxZoom: 20
}).addTo(petaLISA);


// Interactive
function highlightFeatureLISA(e) {
    var layer = e.target;

    layer.setStyle({
        weight: 4,
        color: '#666'
    });

    if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
        layer.bringToFront();
    }
    infoLISA.update(layer.feature.properties);
}

function resetHighlightLISA(e) {
    geojsonLISA.resetStyle().bringToBack();
    batas_kabPWKBB.resetStyle().bringToFront();
    infoLISA.update();
}

// function zoomToFeatureLISA(e) {
//     petaLISA.fitBounds(e.target.getBounds());
// }

function onEachFtLISA(feature, layer) {
    layer.on({
        mouseover: highlightFeatureLISA, 
        mouseout: resetHighlightLISA,
        // click: zoomToFeatureLISA 
    });
}

// 'gray70', 'tomato', 'skyblue3', 'orange', 'steelblue', 'black', 'black'
function getColorLISA(d) {
    return d === 'Not significant' ? '#bfbfbf' :
        d === 'High-High' ? '#ff6347':
        d === 'Low-High' ? '#87ceeb' :
        d === 'Low-Low' ? '#4682B4' :
        d === 'High-Low' ? '#ffbc40' :
        d === 'Isolated' ? 'black' :
        'black';

}

function petaStyleLISA(feature) {
    return {
        fillColor: getColorLISA(feature.properties.cluster),
        weight: 1,
        opacity: 1,
        color: 'white',
        fillOpacity: 0.9
    }
};





// Home Button
L.easyButton('<i class="fa-solid fa-house"></i>', function(btn, map){
    map.setView([-6.75835, 107.44749], 10);
}).addTo(petaLISA);





// Legend
var legendLISA = new L.control({position: 'bottomright'});

legendLISA.onAdd = function (map, grades) {
    this._div = L.DomUtil.create('div', 'infoLISA LgndLISA')

    colPal_LISA = ['#ff6347', '#ffbc40', '#87ceeb', '#4682B4', '#bfbfbf']
    cluster_LISA = ["High-High", "High-Low", "Low-High", "Low-Low", "Not significant"]

    for (var i = 0; i < cluster_LISA.length; i++) {
        this._div.innerHTML +=
        '<i style="background:' + colPal_LISA[i] + '; "></i> ' + cluster_LISA[i] + '<br>';
    }
    return this._div;
};
legendLISA.addTo(petaLISA);




// Informasi LISA 
var infoLISA = L.control();

infoLISA.onAdd = function (map) {
    this._div = L.DomUtil.create('div', 'infoLISA'); 
    this.update();
    return this._div;
};

infoLISA.update = function (dat) {
    this._div.innerHTML = 
    '<h4 id="title_LISA">Local Indicators of Spatial Association (LISA)</h4>' +  (dat ?
    '<b>Kab : ' + dat.nmkab + '</b><br/>' +
    '<b>Kec : ' + dat.nmkec + '</b><br/>' +
    'p-value : ' + dat.pvalue.toFixed(3) + ' '
    : 'Hover over a district');
};

infoLISA.addTo(petaLISA);

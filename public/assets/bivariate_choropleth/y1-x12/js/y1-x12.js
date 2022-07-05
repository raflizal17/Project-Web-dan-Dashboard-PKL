var highlightLayer;
function highlightFeature(e) {
    highlightLayer = e.target;

    if (e.target.feature.geometry.type === 'LineString') {
      highlightLayer.setStyle({
        color: '#ffff00',
      });
    } else {
      highlightLayer.setStyle({
        fillColor: '#ffff00',
        fillOpacity: 1
      });
    }
    highlightLayer.openPopup();
}
var map = L.map('map', {
    zoomControl:true, maxZoom:28, minZoom:1
}).fitBounds([[-7.134201593053492,106.73091933952448],[-6.384704130703433,108.08425721022071]]);
var hash = new L.Hash(map);
map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
var bounds_group = new L.featureGroup([]);
function setBounds() {
}
function pop_bb_pwk_TanpaBatasKecY1X12_0(feature, layer) {
    layer.on({
        mouseout: function(e) {
            for (i in e.target._eventParents) {
                e.target._eventParents[i].resetStyle(e.target);
            }
            if (typeof layer.closePopup == 'function') {
                layer.closePopup();
            } else {
                layer.eachLayer(function(feature){
                    feature.closePopup()
                });
            }
        },
        mouseover: highlightFeature,
    });
    var popupContent = '<table>\
            <tr>\
                <td colspan="2">' + (feature.properties['nmkab'] !== null ? autolinker.link(feature.properties['nmkab'].toLocaleString()) : '') + '</td>\
            </tr>\
        </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
}

function style_bb_pwk_TanpaBatasKecY1X12_0_0() {
    return {
        pane: 'pane_bb_pwk_TanpaBatasKecY1X12_0',
        opacity: 1,
        color: 'rgba(0,0,0,1.0)',
        dashArray: '',
        lineCap: 'square',
        lineJoin: 'bevel',
        weight: 4.0,
        fillOpacity: 0,
        interactive: true,
    }
}
map.createPane('pane_bb_pwk_TanpaBatasKecY1X12_0');
map.getPane('pane_bb_pwk_TanpaBatasKecY1X12_0').style.zIndex = 400;
map.getPane('pane_bb_pwk_TanpaBatasKecY1X12_0').style['mix-blend-mode'] = 'multiply';
var layer_bb_pwk_TanpaBatasKecY1X12_0 = new L.geoJson(json_bb_pwk_TanpaBatasKecY1X12_0, {
    attribution: '',
    interactive: true,
    dataVar: 'json_bb_pwk_TanpaBatasKecY1X12_0',
    layerName: 'layer_bb_pwk_TanpaBatasKecY1X12_0',
    pane: 'pane_bb_pwk_TanpaBatasKecY1X12_0',
    onEachFeature: pop_bb_pwk_TanpaBatasKecY1X12_0,
    style: style_bb_pwk_TanpaBatasKecY1X12_0_0,
});
bounds_group.addLayer(layer_bb_pwk_TanpaBatasKecY1X12_0);
map.addLayer(layer_bb_pwk_TanpaBatasKecY1X12_0);
function pop_LayerY1X12_1(feature, layer) {
    layer.on({
        mouseout: function(e) {
            for (i in e.target._eventParents) {
                e.target._eventParents[i].resetStyle(e.target);
            }
            if (typeof layer.closePopup == 'function') {
                layer.closePopup();
            } else {
                layer.eachLayer(function(feature){
                    feature.closePopup()
                });
            }
        },
        mouseover: highlightFeature,
    });
    var popupContent = '<table>\
            <tr>\
                <td colspan="2">Kabupaten : ' + (feature.properties['nmkab'] !== null ? autolinker.link(feature.properties['nmkab'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Kecamatan : ' + (feature.properties['nmkec'] !== null ? autolinker.link(feature.properties['nmkec'].toLocaleString()) : '') + '</td>\
            </tr>\
            <tr>\
                <td colspan="2">Persentase Laju Pertumbuhan Penduduk : ' + (feature.properties['Kategori_X12*100'] !== null ? autolinker.link(feature.properties['Kategori_X12*100'].toLocaleString()) : '') + '% (' + (feature.properties['Kategori_Kategori_X12'] !== null ? autolinker.link(feature.properties['Kategori_Kategori_X12'].toLocaleString()) : '') + ')</td>\
            </tr>\
            <tr>\
                <td colspan="2">Persentase Laju Alih Fungsi Lahan Sawah Tahunan : ' + (feature.properties['Kategori_Y1_Tahunan_(%)'] !== null ? autolinker.link(feature.properties['Kategori_Y1_Tahunan_(%)'].toLocaleString()) : '') + '% (' + (feature.properties['Kategori_Kategori_Y1'] !== null ? autolinker.link(feature.properties['Kategori_Kategori_Y1'].toLocaleString()) : '') + ')</td>\
            </tr>\
        </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
}

function style_LayerY1X12_1_0(feature) {
    switch(String(feature.properties['Kategori_KATEX12Y1'])) {
        case 'High High':
            return {
        pane: 'pane_LayerY1X12_1',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(42,90,91,1.0)',
        interactive: true,
    }
            break;
        case 'High Low':
            return {
        pane: 'pane_LayerY1X12_1',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(108,131,181,1.0)',
        interactive: true,
    }
            break;
        case 'High Medium':
            return {
        pane: 'pane_LayerY1X12_1',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(86,121,148,1.0)',
        interactive: true,
    }
            break;
        case 'Low High':
            return {
        pane: 'pane_LayerY1X12_1',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(115,174,128,1.0)',
        interactive: true,
    }
            break;
        case 'Low Low':
            return {
        pane: 'pane_LayerY1X12_1',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(232,232,232,1.0)',
        interactive: true,
    }
            break;
        case 'Low Medium':
            return {
        pane: 'pane_LayerY1X12_1',
        opacity: 1,
        color: 'rgba(35,35,35,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 1.0, 
        fill: true,
        fillOpacity: 1,
        fillColor: 'rgba(184,214,190,1.0)',
        interactive: true,
    }
            break;
    }
}
map.createPane('pane_LayerY1X12_1');
map.getPane('pane_LayerY1X12_1').style.zIndex = 401;
map.getPane('pane_LayerY1X12_1').style['mix-blend-mode'] = 'multiply';
var layer_LayerY1X12_1 = new L.geoJson(json_LayerY1X12_1, {
    attribution: '',
    interactive: true,
    dataVar: 'json_LayerY1X12_1',
    layerName: 'layer_LayerY1X12_1',
    pane: 'pane_LayerY1X12_1',
    onEachFeature: pop_LayerY1X12_1,
    style: style_LayerY1X12_1_0,
});
bounds_group.addLayer(layer_LayerY1X12_1);
map.addLayer(layer_LayerY1X12_1);
setBounds();

// Base Map
L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
    subdomains: 'abcd',
    maxZoom: 20
}).addTo(map);

var legend = L.control({position: 'bottomright'});

legend.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info legend');

    div.innerHTML =
    '<img src="/assets/bivariate_choropleth/y1-x12/Legend_Y1_X12.png" alt="" width="200" height="200">'
    
 return div;
};

legend.addTo(map);

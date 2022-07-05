const BASEURL = 'https://localhost:8080';
var highlightLayer;
function highlightFeature(e) {
    highlightLayer = e.target;
    highlightLayer.openPopup();
}
var map = L.map('map', {
    zoomControl:true, maxZoom:28, minZoom:10
}).fitBounds([[-6.7703981114545275,107.11918774319642],[-6.382730129354529,107.74791472507496]]);
var hash = new L.Hash(map);
map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
var bounds_group = new L.featureGroup([]);
function setBounds() {
}
map.createPane('pane_GoogleTerrain_0');
map.getPane('pane_GoogleTerrain_0').style.zIndex = 400;
var layer_GoogleTerrain_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
    pane: 'pane_GoogleTerrain_0',
    opacity: 1.0,
    attribution: '<a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
    minZoom: 10,
    maxZoom: 28,
    minNativeZoom: 0,
    maxNativeZoom: 20
});
layer_GoogleTerrain_0;
map.addLayer(layer_GoogleTerrain_0);
map.createPane('pane_LahanKosongNonVegetatif_1');
map.getPane('pane_LahanKosongNonVegetatif_1').style.zIndex = 401;
var img_LahanKosongNonVegetatif_1 = '/assets/peta_klasifikasi/purwakarta/data/LahanKosongNonVegetatif_1.png';
var img_bounds_LahanKosongNonVegetatif_1 = [[-6.776890503,107.220307198],[-6.407952533,107.602180905]];
var layer_LahanKosongNonVegetatif_1 = new L.imageOverlay(img_LahanKosongNonVegetatif_1,
                                      img_bounds_LahanKosongNonVegetatif_1,
                                      {pane: 'pane_LahanKosongNonVegetatif_1'});
bounds_group.addLayer(layer_LahanKosongNonVegetatif_1);
map.addLayer(layer_LahanKosongNonVegetatif_1);
map.createPane('pane_BadanAir_2');
map.getPane('pane_BadanAir_2').style.zIndex = 402;
var img_BadanAir_2 = '/assets/peta_klasifikasi/purwakarta/data/BadanAir_2.png';
var img_bounds_BadanAir_2 = [[-6.776890503,107.220307198],[-6.407952533,107.602180905]];
var layer_BadanAir_2 = new L.imageOverlay(img_BadanAir_2,
                                      img_bounds_BadanAir_2,
                                      {pane: 'pane_BadanAir_2'});
bounds_group.addLayer(layer_BadanAir_2);
map.addLayer(layer_BadanAir_2);
map.createPane('pane_Hutan_3');
map.getPane('pane_Hutan_3').style.zIndex = 403;
var img_Hutan_3 = '/assets/peta_klasifikasi/purwakarta/data/Hutan_3.png';
var img_bounds_Hutan_3 = [[-6.776890503,107.220307198],[-6.407952533,107.602180905]];
var layer_Hutan_3 = new L.imageOverlay(img_Hutan_3,
                                      img_bounds_Hutan_3,
                                      {pane: 'pane_Hutan_3'});
bounds_group.addLayer(layer_Hutan_3);
map.addLayer(layer_Hutan_3);
map.createPane('pane_LahanTerbangun_4');
map.getPane('pane_LahanTerbangun_4').style.zIndex = 404;
var img_LahanTerbangun_4 = '/assets/peta_klasifikasi/purwakarta/data/LahanTerbangun_4.png';
var img_bounds_LahanTerbangun_4 = [[-6.776890503,107.220307198],[-6.407952533,107.602180905]];
var layer_LahanTerbangun_4 = new L.imageOverlay(img_LahanTerbangun_4,
                                      img_bounds_LahanTerbangun_4,
                                      {pane: 'pane_LahanTerbangun_4'});
bounds_group.addLayer(layer_LahanTerbangun_4);
map.addLayer(layer_LahanTerbangun_4);
map.createPane('pane_Bera_5');
map.getPane('pane_Bera_5').style.zIndex = 405;
var img_Bera_5 = '/assets/peta_klasifikasi/purwakarta/data/Bera_5.png';
var img_bounds_Bera_5 = [[-6.776890503,107.220307198],[-6.407952533,107.602180905]];
var layer_Bera_5 = new L.imageOverlay(img_Bera_5,
                                      img_bounds_Bera_5,
                                      {pane: 'pane_Bera_5'});
bounds_group.addLayer(layer_Bera_5);
map.addLayer(layer_Bera_5);
map.createPane('pane_Sawah_6');
map.getPane('pane_Sawah_6').style.zIndex = 406;
var img_Sawah_6 = '/assets/peta_klasifikasi/purwakarta/data/Sawah_6.png';
var img_bounds_Sawah_6 = [[-6.776890503,107.220307198],[-6.407952533,107.602180905]];
var layer_Sawah_6 = new L.imageOverlay(img_Sawah_6,
                                      img_bounds_Sawah_6,
                                      {pane: 'pane_Sawah_6'});
bounds_group.addLayer(layer_Sawah_6);
map.addLayer(layer_Sawah_6);
map.createPane('pane_Awan_7');
map.getPane('pane_Awan_7').style.zIndex = 407;
var img_Awan_7 = '/assets/peta_klasifikasi/purwakarta/data/Awan_7.png';
var img_bounds_Awan_7 = [[-6.776890503,107.220307198],[-6.407952533,107.602180905]];
var layer_Awan_7 = new L.imageOverlay(img_Awan_7,
                                      img_bounds_Awan_7,
                                      {pane: 'pane_Awan_7'});
bounds_group.addLayer(layer_Awan_7);
map.addLayer(layer_Awan_7);
function pop_Purwakarta_8(feature, layer) {
    layer.on({
        mouseout: function(e) {
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
                <td colspan="2">' + (feature.properties['nmkec'] !== null ? autolinker.link(feature.properties['nmkec'].toLocaleString()) : '') + '</td>\
            </tr>\
        </table>';
    layer.bindPopup(popupContent, {maxHeight: 400});
}

function style_Purwakarta_8_0() {
    return {
        pane: 'pane_Purwakarta_8',
        opacity: 1,
        color: 'rgba(0,0,0,1.0)',
        dashArray: '',
        lineCap: 'butt',
        lineJoin: 'miter',
        weight: 2.0, 
        fillOpacity: 0,
        interactive: true,
    }
}
map.createPane('pane_Purwakarta_8');
map.getPane('pane_Purwakarta_8').style.zIndex = 408;
map.getPane('pane_Purwakarta_8').style['mix-blend-mode'] = 'normal';
var layer_Purwakarta_8 = new L.geoJson(json_Purwakarta_8, {
    attribution: '',
    interactive: true,
    dataVar: 'json_Purwakarta_8',
    layerName: 'layer_Purwakarta_8',
    pane: 'pane_Purwakarta_8',
    onEachFeature: pop_Purwakarta_8,
    style: style_Purwakarta_8_0,
});
bounds_group.addLayer(layer_Purwakarta_8);
map.addLayer(layer_Purwakarta_8);
var baseMaps = {};
L.control.layers(baseMaps,{'<img src="/assets/peta_klasifikasi/purwakarta/legend/awan.png" /> : Awan ' : layer_Awan_7, '<img src="/assets/peta_klasifikasi/purwakarta/legend/sawah.jpg" /> : Sawah ': layer_Sawah_6,'<img src="/assets/peta_klasifikasi/purwakarta/legend/bera.jpg" /> : Bera ' : layer_Bera_5, '<img src="/assets/peta_klasifikasi/purwakarta/legend/lahanterbangun.jpg" /> : Lahan Terbangun ' : layer_LahanTerbangun_4, '<img src="/assets/peta_klasifikasi/purwakarta/legend/hutan.jpg" /> : Hutan' : layer_Hutan_3, '<img src="/assets/peta_klasifikasi/purwakarta/legend/badanair.jpg" /> : Badan Air ' : layer_BadanAir_2, '<img src="/assets/peta_klasifikasi/purwakarta/legend/lahankosong.jpg" /> : Lahan Kosong Non-Vegetatif ' : layer_LahanKosongNonVegetatif_1, "Purwakarta" : layer_Purwakarta_8, "Google Terrain": layer_GoogleTerrain_0,},{collapsed:false}).addTo(map);
setBounds();
L.ImageOverlay.include({
    getBounds: function () {
        return this._bounds;
    }
});
const map = L.map('map').setView([37.988,137.834], 5);
const osmLayer = L.tileLayer('http://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors',
    maxZoom: 20});

map.addLayer(osmLayer);

var catIcon = L.icon({
    iconUrl: 'build/luckycat.png',

    iconSize: [40, 40],
    iconAnchor: [20, 40],
    popupAnchor: [0, -20],
});
var markerTokyo = L.marker([35.6840,139.7613], {icon: catIcon} ).addTo(map);
markerTokyo.bindPopup("<h5>Tokyo</h5>");

var markerOdaiba = L.marker([35.626722,139.7721007], {icon: catIcon}).addTo(map);
markerOdaiba.bindPopup("<h5>Odaiba</h5>");

var markerOsaka = L.marker([34.6198813,135.490357], {icon: catIcon}).addTo(map);
markerOsaka.bindPopup("<h5>Osaka</h5>");

var markerKyoto = L.marker([35.021041,135.7556075], {icon:catIcon}).addTo(map);
markerKyoto.bindPopup("<h5>Kyoto</h5>");

var markerHiroshima = L.marker([34.3916058,132.4518156], {icon:catIcon}).addTo(map);
markerHiroshima.bindPopup("<h5>Hiroshima</h5>")

var markerNara = L.marker([34.2963089,135.8816819], {icon:catIcon}).addTo(map);
markerNara.bindPopup("<h5>Nara</h5>")

var markerHakone = L.marker([35.214483,139.0019966], {icon: catIcon}).addTo(map);
markerHakone.bindPopup("<h5>Hakone</h5>")

var markerKamakura = L.marker([], {icon: catIcon}).addTo(map);
markerKamakura.bindPopup("<h5>Kamakura</h5>")

var markerAsakusa = L.marker([35.7175966,139.7975626], {icon: catIcon}).addTo(map);
markerAsakusa.bindPop("<h5>Asakusa</h5>")

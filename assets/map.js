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
var marker = L.marker([35.6840,139.7613], {icon: catIcon} ).addTo(map);
marker.bindPopup("<h5>I'm a lucky cat !</h5>");

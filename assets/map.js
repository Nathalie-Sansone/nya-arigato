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
markerTokyo.bindPopup("<h5>Tokyo</h5><img src='https://ds1.static.rtbf.be/article/image/1248x702/8/5/6/istock_155383524.2967e110302.original.jpg' width='150px'>");

var markerOdaiba = L.marker([35.626722,139.7721007], {icon: catIcon}).addTo(map);
markerOdaiba.bindPopup("<h5>Odaiba</h5><img src='https://nippon-touch.com/wp-content/uploads/Gundam-Odaiba.jpg' width='150px'>");

var markerOsaka = L.marker([34.6198813,135.490357], {icon: catIcon}).addTo(map);
markerOsaka.bindPopup("<h5>Osaka</h5><img src='https://www.leblogdesarah.com/wp-content/uploads/2021/02/osaka-dotombori-enseignes-1024x680.jpg' width='150px'>");

var markerKyoto = L.marker([35.021041,135.7556075], {icon:catIcon}).addTo(map);
markerKyoto.bindPopup("<h5>Kyoto</h5><img src='https://cdn.omni-links.com/eurex/136779b1-ddce-44ba-8e53-7d4651ab68d7.jpg' width='150px'>");

var markerHiroshima = L.marker([34.3916058,132.4518156], {icon:catIcon}).addTo(map);
markerHiroshima.bindPopup("<h5>Hiroshima</h5><img src='https://www.planetware.com/photos-large/JPN/japan-hiroshima-peace-memorial-park-3.jpg' width='150px'>")

var markerNara = L.marker([34.2963089,135.8816819], {icon:catIcon}).addTo(map);
markerNara.bindPopup("<h5>Nara</h5><img src='https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Yakushiji_Nara03s3s4350.jpg/1200px-Yakushiji_Nara03s3s4350.jpg' width='150px'>")

var markerHakone = L.marker([35.214483,139.0019966], {icon: catIcon}).addTo(map);
markerHakone.bindPopup("<h5>Hakone</h5><img src='https://media.routard.com/image/91/3/photo-basa-1.1455913.w740.jpg' width='150px'>")

var markerKamakura = L.marker([35.329564,139.54442], {icon: catIcon}).addTo(map);
markerKamakura.bindPopup("<h5>Kamakura</h5><img src='https://d1nwfvw9iqnfnz.cloudfront.net/filters:autojpg()/filters:quality(80)/fit-in/800x800/gowithguide/profiles/6018/85464.jpg' width='150px'>")

var markerSapporo = L.marker([43.061936,141.3542924], {icon: catIcon}).addTo(map);
markerSapporo.bindPopup("<h5>Sapporo</h5><img src='https://www.nipponconnection.fr/wp-content/uploads/2015/02/03.jpg' width='150px'>")

var markerAsakusa = L.marker([35.7175966,139.7975626], {icon: catIcon}).addTo(map);
markerAsakusa.bindPopup("<h5>Asakusa</h5><img src='https://mywowo.net/media/images/cache/tokyo_tempio_buddista_senso_ji_01_introduzione_jpg_1200_630_cover_85.jpg' width='150px'>")

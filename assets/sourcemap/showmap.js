var map = L.map('map').setView([-2.556884820881381,140.46266563281256], 7);

    L.tileLayer('https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=G2IbtGpTNFctQvmZhidF', {
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',

    }).addTo(map);
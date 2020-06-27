var platform = new H.service.Platform({
    apikey: '-nf2-oAm6Qlx1NesPZsJIW_EEytn7miYOT18obZK7fc'
});
var defaultLayers = platform.createDefaultLayers();

var LocationOfMap = { lat: -33.4435774, lng: -70.6509487 };

var map = new H.Map(document.getElementById('mapContainer'),
    defaultLayers.vector.normal.map,
    {
        center: LocationOfMap,
        zoom: 13,
        pixelRatio: window.devicePixelRatio || 1
    }
);

let gLat,gLng;

var svg = `<svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" width="10px" height="10px">
<circle cx="5" cy="5" r="4" fill="rgb(250, 127, 0)" stroke-width="1" stroke="black" opacity="1"/>
</svg>`;
var domIcon = new H.map.DomIcon(svg);

var ui = H.ui.UI.createDefault(map, defaultLayers);
var service = platform.getSearchService();

document.getElementById('buttonGeo').addEventListener('click', geoReferencia);


function geoReferencia(e){
    e.preventDefault();

    
    navigator.geolocation.getCurrentPosition(function(loc) {
        LocationOfMap = { lat: loc.coords.latitude, lng: loc.coords.longitude };
        map.setCenter(LocationOfMap);
        var marker = new H.map.DomMarker(LocationOfMap,{icon:domIcon});
        map.addObject(marker);

        // service.reverseGeocode({
        //     at: LocationOfMap.lat+","+LocationOfMap.lng
        //   }, (result) => {
        //     result.items.forEach((item) => {
        //       ui.addBubble(new H.ui.InfoBubble(item.position, {
        //         content: item.address.label
        //       }));
        //     });
        //   }, alert);
    });
}





var platform = new H.service.Platform({
    apikey: '-nf2-oAm6Qlx1NesPZsJIW_EEytn7miYOT18obZK7fc'
});
var defaultLayers = platform.createDefaultLayers();
//Step 2: initialize a map - this map is centered over Europe
var LocationOfMap = { lat: -33.4295774, lng: -70.6489487 };

var map = new H.Map(document.getElementById('mapContainer'),
    defaultLayers.vector.normal.map,
    {
        center: LocationOfMap,
        zoom: 16.5,
        pixelRatio: window.devicePixelRatio || 1
    }
);



function svg(r,g,b){
  return `<svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" width="14px" height="14px">
  <circle cx="7" cy="7" r="7" fill="rgb(${r}, ${g}, ${b})" stroke-width="1" stroke="black" opacity="1"/>
  </svg>`;
}

var ui = H.ui.UI.createDefault(map, defaultLayers);
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

var centro = new H.geo.Point(LocationOfMap.lat, LocationOfMap.lng);


for (let i = 0; i < 100; i++) {

  var randomPoint = centro.walk(Math.random() * 360, Math.random() * 3000);
  
  if(i<60){
    map.addObject( new H.map.DomMarker(randomPoint, {icon: new H.map.DomIcon(svg(255,0,0))}));
  } else if (i>60 && i<80){
    map.addObject( new H.map.DomMarker(randomPoint, {icon: new H.map.DomIcon(svg(255,255,0))}));
  } else {
    map.addObject( new H.map.DomMarker(randomPoint, {icon: new H.map.DomIcon(svg(0,255,0))}));
  }
  
}
/**
 * Create markers
 */

function createMarkers(coordenadas) {
    // create SVG Dom Icon
    var svg = `<svg xmlns="http://www.w3.org/2000/svg" class="svg-icon" width="10px" height="10px">
        <circle cx="5" cy="5" r="4" fill="rgb(250, 127, 0)" stroke-width="1" stroke="black" opacity="1"/>
        </svg>`,
    domIcon = new H.map.DomIcon(svg),
    markers = [],
    // array of initial positions of 40 markers

    // -70.7166667, lng: -33.6000000

    initialPositions = coordenadas;

    // create markers
    initialPositions.forEach(function(pos) {
        markers.push(
            new H.map.DomMarker(
                { lat: pos.lat, lng: pos.lng },
                {
                    icon: domIcon
                }
            )
        );
    });

    // add markers to map
    map.addObjects(markers);
}

/**
 * Boilerplate map initialization code starts below:
 */

// set up containers for the map  + panel
var mapContainer = document.getElementById("map"),
    routeInstructionsContainer = document.getElementById("panel");

//Step 1: initialize communication with the platform
// In your own code, replace variable window.apikey with your own apikey
var platform = new H.service.Platform({
    apikey: window.apikey
});

var defaultLayers = platform.createDefaultLayers();

//Step 2: initialize a map - this map is centered over Berlin
var map = new H.Map(mapContainer, defaultLayers.vector.normal.map, {
    center: { lat: -33.4718, lng: -70.6414 },
    zoom: 11,
    pixelRatio: window.devicePixelRatio && window.devicePixelRatio > 1 ? 2 : 1
});
// add a resize listener to make sure that the map occupies the whole container
window.addEventListener("resize", function() {
    map.getViewPort().resize();
});

//Step 3: make the map interactive
// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

// Create the default UI components
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now create markers and set interval to update their positions with animation.

fetch("/api/regiones")
    .then(resp => {
        return resp.json();
    })
    .then(result => createMarkers(result.Metropolitana));

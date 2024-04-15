var markers = [];

function InitializeLocationPicker($map, latitude, longitude, zoomLevel) {
    var parent = $map.parent().parent().parent();
    $map.locationpicker({
        radius: 0,
        zoom: zoomLevel || 15,
        markerVisible: false,
        location: { latitude: latitude, longitude: longitude },
        inputBinding: {
            latitudeInput: parent.find('#Latitude'),
            longitudeInput: parent.find('#Longitude'),
            locationNameInput: parent.find('#Location')
        },
        enableAutocomplete: true,
        onchanged: function (currentLocation, radius, isMarkerDropped) {
            console.log(markers);
            for (var i = 0; i < markers.length; i++) {
                markers[i].setMap(null);
            }
            markers = [];
            
        }
    });

}
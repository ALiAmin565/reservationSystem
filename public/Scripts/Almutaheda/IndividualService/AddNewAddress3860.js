var map;
var poly;
debugger
load_district();
var district_id = $(".districtval").val();

var Ispoly = false;
var langu = "ar";
var IsClick = false;
var validation = false;
var IsSelected = false;
var loactionclicked = false;



$(function () {


    var divClone = $("#AreaMap").clone();
    $('#DistrictId').change(function () {
        if ($("#DistrictId").val() != "") {
            district_id = $("#DistrictId").val();
        }
        
        $("#districtValidation").attr("hidden", true);
        debugger
        var districtid = "";
        if (district_id != null && district_id != "") {
            districtid = district_id;
            $("#DistrictId").click();
            //$("#DistrictId").select2(("#DistrictId").val());            

        }
        else {
            districtid = $(this).val();
        }
        if (districtid != null && districtid != "") {


            $.ajax({
                method: 'POST',
                url: '/IndvContReq/GetPolygon/' + districtid,
                dataType: 'json',
                success: function (data) {
                    console.log(data);
                    $("#AreaMap").replaceWith(divClone.clone());

                    $('#locationmap').css('display', '');

                    debugger
                    if (data != null && data != "") {
                        Ispoly = true;
                        paintpolygon(data);
                        var selectedtext = $("#DistrictId").find(':selected').text();
                        $("#select2-DistrictId-container").text(selectedtext);
                    }
                    else {
                        Ispoly = false;
                        initMap();
                        var selectedtext = $("#DistrictId").find(':selected').text();
                        $("#select2-DistrictId-container").text(selectedtext);
                    }
                }
            });
        }
    });




    $('.custom-select').select2();
    $(".numeric").numeric({ negative: false, decimal: false });

    $(document).on('change', '.custom-select', function () {
        debugger
        if ($(this).val()) {
            $('[data-valmsg-for="' + $(this).attr('name') + '"]').text('');
        }
    });





    $('input[name="select-location"]').change(function () {
        $("#locationaddress").attr("hidden", true);
    });

    $('select-location').change(function () {
        $("#locationaddress").attr("hidden", true);
    });

    $('#CityId').change(function () {

        $("#CityValidation").attr("hidden", true);
    });


    $('#SendLocationBtn').click(function () {
        loactionclicked = true;
        $("#locationmap").css('display', '');
    });


    $('.custom-select').select2();
    $('#HouseType, #FloorNo').change(function () {
        debugger;
        if ($('#HouseType').val() == 0) {
            $("#appatmentDiv").hide();
        }
        else {
            $("#appatmentDiv").show();
        }
        if ($(this).val()) {
            $('[data-valmsg-for="' + $(this).attr('name') + '"]').text('');
        }
    });

    if ($('#HouseType').val() == 0) {
        debugger;
        $("#appatmentDiv").hide();
    }

    $('#NextBtn').click(function (e) {
        debugger
        IsClick = true;
        var isValid = true;
        
        e.preventDefault();

       
             $("#StepType").val("1");
            if ($('#CityId').val() == "" || $('#CityId').val() == null) {
                $('#CityValidation').removeAttr('hidden');
                isValid = false;
            }

            if ($('#DistrictId').val() == "" || $('#DistrictId').val() == null) {
                $('#districtValidation').removeAttr('hidden');
                isValid = false;
            }

           

            debugger;
            if ($('#select2-HouseType-container').text() == 'اختر...') {
                $('#HomeTypeValidation').removeAttr('hidden');
                isValid = false;
            }
            else {
                $('#HomeTypeValidation').attr('hidden', true);

            }
            if ($('#select2-FloorNo-container').text() == 'اختر...') {
                $('#FloorValidation').removeAttr('hidden');
                isValid = false;
            }
            else {
                $('#FloorValidation').attr('hidden', true);

            }
            if ($('#HouseNo').val() == 'لا يوجد' || $('#HouseNo').val() == '') {
                $('#HomeNoValidation').removeAttr('hidden');
                isValid = false;
            }
            else {
                $('#HomeNoValidation').attr('hidden', true);

            }

            $('#HouseNo').change(function () {
                $("#HomeNoValidation").attr("hidden", true);
            });
            $('#HouseType').change(function () {

                $("#HomeTypeValidation").attr("hidden", true);
            });

            $('#FloorNo').change(function () {

                $("#FloorValidation").attr("hidden", true);
            });

            $('#PartmentNumber').change(function () {

                $("#housingNoValidation").attr("hidden", true);
            });


        if ($("#appatmentDiv").is(':visible')) {
            debugger;
                if ($('#PartmentNumber').val() == '' || $('#PartmentNumber').val() == '0') {
                    $('#housingNoValidation').removeAttr('hidden');
                    isValid = false;
                }

                else {
                    $('#housingNoValidation').attr('hidden', true);

                }
            }


            if (isValid == false && validation == false) {
                $('#locationaddress').removeAttr('hidden');
            }
            else {
                $('#houseNoValidation').attr('hidden', true);
            }



        if (isValid) {
            $("#StepType").val("1");
            $('#IndvContractReqForm').submit();
        }

        

       
    });

    $('#previousBtn').click(function (e) {
        debugger;
        e.preventDefault();
        IsClick = true;
        $('#IndvContractReqForm').removeData('validator');
        $('#IndvContractReqForm').removeData('unobtrusiveValidation');
        $('#StepType').val($(this).val());
        $("#IndvContractReqForm").validate().cancelSubmit = true;
        $('#IndvContractReqForm').submit();
    });





});

$('#CityId').change(function () {
    debugger
    if ($('#CityId').val()) {
        $.get("/IndvContReq/GetDistrictsByCity", { cityId: $('#CityId').val() }, function (res) {
            $("#DistrictId").empty();
            $("#DistrictId").append(new Option("اختر...", '', true, true)).trigger('change');
            $("#DistrictId").select2({ data: res });
        });
    }
    else {
        $("#DistrictId").empty();
        $("#DistrictId").append(new Option("اختر...", '', true, true)).trigger('change');
    }

});



function load_district() {

    debugger

    if ($('#CityId').val()) {
        $("#DistrictId").empty();
        $.get("/IndvContReq/GetDistrictsByCity", { cityId: $('#CityId').val() }, function (res) {

            if (district_id == null || district_id == "") {

                $("#DistrictId").append(new Option("اختر...", '', true, true)).trigger('change');
            }
            $("#DistrictId").select2({ data: res });
            var district_id = $(".districtval").val();
            $("#DistrictId").val(district_id);

        });

    }
    else {
        $("#DistrictId").empty();
        $("#DistrictId").append(new Option("اختر...", '', true, true)).trigger('change');
    }
}





function CenterControl(controlDiv) {
    var controlUI = document.createElement('div');
    controlUI.style.backgroundColor = '#fff';
    controlUI.style.border = '2px solid #fff';
    controlUI.style.borderRadius = '3px';
    controlUI.style.boxShadow = '0 2px 6px rgba(0,0,0,.3)';
    controlUI.style.cursor = 'pointer';
    controlUI.style.marginBottom = '22px';
    controlUI.style.textAlign = 'center';
    controlUI.id = 'currentLoc';
    if (langu === "ar") {
        controlUI.title = 'اضغط لتحديد موقعك';
    }
    else {
        controlUI.title = 'Click to select your location';
    }
    controlDiv.appendChild(controlUI);
    var controlText = document.createElement('div');
    controlText.style.color = 'rgb(25,25,25)';
    controlText.style.fontFamily = 'Roboto,Arial,sans-serif';
    controlText.style.fontSize = '16px';
    controlText.style.lineHeight = '38px';
    controlText.style.paddingLeft = '5px';
    controlText.style.paddingRight = '5px';
    if (langu === "ar") {
        controlText.innerHTML = 'تحديد موقعى الحالى <i class="fa fa-crosshairs"></i>';
    }
    else {
        controlText.innerHTML = 'Determine your current location<i class="fa fa-crosshairs"></i>';
    }
    controlUI.appendChild(controlText);
    controlUI.addEventListener('click', function () {
        clearMarkers();
        getCurrentLocation();
    });
}

var geocoder = new google.maps.Geocoder;

function getCurrentLocation() {
    navigator.geolocation.getCurrentPosition(function (location) {
        $("#Latitude").val(location.coords.latitude);
        $("#Longitude").val(location.coords.longitude);
        $('#LatLngValidation').prop('hidden', true);
        $('#AreaMap').locationpicker({
            location: {
                latitude: location.coords.latitude,
                longitude: location.coords.longitude
            },
            radius: 0
        });
        // var geocoder = new google.maps.Geocoder;
        geocodeLatLng(geocoder, map, location.coords.latitude, location.coords.longitude);
    }, function () {
        $('#LocationValidation').removeAttr('hidden');
    });
    $('#AreaMap').locationpicker('map').map.setZoom(17);
}



function initMap() {

    debugger
    var lat1 = 0;
    var lng1 = 0;

    if (lat1 == 0 && lng1 == 0) {
        if ($('#Latitude').val() && $('#Longitude').val()) {
            lat1 = parseFloat($('#Latitude').val());
            lng1 = parseFloat($('#Longitude').val());
            setLatLng($('#Latitude').val(), $('#Longitude').val(), false);
        }
        else {
            navigator.geolocation.getCurrentPosition(function (data) {
                setLatLng(data.coords.latitude, data.coords.longitude);
            }, function () {
                setLatLng(24.7136, 46.6753, true);
                $('#LocationValidation').removeAttr('hidden');
            });
        }
    }
}



function setLatLng(lat1, lng1, isDefault) {
    debugger
    InitializeLocationPicker($("#AreaMap"), lat1, lng1);
    map = $('#AreaMap').locationpicker('map').map;
    // var geocoder = new google.maps.Geocoder;
    geocodeLatLng(geocoder, map, lat1, lng1);

    var centerControlDiv = document.createElement('div');
    var centerControl = new CenterControl(centerControlDiv);

    centerControlDiv.index = 1;
    map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(centerControlDiv);


    if (!$('#Latitude').val() && !$('#Longitude').val()) {
        getCurrentLocation();
    }
    else {
        $('#AreaMap').locationpicker('map').map.setZoom(17);
    }

    google.maps.event.addListener(map, 'click', function (event) {
        $("#Latitude").val(event.latLng.lat());
        $("#Longitude").val(event.latLng.lng());
        $('#LatLngValidation').prop('hidden', true);
        $('#AreaMap').locationpicker({
            location: {
                latitude: event.latLng.lat(),
                longitude: event.latLng.lng()
            },
            radius: 0
        });
        // var geocoder = new google.maps.Geocoder;
        geocodeLatLng(geocoder, map, event.latLng.lat(), event.latLng.lng());
        $('#AreaMap').locationpicker('map').map.setZoom(17);
    });

    if (!isDefault) {
        $('#Latitude').val(24.7136);
        $('#Longitude').val(46.6753);
    }
}


function geocodeLatLng(geocoder, map, latitude, longitude) {
    var latlng = { lat: parseFloat(latitude), lng: parseFloat(longitude) };
    geocoder.geocode({ 'location': latlng }, function (results, status) {
        if (status === 'OK') {
            if (results[0]) {
                $("#Location").val(results[0].formatted_address);
            } else {
                window.alert('No results found');
            }
        } else {
            //window.alert('Geocoder failed due to: ' + status);
        }
    });
}

function clearMarkers() {
    for (var i = 0; i < this.markers.length; i++) {
        this.markers[i].setMap(null);
    }
    this.markers = new Array();
}


window.onbeforeunload = function () {
    debugger
    if (IsClick == false) {
        return 'هل أنت متأكد من مغادرة هذه الصفحة ؟';
    }
};


function paintpolygon(shap) {
    debugger

    shap = shap.replace(', ]', '').replace('[ ', '').replace(/ /g, '').replace(/' , '/, ',');
    shaplist = shap.split(',');
    var triangleCoords = [];
    var count = shaplist.length / 2;
    for (var i = 0; i < shaplist.length; i += 2) {
        triangleCoords.push({ lat: parseFloat(shaplist[i]), lng: parseFloat(shaplist[i + 1]) });
    }

    var lat1 = triangleCoords[0].lat;
    var lng1 = triangleCoords[triangleCoords.length - 1].lng;
    setLatLngPolygon(lat1, lng1, true);


    poly = new google.maps.Polygon({
        map: map,
        paths: triangleCoords,
        strokeColor: '#FF0000',
        strokeOpacity: 0.8,
        strokeWeight: 2,
        fillColor: '#FF0000',
        fillOpacity: 0.1

    });



    debugger
    poly.setMap(map);




    google.maps.event.addListener(map, 'click', function (event) {
        alert('لا يمكنك تحديد هذا الموقع حيث أنه خارج نظاق الحي');
        return;
    });
    google.maps.event.addListener(poly, 'click', function (event) {
        $("#Latitude").val(event.latLng.lat());
        $("#Longitude").val(event.latLng.lng());
        $('#LatLngValidation').prop('hidden', true);
        $('#AreaMap').locationpicker({
            location: {
                latitude: event.latLng.lat(),
                longitude: event.latLng.lng()
            },
            radius: 0,
        });
        geocodeLatLng(geocoder, map, event.latLng.lat(), event.latLng.lng());
        $('#AreaMap').locationpicker('map').map.setZoom(13);
    });
}

function setLatLngPolygon(lat1, lng1, isDefault) {
    debugger
    InitializeLocationPicker($("#AreaMap"), lat1, lng1);
    map = $('#AreaMap').locationpicker('map').map;
    // var geocoder = new google.maps.Geocoder;
    geocodeLatLng(geocoder, map, lat1, lng1);

    marker = new google.maps.Marker({
        draggable: false,
        animation: google.maps.Animation.DROP,
        map: map
    });
    //var centerControlDiv = document.createElement('div');
    //var centerControl = new CenterControl(centerControlDiv);

    //centerControlDiv.index = 1;
    //map.controls[google.maps.ControlPosition.BOTTOM_CENTER].push(centerControlDiv);

    $('#AreaMap').locationpicker('map').map.setZoom(13);

    if (!isDefault) {
        $('#Latitude').val(24.7136);
        $('#Longitude').val(46.6753);
    }
}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title><?= $title; ?></title>

    <link rel="icon" type="image/png" href="<?= base_url('assets/') ?>img/kominfo.png" />
    <link href="<?= base_url('vendor/sbadmin/dist/'); ?>css/styles.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <!-- form wizard -->
    <link href="<?= base_url('vendor/admin_bite/') ?>assets/libs/jquery-steps/jquery.steps.css" rel="stylesheet">
    <link href="<?= base_url('vendor/admin_bite/') ?>assets/libs/jquery-steps/steps.css" rel="stylesheet"> <!-- //// -->

    <!-- Fonts -->
    <link href="<?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- form js -->
    <script src="<?= base_url('assets/js/') ?>jquery.min.js"></script>

    <!-- maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpfSX0gCK25NXXgO7v_hKQO0aEXN09qE0&callback=initialize"></script>
    <script type="text/javascript">
        var marker;
        var latlng;

        function initialize() {
            var myLatlng = new google.maps.LatLng(-0.02563068, 109.338767);
            var myOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById("googleMap"), myOptions);
            map.addListener('click', function(event) {
                addMarker(event.latLng, 'Click Generated Marker', map);
            });
            // Create the DIV to hold the control and call the constructor passing in this DIV
            var geolocationDiv = document.createElement('div');
            var geolocationControl = new GeolocationControl(geolocationDiv, map);
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(geolocationDiv);

            function GeolocationControl(controlDiv, map) {
                // Set CSS for the control button
                var controlUI = document.createElement('div');
                controlUI.style.backgroundColor = '#444';
                controlUI.style.borderStyle = 'solid';
                controlUI.style.borderWidth = '1px';
                controlUI.style.borderColor = 'white';
                controlUI.style.height = '28px';
                controlUI.style.marginTop = '5px';
                controlUI.style.cursor = 'pointer';
                controlUI.style.textAlign = 'center';
                controlUI.title = 'Click to center map on your location';
                controlDiv.appendChild(controlUI);
                // Set CSS for the control text
                var controlText = document.createElement('div');
                controlText.style.fontFamily = 'Arial,sans-serif';
                controlText.style.fontSize = '10px';
                controlText.style.color = 'white';
                controlText.style.paddingLeft = '10px';
                controlText.style.paddingRight = '10px';
                controlText.style.marginTop = '8px';
                controlText.innerHTML = 'Center map on your location';
                controlUI.appendChild(controlText);
                // Setup the click event listeners to geolocate user
                google.maps.event.addDomListener(controlUI, 'click', geolocate);
            }

            function geolocate() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                        if (marker) {
                            marker.setPosition(pos);
                        } else {
                            marker = new google.maps.Marker({
                                position: pos,
                                map: map,
                                animation: google.maps.Animation.DROP,
                                draggable: true
                            });
                        }
                        // isi nilai koordinat ke form
                        document.getElementById("lat").value = String(pos.lat()).substr(0, 11);
                        document.getElementById("lng").value = String(pos.lng()).substr(0, 11);
                        marker.addListener('drag', function(event) {
                            $('#lat').val(event.latLng.lat());
                            $('#lng').val(event.latLng.lng());
                        });
                        marker.addListener('dragend', function(event) {
                            $('#lat').val(event.latLng.lat());
                            $('#lng').val(event.latLng.lng());
                        });
                        map.setCenter(pos);
                    });
                }
            }
        }

        function addMarker(latlng, title, map) {
            if (marker) {
                marker.setPosition(latlng);
            } else {
                marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    title: title,
                    draggable: true
                });
            }
            // isi nilai koordinat ke form
            document.getElementById("lat").value = String(latlng.lat()).substr(0, 11);
            document.getElementById("lng").value = String(latlng.lng()).substr(0, 11);
            marker.addListener('drag', function(event) {
                $('#lat').val(event.latLng.lat());
                $('#lng').val(event.latLng.lng());
            });
            marker.addListener('dragend', function(event) {
                $('#lat').val(event.latLng.lat());
                $('#lng').val(event.latLng.lng());
            });
        }
    </script>
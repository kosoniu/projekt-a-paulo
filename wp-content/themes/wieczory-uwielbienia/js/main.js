$(document).ready(function() {

  $('.hamburger').on('click', function() {
    console.log(this);
    $(this).toggleClass('is-active');
    $('.menu').toggleClass('active-menu')
  });




});

function initMap() {
       var uluru = {lat: 50.0711695, lng: 19.9129386};
       var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 17,
         center: uluru,
         styles:[
    {
        "featureType": "poi.attraction",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#0095b3"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "invert_lightness": false
            },
            {
                "color": "#80c3d1"
            },
            {
                "saturation": -2
            },
            {
                "lightness": 0
            },
            {
                "gamma": 1.09
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#d4d0d4"
            }
        ]
    }
]
       });
       var marker = new google.maps.Marker({
         position: uluru,
         map: map
       });
     }

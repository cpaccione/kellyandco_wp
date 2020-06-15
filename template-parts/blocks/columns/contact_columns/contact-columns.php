<?php

/**
 * Contact Column Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'contact-columns-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'contact-columns';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$contact_title = get_field('title_one');
$contact_title_two = get_field('title_two');
$link = get_field('link');

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="col">
        <h3><?php echo $contact_title; ?></h3>

            <?php if( have_rows('address_repeater') ): ?>

                <?php while( have_rows('address_repeater') ): the_row(); 

                    // vars
                    $add_one = get_sub_field('address_line_one');
                    $add_two = get_sub_field('address_line_two');
                    $phone = get_sub_field('phone_number');

                    ?>

                    <div class="address">
                        <p class="line-one"><?php echo $add_one; ?></p>
                        <p class="line-two"><?php echo $add_two; ?></p>
                        <a href="tel:<?php echo $phone; ?>"><i class="fas fa-phone-alt"></i> <?php echo $phone; ?></a>
                    </div>

                <?php endwhile; ?>

            <?php endif; ?>

        <h3><?php echo $contact_title_two; ?></h3>

        <?php
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="email" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><i class="fas fa-envelope"></i> <?php echo esc_html( $link_title ); ?></a>

        <?php endif; ?>
    </div>
    <div class="col">
        <div id="googleMap" style="width:100%; height: 600px;"></div>

        <script>
        function myMap() {
            
        const myLatLng = {
            lat: 40.760409,
            lng: -73.9820788
        };


        const mapProp= {
            center: myLatLng,
            zoom: 10,
            disableDefaultUI: true,
            styles:[
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#003821"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
        };

        const map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

        const contentString = '<div id="map-info">'+
        '<p>Kelly and Company</p>'+
        '<a href="https://www.google.com/maps/place/1350+6th+Ave+Fl+2,+New+York,+NY+10019/@40.7625614,-73.9799923,17z/data=!3m1!4b1!4m5!3m4!1s0x89c258f98fb5db9f:0x3b07a3bb67d72ff8!8m2!3d40.7625614!4d-73.9777983" target="_blank">Get directions.</a>'+
        '</div>';

        const infowindow = new google.maps.InfoWindow({
            content: contentString
        });

        const marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Kelly and Company, New York, NY'
        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        }



        </script>
    </div>
</div>
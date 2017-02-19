<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
   xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/normalize.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/fonts/SourceSansPro/source-sans-pro.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/font-awesome/css/font-awesome.min.css" type="text/css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slick/slick-theme.css"/>
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
	</head>
	<body>
		<header>
			<nav class="container">
				<jdoc:include type="modules" name="header-contacts" />			
				<div class="separator"></div>	
				<input type="checkbox" id="mobile-menu-toggle">
				<label for="mobile-menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></label>
				<jdoc:include type="modules" name="global-menu" />				
			</nav>
		</header>
		<main>
			<jdoc:include type="modules" name="promo" /> 
			<div class="container">
				<jdoc:include type="modules" name="logo" />
				<jdoc:include type="modules" name="feature" /> 
				<jdoc:include type="component" />
				<jdoc:include type="modules" name="subcribe" /> 
			</div>
		</main>
		<footer>
			<div class="container">
				<section class="sub">
					<h3>Подпишитесь на&nbsp;новости</h3>
					<p>Получайте информацию о&nbsp;наших акциях и&nbsp;специальных предложениях</p>
					<jdoc:include type="modules" name="footer-subcribe" />
				</section>
				<section class="copyright">
					<p><img src="images/logo-m.jpg" alt="glan-nails.ru" /></p>
					<p>Сделано c <i class="fa fa-heart" aria-hidden="true"></i> в Москве © 2014</p>
				</section>
				<section class="book">
					<jdoc:include type="modules" name="footer" />
				</section>
			</div>
		</footer>
		<jdoc:include type="modules" name="modals" />
	</body>
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/slick/slick.min.js"></script>
    <script type="text/javascript">

    function initMap() {
        var centermap = {lat: 55.6550293, lng: 37.7562537};
        var mari = {lat: 55.6499008, lng: 37.7696935};
        var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 15,
                      center: mari,
                      styles:[
                            {
                                    "elementType": "labels.icon",
                                            "stylers": [
                                                      {
                                                                  "visibility": "on"
                                                                            }
                                        ]
                                              },
                                                    {
                                                            "featureType": "administrative",
                                                                    "stylers": [
                                                                              {
                                                                                          "visibility": "off"
                                                                                                    }
                                                                ]
                                                                      },
                                                                        {
                                                                                "featureType": "landscape",
                                                                                        "stylers": [
                                                                                                  {
                                                                                                              "color": "#ffffff"
                                                                                                                        }
                                                                                    ]
                                                                                          },
                                                                                            {
                                                                                                    "featureType": "landscape.man_made",
                                                                                                            "stylers": [
                                                                                                                      {
                                                                                                                                  "visibility": "off"
                                                                                                                                            }
                                                                                                        ]
                                                                                                              },
                                                                                                                {
                                                                                                                        "featureType": "poi.attraction",
                                                                                                                                "stylers": [
                                                                                                                                          {
                                                                                                                                                      "visibility": "off"
                                                                                                                                                                }
                                                                                                                            ]
                                                                                                                                  },
                                                                                                                                    {
                                                                                                                                            "featureType": "poi.business",
                                                                                                                                                    "stylers": [
                                                                                                                                                              {
                                                                                                                                                                          "color": "#e5c48c"
                                                                                                                                                                                    }
                                                                                                                                                ]
                                                                                                                                                      },
                                                                                                                                                        {
                                                                                                                                                                "featureType": "poi.business",
                                                                                                                                                                        "elementType": "labels.icon",
                                                                                                                                                                            "stylers": [
                                                                                                                                                                                      {
                                                                                                                                                                                                  "visibility": "on"
                                                                                                                                                                                                            }
                                                                                                                                                                    ]
                                                                                                                                                                          },
                                                                                                                                                                            {
                                                                                                                                                                                    "featureType": "poi.business",
                                                                                                                                                                                            "elementType": "labels.text.fill",
                                                                                                                                                                                                "stylers": [
                                                                                                                                                                                                          {
                                                                                                                                                                                                                      "color": "#b03841"
                                                                                                                                                                                                                                }
                                                                                                                                                                                        ]
                                                                                                                                                                                              },
                                                                                                                                                                                                {
                                                                                                                                                                                                        "featureType": "poi.business",
                                                                                                                                                                                                                "elementType": "labels.text.stroke",
                                                                                                                                                                                                                    "stylers": [
                                                                                                                                                                                                                              {
                                                                                                                                                                                                                                          "color": "#ffffff"
                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                            ]
                                                                                                                                                                                                                  },
                                                                                                                                                                                                                    {
                                                                                                                                                                                                                            "featureType": "poi.government",
                                                                                                                                                                                                                                    "stylers": [
                                                                                                                                                                                                                                              {
                                                                                                                                                                                                                                                          "visibility": "off"
                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                ]
                                                                                                                                                                                                                                      },
                                                                                                                                                                                                                                        {
                                                                                                                                                                                                                                                "featureType": "poi.medical",
                                                                                                                                                                                                                                                        "stylers": [
                                                                                                                                                                                                                                                                  {
                                                                                                                                                                                                                                                                              "visibility": "off"
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
                                                                            "color": "#888888"
                                                                                      }
                          ]
                                },
                                  {
                                          "featureType": "poi.place_of_worship",
                                                  "stylers": [
                                                            {
                                                                        "visibility": "off"
                                                                                  }
                          ]
                                },
                                  {
                                          "featureType": "poi.school",
                                                  "stylers": [
                                                            {
                                                                        "visibility": "off"
                                                                                  }
                          ]
                                },
                                  {
                                          "featureType": "poi.sports_complex",
                                                  "stylers": [
                                                            {
                                                                        "visibility": "off"
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
                                          "featureType": "road",
                                                  "elementType": "geometry.fill",
                                                      "stylers": [
                                                                {
                                                                            "color": "#726246"
                                                                                      }
                          ]
                                },
                                  {
                                          "featureType": "road",
                                                  "elementType": "labels.text",
                                                      "stylers": [
                                                                {
                                                                            "color": "#ffffff"
                                                                                      }
                          ]
                                },
                                  {
                                          "featureType": "road.arterial",
                                                  "elementType": "geometry.fill",
                                                      "stylers": [
                                                                {
                                                                            "color": "#b03841"
                                                                                      }
                          ]
                                },
                                  {
                                          "featureType": "road.arterial",
                                                  "elementType": "labels.text.fill",
                                                      "stylers": [
                                                                {
                                                                            "color": "#726246"
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
                                                  "elementType": "geometry.fill",
                                                      "stylers": [
                                                                {
                                                                            "color": "#726246"
                                                                                      },
                                                                                            {
                                                                                                        "lightness": 25
                                                                                                                  }
                          ]
                                },
                                  {
                                          "featureType": "road.local",
                                                  "elementType": "labels.text.fill",
                                                      "stylers": [
                                                                {
                                                                            "color": "#b03841"
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
                                                  "elementType": "labels.text.fill",
                                                      "stylers": [
                                                                {
                                                                            "color": "#444444"
                                                                                      }
                          ]
                                }
                      ]
                  });
        var marker = new google.maps.Marker({
                      position: mari,
                      map: map
                  });
        }


	jQuery(function($) {

        function hideModal(){
            $("body").removeClass("modal-lock");
            $(".modal").fadeOut();
        }

        function showModal(id){
            hideModal();
            $("body").addClass("modal-lock");
            $(id).fadeIn();
        }

		$(document).ready(function(){

            $('.promo').slick({
				autoplay: true,
				arrows:false,
				dots:true,
			});
            
            $('.salon').slick({
				autoplay: true,
				arrows:true,
				dots:true,
			});

			$('.portfolio').slick({
				autoplay: false,
				arrows:true,
				dots:false,
				fade:true,
				asNavFor: '.portfolio-nav',
				responsive:[
					{
						breakpoint: 767,
						settings:{
							arrows:false,
						}
					},
				],
			});
            
            $('.portfolio-nav').slick({
				slidesToShow: 5,
  				slidesToScroll: 1,
  				asNavFor: '.portfolio',
  				centerMode: true,
  				focusOnSelect: true,
				autoplay: true,
				arrows:false,
				dots:false,
				responsive:[
					{
						breakpoint: 767,
						settings:{
							slidesToShow: 3,
						}
					},
					{
						breakpoint: 559,
						settings:{
							slidesToShow: 2,
						}
					},
				],
            });


            $(".modal").click(function(){
                hideModal();
            });

            $("[role=modal] div").click(function(e){
                e.stopPropagation();
                return false;
            });
            
            $("a[role=show-modal] div").click(function(){
                console.log($(this));
                showModal($(this).data("target"));
            });
            
            $("[role=modal-close]").click(function(){
                hideModal();
            });
	});
});
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfJPMI9TtrxVQnTnE-wKG4qj24q3Uv2y0&language=ru&callback=initMap">
    </script>

</html>

{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
<script src ="/js/app.js"></script>
<script type="text/javascript">

    // function scalePage(){
    //     var ww = jQuery(window).width();
    //     var scale = ww / 1440;
    //     if (jQuery(window).width() < 1440 & jQuery(window).width() > 767) {
    //         jQuery("body").css("zoom", scale);
    //     }
    // }


    jQuery(document).ready(function() {
        // scalePage();
        // jQuery(window).on("resize", scalePage);

        var $el = $("body");
        var elHeight = $el.outerHeight();
        var elWidth = $el.outerWidth();


        var $wrapper = $("html");

        $wrapper.resizable({
            resize: doResize
        });
        var scale = 1;

        function doResize(event, ui) {

            var origin;

            scale = Math.min(
                ui.size.width / elWidth,
                ui.size.height / elHeight
            );

            $el.css({
                transform: "translate(0, 0) " + "scale(" + scale + ")",
            });

            var newHeight = Math.min(
                ui.size.width / elWidth,
                ui.size.height / elHeight
            );

            htmlHeight = (newHeight * elHeight) - 10;

            $wrapper.css({height: htmlHeight + "px"});
            $el.css({height: htmlHeight + "px"});

        }

        var starterData = {
            size: {
                width: $wrapper.width(),
                height: $wrapper.height()
            }
        };

        if (jQuery(window).width() < 1440 & jQuery(window).width() > 767) {
            doResize(null, starterData);
        }
        ;

        //menu


        jQuery(".sectors-main-drop").mouseover(function () {
            jQuery(".nav-drop-sectors").removeClass('d-none');
        });

        jQuery(".sectors-main-drop").siblings().mouseover(function () {

            if (document.location.pathname.indexOf("/sectors") == 0) {
                if (jQuery(this).hasClass('contact-main-drop')) {
                    jQuery(".nav-drop-sectors").removeClass('d-none');
                } else {
                    jQuery(".nav-drop-sectors").addClass('d-none');
                }

            } else {
                jQuery(".nav-drop-sectors").addClass('d-none');
            }
        });

        //active menu

        $(function () {

            var getUrl = window.location;
            var baseUrl = getUrl.protocol + "//" + getUrl.host + "/";

            var activeUrl = window.location.pathname;
            var temp = activeUrl.split("/");
            var activeUrlCut = temp[1];

            // now grab every link from the navigation
            $('.nav_container a').each(function () {
                var navUrl = $(this).attr('href');
                var temp2 = navUrl.split(baseUrl);
                var navUrlCut = temp2[1];

                if (navUrlCut === activeUrlCut) {
                    $(this).addClass('active');
                    return false;
                }

                //exceptions
                if (((activeUrlCut === 'application') || (activeUrlCut === 'team')) && (navUrlCut === 'career')) {
                    $(this).addClass('active');
                    return false;
                }
            });

        });


        var positionMenu = jQuery(".careers-main-drop a").offset().left;
        var positionMenuScaled = positionMenu / (scale * 10) * 10;

        //sectors active menu

        var currentUrl = $(location).attr('pathname');

        if (document.location.pathname.indexOf("/sectors") == 0) {
            jQuery('.sectors-main-drop a').addClass('menu-trigger');
            jQuery('.nav-drop-sectors').removeClass('d-none');
        }

        //show dropdown menu

        jQuery(".careers-main-drop").mouseover(function () {
            jQuery(".nav-drop-careers").removeClass('d-none');
            jQuery(".nav-drop-careers ul").css("left", positionMenuScaled);
        });

        jQuery(".careers-main-drop").siblings().mouseover(function () {
            jQuery(".nav-drop-careers").addClass('d-none');
        });


        jQuery(".group-main-drop").mouseover(function () {
            jQuery(".nav-drop-group").removeClass('d-none');
        });

        jQuery(".group-main-drop").siblings().mouseover(function () {
            jQuery(".nav-drop-group").addClass('d-none');
        });

        jQuery(".services-main-drop").mouseover(function () {
            jQuery(".nav-drop-services").removeClass('d-none');
        });

        jQuery(".services-main-drop").siblings().mouseover(function () {
            jQuery(".nav-drop-services").addClass('d-none');
        });

        jQuery("#nav").parent().siblings().mouseover(function () {
            if (document.location.pathname.indexOf("/sectors") == 0) {
                jQuery('.sectors-main-drop a').addClass('menu-trigger');
                jQuery('.nav-drop-sectors').removeClass('d-none');
                jQuery(".nav-drop-group,.nav-drop-services,.nav-drop-careers").addClass('d-none');
            } else {
                jQuery(".nav-drop-sectors,.nav-drop-group,.nav-drop-services,.nav-drop-careers").addClass('d-none');
            }

        });

        //chart

        jQuery(".grow-click").click(function () {
            jQuery(this).siblings().find("span").removeClass("active");
            jQuery(this).find("span").addClass("active");

            if (jQuery(this).hasClass("empl")) {
                jQuery(".img-project").animate({'opacity': '0'}, 800);
                jQuery(".img-employee").animate({'opacity': '1'}, 800);
            }

            if (jQuery(this).hasClass("proj")) {
                jQuery(".img-employee").animate({'opacity': '0'}, 800);
                jQuery(".img-project").animate({'opacity': '1'}, 800);
            }

        });

        //click boxes career

        jQuery(".click-meet").click(function () {
            document.location.href = '/team';
        });

        jQuery(".click-application").click(function () {
            document.location.href = '/application';
        });

        jQuery(".click-positions").click(function () {
            jQuery('html, body').animate({
                scrollTop: $(".positions").offset().top - $("#nav").height()
            }, 800);
        });

        //click boxes sectors

        // jQuery(".click-automotive").click(function() {
        //     document.location.href = '/sectors/#automotive';
        // });
        //
        // jQuery(".click-maritime").click(function() {
        //     document.location.href = '/sectors/#maritime';
        // });
        //
        // jQuery(".click-rolling").click(function() {
        //     document.location.href = '/sectors/#rolling-stock';
        // });
        //
        // // jQuery(".click-aerospace").click(function() {
        // //     document.location.href = '/sectors/#aerospace';
        // // });
        //
        // jQuery(".click-others").click(function() {
        //     document.location.href = '/sectors/#others';
        // });

        // services toggle

        jQuery('.services-toggle-inner').click(function () {
            jQuery(this).toggleClass('active');
            jQuery(this).siblings().find('ul').slideToggle("slow");
        });

        //menu services toggle boxes

        if (window.location.href.indexOf("concept") > -1 || window.location.href.indexOf("development") > -1 || window.location.href.indexOf("simulation") > -1 || window.location.href.indexOf("production") > -1 || window.location.href.indexOf("managment") > -1) {
            var servicesUrl = document.location.href;
            var servicesUrlCut = servicesUrl.split("#").pop();
            toggleServices(servicesUrlCut);
        }

        jQuery(".services-menu li a, .services-toggle li a").click(function () {
            var servicesUrl = $(this).attr('href');
            var servicesUrlCut = servicesUrl.split("#").pop();
            toggleServices(servicesUrlCut);
        });

        function toggleServices(servicesUrlCut) {
            jQuery('html, body').animate({
                scrollTop: $("#toggle-services").offset().top - $("#nav").height()
            }, 800);
            jQuery('.services-toggle').each(function () {
                if (jQuery(this).hasClass(servicesUrlCut)) {
                    if (!jQuery(this).find('.why-content').hasClass('active')) {
                        jQuery(this).find('.why-content').toggleClass('active');
                        jQuery(this).find('ul').slideToggle("slow");
                    }
                    jQuery(this).siblings().find('.why-content').removeClass('active');
                    jQuery(this).siblings().find('ul').hide();
                }
            });
        }

        function scrollToID(target, $offset) {
            $(target).click(function (e) {
                e.preventDefault();

                var element = $(this).attr('href').split("#").pop();

                $('html, body').animate({
                    scrollTop: $('#' + element).offset().top - $offset
                }, 800);
            });
        }

        @if (Request::path() != 'sectors')
        $('.sectors-menu a').click(function (e) {
            e.preventDefault();
            var element = $(this).attr('href').split("#").pop();
            window.location.href = '/sectors?' + element;
        })
        @endif

        // Te warunki będą do usunięcia po przygotowaniu stron sektorów
        if (window.location.href.indexOf("sectors?") > -1) {
            var element = window.location.href.split("?").pop();
            $('html, body').animate({
                scrollTop: $('#' + element).offset().top - ($("#nav").height() + $(".nav-drop-sectors").height())
            });
            window.history.pushState({}, document.title, "/" + "sectors");
        }

        if (window.location.href.indexOf("sectors") > -1) {
            scrollToID(".nav-drop-sectors li a", $("#nav").height() + $(".nav-drop-sectors").height());
        }

        //group scroll menu
        @if (Request::path() != 'group')
        $('.group-menu a').click(function (e) {
            e.preventDefault();
            var element = $(this).attr('href').split("#").pop();
            window.location.href = '/group?' + element;
        })
        @endif

        // Te warunki będą do usunięcia po przygotowaniu stron grupy
        if (window.location.href.indexOf("group?") > -1) {
            var element = window.location.href.split("?").pop();
            $('html, body').animate({
                scrollTop: $('#' + element).offset().top - ($("#nav").height())
            });
            window.history.pushState({}, document.title, "/" + "group");
        }

        if(window.location.href.indexOf("group") > -1) {
            scrollToID(".nav-drop-group li a", ($("#nav").height()));
        }
        //ethics img height group
        var ethicsColHeight = [];

        jQuery('.ethics .max-height>div').each( function(){
            ethicsColHeight.push(jQuery(this).height());
        });

        var totalHeight = 0;

        for (var i = 0; i < ethicsColHeight.length; i++) {
            totalHeight += ethicsColHeight[i] << 0;
        }

        jQuery('.set-height').css('max-height',totalHeight + 20);

        //fade grants group

        /* Every time the window is scrolled ... */
        $(window).scroll( function(){

            /* Check the location of each desired element */
            $('.faded').each( function(i){

                var bottom_of_object = $(this).offset().top + $(this).outerHeight();
                var bottom_of_window = $(window).scrollTop() + $(window).height();

                /* If the object is completely visible in the window, fade it it */
                if( bottom_of_window > bottom_of_object ){

                    $(this).animate({'opacity':'0.95'},1000);
                }
            });
        });

        //timeline

        if(window.location.href.indexOf("application") > -1) {
            function markTimelineElementAsCurrent($element) {
                $element.addClass("now");
                if ($element.hasClass("timeline-left")) $element.addClass("triangle1");
                else $element.addClass("triangle2");
            }

            function markTimelineElementAsPast($element) {
                $element.addClass("past");
            }

            function unmarkTimelineElementAsCurrent($element){
                $element.removeClass("now triangle1 triangle2");
            }

            function unmarkTimelineElementAsPast($element) {
                $element.removeClass("past");
            }

            function setTimelineElements($currentScroll, $scrollDirection){
                $(".timeline-element").each(function(){
                    var timelineElementOffset = $(this).offset();
                    var timelineElementHeight = $(this).height()*0.5;
                    var latestCurrentElementOffset = 0;

                    // On scroll down
                    if ($scrollDirection == 'down'){

                        // Mark as current
                        if (timelineElementOffset.top < ($currentScroll-timelineElementHeight)) {
                            markTimelineElementAsCurrent($(this));
                        }

                        // Unmark as current and mark as past

                        $(".timeline-element.now").each(function(){
                            var thisElementOffset = $(this).offset().top;
                            if (thisElementOffset > latestCurrentElementOffset) latestCurrentElementOffset = thisElementOffset;
                        });

                        if($(this).hasClass("now") && latestCurrentElementOffset > $(this).offset().top) {
                            markTimelineElementAsPast($(this));
                            unmarkTimelineElementAsCurrent($(this));
                        }
                    }

                    // On scroll up
                    if($scrollDirection == 'up') {
                        // Unark as current
                        if (timelineElementOffset.top > ($currentScroll-timelineElementHeight)) {
                            unmarkTimelineElementAsCurrent($(this));
                        }

                        if (timelineElementOffset.top < ($currentScroll-timelineElementHeight)) {
                            markTimelineElementAsCurrent($(this));
                            unmarkTimelineElementAsPast($(this));
                        }

                        // Unmark as current and unmark as past

                        $(".timeline-element.now").each(function(){
                            var thisElementOffset = $(this).offset().top;
                            if (thisElementOffset > latestCurrentElementOffset) latestCurrentElementOffset = thisElementOffset;
                        });

                        if($(this).hasClass("now") && latestCurrentElementOffset > $(this).offset().top) {
                            markTimelineElementAsPast($(this));
                            unmarkTimelineElementAsCurrent($(this));
                        }
                    }
                });


            }

                var lastScrollTop = 0;
                var scrollDirection = '';
                $(window).scroll(function() {

                    var st = $(this).scrollTop();
                    if (st > lastScrollTop) scrollDirection = 'down';
                    else scrollDirection = 'up';
                    lastScrollTop = st;

                    var $myDiv = $('.career.application .active, .career.application .active-mobile');

                    if ($("#timeline-start").is(":visible")) var timelineStart = $("#timeline-start").offset();
                    else var timelineStart = $("#timeline-start-mobile").offset();

                    var scrollAfterStart = $(this).scrollTop()-timelineStart.top;
                    var scrollAdjustment = $(window).height()*(-0.5);
                    $myDiv.height( scrollAfterStart - scrollAdjustment );
                    setTimelineElements($(document).scrollTop()-scrollAdjustment, scrollDirection);
                });

        }


        //value circle animation

        /*jQuery(".values-circle svg, .values-circle .value-title").click(function(){

            if(jQuery(".values-box").hasClass("chose")) {
                jQuery(".values-box").removeClass("chose");
            }

      /     if(jQuery(this).closest("svg").hasClass("d-none")) {
                jQuery(this).closest("svg").removeClass("d-none");
            }
            jQuery(this).closest("svg").addClass("d-none");

            jQuery(this).closest(".values-box").addClass("chose");
            jQuery(".values-box.active").addClass("disactive");

            if(jQuery(this).parent().hasClass("disactive")) {
                jQuery(".values-box.active").removeClass("disactive");
            }
*/
            {{--if(jQuery(this).hasClass("lock")) {--}}
                {{--jQuery(".value-change").html('<div class="text-left title-big"><span>@lang("pages.group.lock")</span> </div> <div class="text-left text-value"><p>@lang("pages.group.lock-p")</p><p>@lang("pages.group.lock-p2")</p></div>');--}}
            {{--}--}}

            {{--if(jQuery(this).hasClass("puzzle")) {--}}
                {{--jQuery(".value-change").html('<div class="text-left title-big"><span>@lang("pages.group.puzzle")</span> </div> <div class="text-left text-value"><p>@lang("pages.group.puzzle-p")</p><p>@lang("pages.group.puzzle-p2")</p></div>');--}}
            {{--}--}}

            {{--if(jQuery(this).hasClass("quality")) {--}}
                {{--jQuery(".value-change").html('<div class="text-left title-big"><span>@lang("pages.group.quality")</span> </div> <div class="text-left text-value"><p>@lang("pages.group.quality-p")</p><p>@lang("pages.group.quality-p2")</p></div>');--}}
            {{--}--}}

            {{--if(jQuery(this).hasClass("arrow-up")) {--}}
                {{--jQuery(".value-change").html('<div class="text-left title-big"><span>@lang("pages.group.arrow-up")</span> </div> <div class="text-left text-value"><p>@lang("pages.group.arrow-up-p")3</p><p>@lang("pages.group.arrow-up-p2").</p></div>');--}}
            {{--}--}}

            {{--if(jQuery(this).hasClass("chats")) {--}}
                {{--jQuery(".value-change").html('<div class="text-left title-big"><span>@lang("pages.group.chats")</span> </div> <div class="text-left text-value"><p>@lang("pages.group.chats-p")</p><p>@lang("pages.group.chats-p2")</p></div>');--}}
            {{--}--}}

            {{--if(jQuery(this).hasClass("bulb")) {--}}
                {{--jQuery(".value-change").html('<div class="text-left title-big"><span>@lang("pages.group.bulb")</span> </div> <div class="text-left text-value"><p>@lang("pages.group.bulb-p")</p><p>@lang("pages.group.bulb-p2")</p></div>');--}}
            {{--}--}}

        });

        //carousel group

        jQuery('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i=0;i<4;i++) {
                next=next.next();
                if (!next.length) {
                    next=$(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));
            }
        });


        // filter

        jQuery('.more-offer').click(function(){
            jQuery(this).toggleClass("rotate");
            jQuery(this).parent().parent().find('.close-offer').toggleClass('open-offer');
        });

        jQuery('.choose-button').click(function(){
            jQuery(this).siblings().removeClass('active');
            jQuery(this).addClass('active');

            var filterValue =   jQuery(this).data("location");
            $.post('{{ route('career') }}',{
                _token:'{{ csrf_token() }}',
                filter: filterValue
            }).done(function(e){
                $('#offers_list').html(e);
            }).fail(function(e){
                console.log(e);
            });
        });
        jQuery('#more-offers').click(function(){
            var filterValue =   jQuery('.choose-button.active').data("location");
            var number = jQuery('#offers_list').children().length;
            $.post('{{ route('career') }}',{
                _token:'{{ csrf_token() }}',
                filter: filterValue,
                number:number*1+4
            }).done(function(e){
                $('#offers_list').html(e);
            }).fail(function(e){
                console.log(e);
            });
        });

        //get started button home page

        jQuery(".scroll-down").click(function() {
            jQuery('html, body').animate({
                scrollTop: $("#why-cadm").offset().top-$("#nav").height()
            }, 800);
        });

        //join us scroll button meet the team page

        jQuery(".join-us").click(function() {
            jQuery('html, body').animate({
                scrollTop: $(".positions").offset().top-$("#nav").height()
            }, 800);
        });

    //});



    // Initialize and add the map
    function initMap() {
        // The map, centered at Uluru
        if (jQuery(window).width() > 776) {
            var makeZoom = 6;
            var myLat = 51.533909;
            var myLng = 14.731688;
        } else {
            var makeZoom = 5;
            var myLat = 49.096167;
            var myLng = 17.024754;

        };


        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: makeZoom,
            minZoom: 5,
            center: {lat: myLat, lng: myLng },
            styles: [{
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "saturation": 36
                    },
                    {
                        "color": "#333333"
                    },
                    {
                        "lightness": 40
                    }
                ]
            },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "on"
                        },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#fefefe"
                        },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                },
                {
                    "featureType": "administrative.country",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#cfcfcf"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dedede"
                        },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e9e9e9"
                        },
                        {
                            "lightness": 17
                        }
                    ]
                }
            ]
        });

        setMarkers(map);


    }

    var locations = [
        ['<span class="hq">HQ</span>CADM Automotive Sp. z o.o.', 50.078560, 19.879270,'Lindego 1c','30-148 Kraków','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
        ['CADM Automotive Sp. z o.o.', 51.096167, 17.024754,'Powstańców Śląskich 48','53-333 Wrocław','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
        ['CADM Automotive Sp. z o.o.', 50.263567, 19.093314,'ks. bpa Herberta Bednorza 2a-6','40-384 Katowice','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
        ['DES ART. Sp. z o.o.', 54.533146, 18.517756,'Czechosłowacka 3','81-969 Gdynia','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
        ['CADM Automotive Sp. z o.o.', 49.546515, 22.219024,'Lipińskiego 113','38-500 Sanok','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
        ['CADM Automotive Sp. z o.o.', 51.273985, 22.564424,'Mariana Rapackiego 25','20-150 Lublin','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10],
        ['CADM Automotive GmbH', 48.134737, 11.663307,'Schatzbogen 38','D – 81829 München','+48 12 397 21 82, fax +48 12 397 92','info@cadm-a.com',10]
    ];

    var allMarkers = [];

    function setMarkers(map) {

        var image = {
            url : 'img/dot.png'
        };

        var image2 = {
            url : 'img/dot-2.png'
        };

        var marker, i;
        for (var i = 0; i < locations.length; i++) {

            var location = locations[i];
            var company = locations[i][0];
            var address = locations[i][3];
            var address2 = locations[i][4];
            var phone = locations[i][5];
            var email = locations[i][6];
            var iconIndex = locations[i][7];

            var pin = locations[i];
            var myLatLng = new google.maps.LatLng(pin[1], pin[2]);


            if (i < 1) {

                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image2,
                    zIndex : iconIndex
                });
            };


            if (i >= 1) {
                var marker = new google.maps.Marker({
                    position: myLatLng,
                    map: map,
                    icon: image,
                    zIndex : iconIndex
                });
            };


            allMarkers.push(marker);

            if (phone) {
                var content = '<div id="map-box"><p class="company-name">' + company + '<p><p class="address">' + address + '<br/>' + address2 + '</p><p class="phone"><img src="img/phone.png"/>' + phone + '<br/><img src="img/mail.png" class="mail">' + email + '</p></div>';
            } else {
                var content = '<div id="map-box"><p class="company-name">' + company + '<p><p class="address">' + address + '<br/>' + address2 + '</div>';
            }

            var infoWindow = new google.maps.InfoWindow();

            // google.maps.event.addListener( map,'click', (function(marker){
            //     return function() {
            //         // infoWindow.close();
            //         //Change the marker icon
            //         marker.setIcon("img/dot.png");
            //         console.log(jQuery(this));
            //         marker.setZIndex(21);
            //     };
            // })(marker));


            google.maps.event.addListener(marker,'click', (function(marker,content,infoWindow){

                return function() {

                    allMarkers.forEach(markAsDot);

                    // infoWindow.close();
                    document.getElementById('map-container').innerHTML = content;
                    infoWindow.setContent(content);
                    // infoWindow.open(map,marker);
                    // console.log(jQuery(this));
                    console.log(marker);
                    if (marker.icon == 'img/dot-5.png') marker.setIcon("img/dot-2.png");
                    else marker.setIcon("img/dot-4.png");

                    marker.setZIndex(-20);
                };
            })(marker,content,infoWindow));

        }
    }

    function markAsDot(element, index, array) {

            //console.log(locations[i]);

            if (index === 0) {
                element.setIcon("img/dot-5.png");
            }
            else {
                element.setIcon("img/dot.png");
            }

        element.setZIndex(21);
    }


</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCft8gnloFEwT9u_3Rl8O0w_fDQkqrSWc8&callback=initMap"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>



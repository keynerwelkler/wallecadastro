jQuery(document).ready(function($) {
    "use strict";
    $('.shard_section_dd').each(function(){
        if ($(this).data('background_image')){
            var background_image = $(this).data('background_image');
            $(this).css('background-image', 'url(' + background_image + ')');
        }
    });
/*********** Parallax ************************************************************/
    $('.shard-parallax').each(function(){
        var parallax_amount = $(this).data('parallax');
        var background_image = $(this).data('background_image');
        if(!jQuery.browser.mobile && background_image!==undefined){
            $(this).css('background-image', 'url(' + background_image + ')');
            $(this).parallax("50%", parallax_amount,false);
        }
        else{
            $(this).css('background-attachment', 'scroll');
        }
    });
/*********** Parallax ************************************************************/
    $('.ABt_testimonials_wrapper').each(function() {
        var $slider = $(this).find('.ABt_testimonials_slide');
        var fx = $slider.data("fx");
        var play = $slider.data("play");
        var easing = $slider.data("easing");
        var direction = $slider.data("direction");
        var duration = parseInt($slider.data("duration"), 10);
        var pauseonhover = $slider.data("pauseonhover");
        var timeoutduration = parseInt($slider.data("timeoutduration"), 10);
        var $prev = $(this).find('.ABt_prev');
        var $next = $(this).find('.ABt_next');
        var $pagination = $(this).find('.ABt_pagination');
        $slider.carouFredSel({
            prev   : $prev,
            next   : $next,
            pagination: $pagination,
            direction       : direction,
            responsive : true,
            auto   : {
                play            : play,
                fx              : fx,
                easing          : easing,
                duration        : duration,
                pauseOnHover    : pauseonhover,
                timeoutDuration : timeoutduration
            },
            scroll   : {
                fx              : fx,
                easing          : easing,
                duration        : duration
            },
            width  : 'auto',
            items  : {
                visible:1
            }
        });
    });
    function shard_resize_video_bg($section){
        var $video = $section.find('.shard_video_background');
        $video.width('auto');
        var video_height = $video.height();
        var ratio = $video.width()/video_height;
        var difference = $section.height()-video_height;
        if(difference>0){
            $video.width((video_height+difference)*ratio);
        }
    }
    $('.shard-video-bg').each(function(){
        shard_resize_video_bg($(this));
        $(this).find('.shard_video_background').css({'visibility':'visible'});
    });
/*********** Animations ************************************************************/
    if(!jQuery.browser.mobile){
        $(".shard-animo").one('inview', function(event, isInView) {
            if (isInView) {
                var animation = $(this).data('animation');
                var duration = $(this).data('duration')/1000;
                var delay = parseInt($(this).data('delay'),10);
                var $element = $(this);
                setTimeout(function() {
                   $element.css({visibility: "visible"}).animo( { animation: animation, duration: duration} );
                }, delay);
                
            }
        });
    }
    else{
        $(".shard-animo").css({visibility: "visible"});
    }
    $(".shard-animo-children").one('inview', function(event, isInView) {
        var animation = $(this).data('animation');
        var duration = $(this).data('duration')/1000;
        var delay = parseInt($(this).data('delay'),10);
        var difference = 0;
        if (isInView) {
            $(this).children().each(function(){
                var $element = $(this);
                setTimeout(function() {
                    $element.css({visibility: "visible"}).animo( { animation: animation, duration: duration} );
                }, difference);
                difference = difference + delay;
            });
        }
    });
/*********** Accordions ************************************************************/
    $( ".shard-accordion" ).accordion({
        collapsible: true,
        active: false,
        heightStyle: "content",
        create: function( event, ui ) {
            var expanded = $(this).data("expanded");
            if(expanded===0){
                expanded = false;
            }
            else{
                expanded = expanded-1;
            }
            $(this).accordion( "option", "active", expanded);
        }
    }); 
/*********** Tabs ************************************************************/
    $('.shard-tabs').each(function() {
        var $tabs = $(this);
        var effect = $tabs.data("effect");
        var optionSelected = $tabs.data("selected")-1;
        var directions;
        if($tabs.hasClass('shard-tabs-horizontal')){
            directions = {'after':'right', 'before':'left'};
        }
        else{
            directions = {'after':'down', 'before':'up'};
        }
        $tabs.tabs({ 
            active:optionSelected,
            beforeActivate: function( event, ui ) {
                if(effect==='slide'){
                    var parent = ui.oldPanel.parent();
                    var diffHeight = parent.height() - (ui.oldPanel.height() - ui.newPanel.height());
                    parent.animate({height: diffHeight}, 300, function() {
                        parent.height('auto');
                    });
                    if (ui.newTab.index() > ui.oldTab.index()){
                        $tabs.tabs( "option", "show", { effect: "slide", direction: directions.after, duration: 400 } );
                    }
                    else{
                        $tabs.tabs( "option", "show", { effect: "slide", direction: directions.before, duration: 400 } );
                    }
                }
                else if(effect==='fade'){
                    $tabs.tabs( "option", "show", true );
                }
            }
        });
    });
    function shard_tabs_responsive(){
        $('.shard-tabs').each(function(){
            var $tabs = $(this);
            if($tabs.width() < parseInt($tabs.data('break_point'), 10)){
                $tabs.addClass('shard-tabs-fullwidthtabs');
            }
            else{
                $tabs.removeClass('shard-tabs-fullwidthtabs');
            }
        });
    }
    shard_tabs_responsive();
/*********** Alert Box ************************************************************/
    $( ".shard_alert_box_close" ).click(function(){
        var $parent = $(this).parent();
        $parent.animate({height:"0px", paddingTop:"0px", paddingBottom:"0px", margin:"0px", opacity:"0"},400);
    });
/*********** Stats excerpt counter ************************************************************/
    function shard_counter($object,interval,max,increment) {
        var number = parseInt($object.text(),10) + increment;
        if (number < max){
            setTimeout(function() {shard_counter($object,interval,max,increment);} ,interval);
            $object.text(number);
        }
        else{
            $object.text(max);
        }
    }
    if(!jQuery.browser.mobile){
        $(".shard_stats_number").one('inview', function(event, isInView) {
            if (isInView) {
                var max = $(this).data("number");
                var increment = 1;
                if (max > 50) increment = 10;
                if (max > 500) increment = 100;
                if (max > 5000) increment = 200;
                if (max > 10000) increment = 1000;
                var interval = $(this).data("duration")/(max/increment);
                $(this).text('0');
                shard_counter($(this),interval,max,increment);
            }
        });
    }
    else{
        $(".shard_stats_number").each(function() {
            var max = $(this).data("number");
            $(this).text(max);
        });
    }
/*********** Knob ************************************************************/
    $(".shard_knob_wrapper").each(function(){
        var $knob = $(this).find(".shard_knob");
        var $number_sign = $(this).find(".shard_knob_number_sign");
        var $number = $(this).find(".shard_knob_number");
        $knob.knob({
            'displayInput' : false
        });
        var canvas_width = $(this).find("canvas").width();
        $number_sign.css({
            'visibility' : 'visible',
            'lineHeight' : canvas_width+'px'
        });
    
        if(!jQuery.browser.mobile){
            $knob.val(0).trigger('change');
            $(this).one('inview', function(event, isInView) {
                if (isInView) {
                    $({value: 0}).animate({value: $knob.data("number")}, {
                        duration: 1000,
                        easing:'swing',
                        step: function() 
                        {
                            var current = Math.ceil(this.value);
                            $knob.val(current).trigger('change');
                            $number.html(current);
                        }
                    })
                }
            });
        }
        else{
            $number.html($knob.data("number"));
        }
    });
    

/*********** Tooltip ************************************************************/
    $('.shard_tooltip').tipsy({
        fade: true,
        opacity: 0.8,
        gravity: function(){
            var gravity = $(this).data("gravity");
            gravity = (gravity !== undefined) ? gravity : 's';
            return gravity;
        }
    });
/*********** Back to Top ************************************************************/
    $('.shard_divider a').click(function(e){
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, 'slow');
    });
/*********** Team Member ************************************************************/
    $('.shard_team_member_modal_link').click(function(e){
        e.preventDefault();
        var $parent = $(this).closest('.shard_team_member');
        var $modal = $parent.find('.shard_team_member_modal');
        var $section = $parent.closest('.shard_section_DD');
        $modal.detach().appendTo('body').fadeIn().addClass('shard_team_member_modal_opened');
        $parent.addClass('shard_team_member_with_opened_modal');
    });
    $('.shard_team_member_modal_close').click(function(e){
        e.preventDefault();
        $(this).parent().fadeOut('slow', function(){
            $(this).detach().appendTo($('.shard_team_member_with_opened_modal')).removeClass('shard_team_member_modal_opened');
            $('.shard_team_member_with_opened_modal').removeClass('shard_team_member_with_opened_modal');
        })
    });
    $(document).on('keydown', function(e) {
        if ( e.keyCode === 27 ) { //ESC
            $('.shard_team_member_modal_opened').fadeOut('slow', function(){
                $(this).detach().appendTo($('.shard_team_member_with_opened_modal')).removeClass('shard_team_member_modal_opened');
                $('.shard_team_member_with_opened_modal').removeClass('shard_team_member_with_opened_modal');
            })
        }
    });
/*********** Progress Bar ************************************************************/
    if(!jQuery.browser.mobile){
        $(".shard_meter .shard_meter_percentage").width(0).one('inview', function(event, isInView) {
          if (isInView) {
            var newwidth = $(this).data("percentage") + '%';
            $(this).animate({width: newwidth}, {
                duration:1500,
                step: function(now) {
                    $(this).find('span').html(Math.floor(now) + '%');
                    var above_tenths = Math.floor(now/10);
                    for(var i=1; i<=above_tenths; i++){
                        $(this).addClass('shard_meter_above'+above_tenths*10);
                    }
                }
            });
          }
        });
    }
    else{
        $(".shard_meter .shard_meter_percentage").each(function(){
            var newwidth = $(this).data("percentage");
            $(this).css('width', newwidth+'%');
            for(var i=0; i<=newwidth; i++){
                var above_tenths = Math.floor(i/10);
                $(this).addClass('shard_meter_above'+above_tenths*10);
            }
        });
    }
/*********** Google Maps ************************************************************/
//contact page google maps
    function initialize_gmap($element) {
        var myLatlng = new google.maps.LatLng($element.data('lat'),$element.data('lng'));
        var markerLatlng = new google.maps.LatLng($element.data('markerlat'),$element.data('markerlng'));
        var scrollwheel = ($element.data('scrollwheel') == 1 ? true : false);
        var mapTypeControl = ($element.data('maptypecontrol') == 1 ? true : false);
        var panControl = ($element.data('pancontrol') == 1 ? true : false);
        var zoomControl = ($element.data('zoomcontrol') == 1 ? true : false);
        var scaleControl = ($element.data('scalecontrol') == 1 ? true : false);
        var map_type = google.maps.MapTypeId.ROADMAP;
        if ($element.data('map_type') == 'SATELLITE') map_type = google.maps.MapTypeId.SATELLITE;
        if ($element.data('map_type') == 'HYBRID') map_type = google.maps.MapTypeId.HYBRID;
        if ($element.data('map_type') == 'TERRAIN') map_type = google.maps.MapTypeId.TERRAIN;
        var mapOptions = {
            zoom: parseInt($element.data('zoom'),10),
            center: myLatlng,
            mapTypeId: map_type,
            scrollwheel: scrollwheel,
            mapTypeControl: mapTypeControl,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.BOTTOM_CENTER
            },
            panControl: panControl,
            panControlOptions: {
                position: google.maps.ControlPosition.RIGHT_CENTER
            },
            zoomControl: zoomControl,
            zoomControlOptions: {
                style: google.maps.ZoomControlStyle.LARGE,
                position: google.maps.ControlPosition.RIGHT_CENTER
            },
            scaleControl: scaleControl,
            scaleControlOptions: {
                position: google.maps.ControlPosition.BOTTOM_LEFT
            },
            streetViewControl: false,
            streetViewControlOptions: {
                position: google.maps.ControlPosition.RIGHT_CENTER
            }
        };
        var elemnt_id = $element.attr('id');
        var map = new google.maps.Map(document.getElementById(elemnt_id), mapOptions);
        var infowindow = new google.maps.InfoWindow({
            content: $element.data('markercontent')
        });
        var marker = new google.maps.Marker({
            position: markerLatlng,
            map: map,
            title: $element.data('markertitle'),
            icon: $element.data('markericon')
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
    }
    $('.shard_google_map').each(function(){
        google.maps.event.addDomListener(window, 'load', initialize_gmap($(this)));
    });
    $('#dz_main_slider').height($('.rev_slider_wrapper').height());
                        
    $(".scroll").click(function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        var hash = href.split('#');
        var url_hash = '#' + hash[1];
        if ($(url_hash).length > 0) {
            var offset = ($(window).width()<968) ? 20 : 0;
            $('html, body').animate({
                scrollTop: $(url_hash).offset().top-offset
            }, 1000);
        } 
        else{
            location.href = href;
        }
        if($(window).width()<968){
            var $menu_responsive = $('#ABdev_main_header nav');
            $menu_responsive.animate({width:'toggle'},350);
        }
    });
    $("#contact-submit").click(function(e) {
        "use strict";
        e.preventDefault();
        var $button=$(this);
        var $form = $button.parents('form');
        var $wrapper = $form.parents('#contact-wrapper');
        $wrapper.find('.contact-response-output').slideUp(300);
        $button.val('Sending').prop('disabled', true).addClass('disabled');
        var success_msg = '';
        if($form.find('#formid').val()=='planner'){
            success_msg = "Project details are successfuly sent. Thank you for your interest, we will respond as soon as possible.";
        }
        else{
            success_msg = "Message is successfuly sent. Thank you for your interest, we will respond as soon as possible.";
        }
        var str = $form.serialize() + '&action=js';
        $.ajax({
            type: "POST",
            url: 'php/sendmail.php',
            data: str,
            success: function(msg){
                if(msg == "OK"){
                    $button.val('Submited');
                    $('.gtt_reg_data_field').prop('disabled', true).addClass('disabled_text_input');
                    var form_height = $form.outerHeight();
                    $form.slideUp(1200);
                    $('html, body').animate({scrollTop: $(window).scrollTop() - form_height});
                    $wrapper.find('.contact-response-output').addClass('success').html(success_msg).slideDown(600);
                }
                else{
                    $button.val('Submit').prop('disabled', false).removeClass('disabled');
                    $wrapper.find('.contact-response-output').html(msg).slideDown(600);
                }
            }
        });
        return false;
    });
    function randomIntFromInterval(min,max){
        return Math.floor(Math.random()*(max-min+1)+min);
    }
    var $bokah_bar=$('#title_breadcrumbs_bar.bokah_enabled');
    var bokah_max_x = $bokah_bar.width();
    var bokah_max_y = $bokah_bar.height();
    function bokah_animate($element) {
        var element_height = $element.height();
        $element.animate({
            top: randomIntFromInterval(-element_height,bokah_max_y+element_height/2),
            left: randomIntFromInterval(-element_height,bokah_max_x+element_height/2)
        }, randomIntFromInterval(37000,45000), 'linear',function(){
            bokah_animate($(this));
        });
    };
    if($bokah_bar.length > 0){
        for (var i = 1; i <= 7; i++) {
            $bokah_bar.append('<div class="bokah_circle bokah_circle_' + i + '" style="top:'+randomIntFromInterval(-100,bokah_max_y*1.3)+'px;left:'+randomIntFromInterval(-100,bokah_max_x*1.3)+'px;"></div>');
        };
        $('.bokah_circle').each(function(){
            bokah_animate($(this));
        });
    }

    function header_menu_line() {
        $("#magic-line").remove();
        $("#topbar_and_header.th_style_1 #main_menu, #topbar_and_header.th_style_3 #main_menu").prepend("<li id='magic-line'></li>");
        var $magicLine = $("#magic-line");
        if($magicLine.length > 0){
            var position,width;
            var $selected_element = $('#main_menu .current-menu-ancestor a');
            if (!$selected_element.length > 0) $selected_element = $('#main_menu .current-menu-item a');
            if (!$selected_element.length > 0) $selected_element = $('#main_menu .current-post-ancestor a').closest('.menu-item-depth-0').find('a');
            if($selected_element.length > 0){
                position = $selected_element.position().left;
                width = $selected_element.outerWidth();
            }
            else{
                position=0;
                width = $("#main_menu > .menu-first > a").outerWidth();
                console.log(width);
            }
            var initial_position = position + width / 2;
            $magicLine.css('left', initial_position).animate({
                "left" : position,
                "width" : width
            }, 300, 'swing', function(){
                $(this).css({
                    "left" : position,
                    "width" : width
                }).data("origLeft", position).data("origWidth", $magicLine.outerWidth());
                $("#main_menu > li").hover(
                    function() {
                        var $link = $(this).find('a');
                        var position = $link.position().left; 
                        var width = $link.outerWidth(); 
                        $magicLine.stop().animate({
                            'left' : position,
                            'width' : width
                        }, 300);
                    }, 
                    function() {
                        $magicLine.stop().animate({
                            'left': $magicLine.data("origLeft"),
                            'width': $magicLine.data("origWidth")
                        }, 300);    
                    }
                );
            });
        }
    }

    $(window).load(function() { header_menu_line();} );
    
    function portfolio_filter_line() {
        $("#portfolio_magic-line").remove();
        $("#filters.portfolio_filter").prepend("<li id='portfolio_magic-line'></li>");
        var $portfoliomagicLine = $("#portfolio_magic-line");
        if($portfoliomagicLine.length > 0){
            var position,width;
            if($("#filters.portfolio_filter li a.selected").length > 0){
                position = $("#filters.portfolio_filter li a.selected").position().left;
                width = $("#filters.portfolio_filter li a.selected").outerWidth();
            }
            else{
                position=0;
                width = $("#filters.portfolio_filter > li a").outerWidth();
            }
            var initial_position = position + width / 2;
            $portfoliomagicLine.css('left', initial_position).animate({
                "left" : position,
                "width" : width
            }, 300, 'swing', function(){
                $(this).css({
                    "left" : position,
                    "width" : width
                }).data("origLeft", position).data("origWidth", $portfoliomagicLine.outerWidth());
                $("#filters.portfolio_filter > li").hover(
                    function() {
                        var $link = $(this).find('a');
                        var position = $link.position().left; 
                        var width = $link.outerWidth(); 
                        $portfoliomagicLine.stop().animate({
                            'left' : position,
                            'width' : width
                        }, 300);
                    }, 
                    function() {
                        $portfoliomagicLine.stop().animate({
                            'left': $portfoliomagicLine.data("origLeft"),
                            'width': $portfoliomagicLine.data("origWidth")
                        }, 300);    
                    }
                );
            });
        }
    }
    $(window).load(function() { portfolio_filter_line();} );
    $("#filters.portfolio_filter > li a").click(function(){
        var $portfoliomagicLine = $("#portfolio_magic-line");
        if($portfoliomagicLine.length > 0){
            var position,width;
            if($(this).length > 0){
                position = $(this).position().left;
                width = $(this).outerWidth();
            }
            $portfoliomagicLine.css({
                "left" : position,
                "width" : width
            }).data("origLeft", position).data("origWidth", $portfoliomagicLine.outerWidth());
        }
    });
    var $main_slider = $('#ABdev_main_slider');
    $main_slider.height('auto');
    
    $('.accordion-group').on('show', function() {
        $(this).find('i').removeClass('icon-plus').addClass('icon-minus');
    });
    $('.accordion-group').on('hide', function() {
        $(this).find('i').removeClass('icon-minus').addClass('icon-plus');
    });
    var $sf = $('#main_menu');
    if($('#ABdev_menu_toggle').css('display') === 'none') {
        // enable superfish when the page first loads if we're on desktop
        $sf.superfish({
            delay:          300,
            animation:      {opacity:'show',height:'show'},
            animationOut:   {height:'hide'},
            speed:          'fast',
            speedOut:       'fast',            
            cssArrows:      false, 
            disableHI:      true,
            onBeforeShow:   function(){
                var ww = $(window).width();
                if(this.parent().offset() !== undefined){
                    var locUL = this.parent().offset().left + this.width();
                    var locsubUL = this.parent().offset().left + this.parent().width() + this.width();
                    var par = this.parent();
                    if(par.parent().is('#main_menu') && (locUL > ww)){
                        this.css('marginLeft', "-"+(locUL-ww+20)+"px");
                    }
                    else if (!par.parent().is('#main_menu') && (locsubUL > ww)){
                        this.css('left', "-"+(this.width())+"px"); 
                    }
                }
            }
        });
    }
    var $menu_responsive = $('#ABdev_main_header nav');
    $('#ABdev_menu_toggle').click(function(){
        $menu_responsive.animate({width:'toggle'},350);
    });
    
    $(".submit").click(function () {
        $(this).closest("form").submit();
    });
    
    var $content = $("#timeline_posts");
    var itemSelector = ('.timeline_post');
    function Timeline_Classes(){ 
        $content.find(itemSelector).each(function(){
           var posLeft = $(this).css("left");
           if(posLeft == "0px"){
               $(this).removeClass('timeline_post_right').addClass('timeline_post_left');          
           }
           else{
               $(this).removeClass('timeline_post_left').addClass('timeline_post_right');
           } 
        });
    }
    $content.imagesLoaded( function() {
        $content.masonry({
          columnWidth: ".timeline_post_first",
          gutter: 100,
          itemSelector: itemSelector
        });
        Timeline_Classes();
    });


    var $isotope_container = $('#ABdev_latest_portfolio');
    $isotope_container.imagesLoaded( function() {
        $isotope_container.isotope({
            itemSelector : '.portfolio_item',
            animationEngine: 'best-available'
        });
        var $optionSets = $('.option-set'),
            $optionLinks = $optionSets.find('a');
        $optionLinks.click(function(){
            var $this = $(this);
            if ( $this.hasClass('selected') ) {
                return false;
            }
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');
            value = value === 'false' ? false : value;
            options[ key ] = value;
            if ( key === 'layoutMode' && typeof changeLayoutMode === 'function' ) {
                changeLayoutMode( $this, options );
            } else {
                $isotope_container.isotope( options );
            }
            return false;
        });
    });

    $(window).resize(function() {
        $(".shard_knob_wrapper").each(function(){
            var $number_sign = $(this).find(".shard_knob_number_sign");
            var canvas_width = $(this).find("canvas").width();
            $number_sign.css({
                'lineHeight' : canvas_width+'px'
            });
        });
        $('.shard-video-bg').each(function(){
            shard_resize_video_bg($(this));
        });
        shard_tabs_responsive();
        Timeline_Classes();
        $("#magic-line").remove();
        $("#portfolio_magic-line").remove();
        clearTimeout(this.id);
        this.id = setTimeout(on_timeout, 500);
        function on_timeout(){
            header_menu_line();
            portfolio_filter_line();
        }
        $('#dz_main_slider').height($('.rev_slider_wrapper').height());
        if($('#ABdev_menu_toggle').css('display') === 'none' && !$sf.hasClass('sf-js-enabled')) {
            // you only want SuperFish to be re-enabled once ($sf.hasClass)
            $menu_responsive.show();
            $sf.superfish({
                delay:          300,
                animation:      {opacity:'show',height:'show'},
                animationOut:   {height:'hide'},
                speed:          'fast',
                speedOut:       'fast',            
                cssArrows:      false, 
                disableHI:      true,
                onBeforeShow:   function(){
                    this.css('marginLeft', "0px");
                    var ww = $(window).width();
                    var locUL = this.parent().offset().left + this.width();
                    var locsubUL = this.parent().offset().left + this.parent().width() + this.width();
                    var par = this.parent();
                    if(par.parent().is('#main_menu') && (locUL > ww)){
                        this.css('marginLeft', "-"+(locUL-ww+20)+"px");
                    }
                    else if (!par.parent().is('#main_menu') && (locsubUL > ww)){
                        this.css('left', "-"+(this.width())+"px"); 
                    }
                }
            });
        } else if($('#ABdev_menu_toggle').css('display') != 'none' && $sf.hasClass('sf-js-enabled')) {
            // smaller screen, disable SuperFish
            $sf.superfish('destroy');
            $menu_responsive.hide();
            $menu_responsive.find('.sf-mega').css('marginLeft','0');
        }
    });  
});

/*revolution slider*/
var setREVStartSize = function() {
    var tpopt = new Object();
        tpopt.startwidth = 1170;
        tpopt.startheight = 500;
        tpopt.container = jQuery('#rev_slider_3_1');
        tpopt.fullScreen = "off";
        tpopt.forceFullWidth="off";
    tpopt.container.closest(".rev_slider_wrapper").css({height:tpopt.container.height()});tpopt.width=parseInt(tpopt.container.width(),0);tpopt.height=parseInt(tpopt.container.height(),0);tpopt.bw=tpopt.width/tpopt.startwidth;tpopt.bh=tpopt.height/tpopt.startheight;if(tpopt.bh>tpopt.bw)tpopt.bh=tpopt.bw;if(tpopt.bh<tpopt.bw)tpopt.bw=tpopt.bh;if(tpopt.bw<tpopt.bh)tpopt.bh=tpopt.bw;if(tpopt.bh>1){tpopt.bw=1;tpopt.bh=1}if(tpopt.bw>1){tpopt.bw=1;tpopt.bh=1}tpopt.height=Math.round(tpopt.startheight*(tpopt.width/tpopt.startwidth));if(tpopt.height>tpopt.startheight&&tpopt.autoHeight!="on")tpopt.height=tpopt.startheight;if(tpopt.fullScreen=="on"){tpopt.height=tpopt.bw*tpopt.startheight;var cow=tpopt.container.parent().width();var coh=jQuery(window).height();if(tpopt.fullScreenOffsetContainer!=undefined){try{var offcontainers=tpopt.fullScreenOffsetContainer.split(",");jQuery.each(offcontainers,function(e,t){coh=coh-jQuery(t).outerHeight(true);if(coh<tpopt.minFullScreenHeight)coh=tpopt.minFullScreenHeight})}catch(e){}}tpopt.container.parent().height(coh);tpopt.container.height(coh);tpopt.container.closest(".rev_slider_wrapper").height(coh);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(coh);tpopt.container.css({height:"100%"});tpopt.height=coh;}else{tpopt.container.height(tpopt.height);tpopt.container.closest(".rev_slider_wrapper").height(tpopt.height);tpopt.container.closest(".forcefullwidth_wrapper_tp_banner").find(".tp-fullwidth-forcer").height(tpopt.height);}
};
setREVStartSize();
var tpj=jQuery;
tpj.noConflict();
var revapi3;
tpj(document).ready(function() {
if(tpj('#rev_slider_3_1').revolution == undefined)
    revslider_showDoubleJqueryError('#rev_slider_3_1');
else
   revapi3 = tpj('#rev_slider_3_1').show().revolution(
    {
        dottedOverlay:"none",
        delay:9000,
        startwidth:1170,
        startheight:500,
        hideThumbs:200,
        thumbWidth:100,
        thumbHeight:50,
        thumbAmount:3,
        simplifyAll:"off",
        navigationType:"bullet",
        navigationArrows:"solo",
        navigationStyle:"round",
        touchenabled:"on",
        onHoverStop:"off",
        nextSlideOnWindowFocus:"off",
        swipe_threshold: 0.7,
        swipe_min_touches: 1,
        drag_block_vertical: false,
        parallax:"mouse",
        parallaxBgFreeze:"off",
        parallaxLevels:[1,3,4,5,10,30,35,40,45,2],
        keyboardNavigation:"off",
        navigationHAlign:"center",
        navigationVAlign:"bottom",
        navigationHOffset:0,
        navigationVOffset:20,
        soloArrowLeftHalign:"left",
        soloArrowLeftValign:"center",
        soloArrowLeftHOffset:0,
        soloArrowLeftVOffset:0,
        soloArrowRightHalign:"right",
        soloArrowRightValign:"center",
        soloArrowRightHOffset:0,
        soloArrowRightVOffset:0,
        shadow:0,
        fullWidth:"on",
        fullScreen:"off",
        spinner:"spinner0",
        stopLoop:"off",
        stopAfterLoops:-1,
        stopAtSlide:-1,
        shuffle:"off",
        autoHeight:"off",
        forceFullWidth:"off",   
        hideThumbsOnMobile:"off",
        hideNavDelayOnMobile:1500,
        hideBulletsOnMobile:"off",
        hideArrowsOnMobile:"off",
        hideThumbsUnderResolution:0,
        hideSliderAtLimit:0,
        hideCaptionAtLimit:0,
        hideAllCaptionAtLilmit:0,
        startWithSlide:0    
    });
}); 
/*revolution slider*/

/**
 * jQuery.browser.mobile (https://detectmobilebrowser.com/)
 *
 * jQuery.browser.mobile will be true if the browser is a mobile device
 *
 **/
(function(a){(jQuery.browser=jQuery.browser||{}).mobile=/(android|ipad|playbook|silk|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))})(navigator.userAgent||navigator.vendor||window.opera);
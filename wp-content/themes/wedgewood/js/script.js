jQuery(function ($) {
//$(document).on('ready', function() {
    $(window).on('load', function(){

        //$("#holder_form_booking .wpcf7-spinner").appendTo("#holder_form_booking #extend-wpcf7-spinner")
        //setTimeout(closeLoading(), 3000); //wait for page load PLUS two seconds.
    });

    /*
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            center: true,
            dots: false,
            nav:true,
            navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
            items:2,
            loop:true,
            margin:10,
            responsive:{
                600:{
                    items:1.8
                }
            }
        });
    });
    */
   

    /*
    $(window).scroll(function(){
        var sticky = $('#holder_main_menu'),
            scroll = $(window).scrollTop();
      
        if (scroll >= 100) sticky.addClass('fixed');
        else sticky.removeClass('fixed');
    });
    */

    //==============================================================
    //Menu
    //==============================================================
    function myFunction(x) {
        if (x.matches) { // If media query matches
            $("header #icon-menu-open, .holder-icon-main-menu").show().addClass("show_btn_mobile");
            $("header #icon-menu-close").hide();
            $("#nav-parent").hide().addClass("mobile-menu");
        } else {
            $("header #icon-menu-open, header #icon-menu-close, .holder-icon-main-menu").hide().removeClass("show_btn_mobile");
            $("#nav-parent").show().removeClass("mobile-menu");
        }
    }
    
    var x = window.matchMedia("(max-width: 1024px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes


    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
        $(".remove-aos-for-mobile").each(function(){
            //$(this).removeAttr("data-aos");
        })
    }


    $('.icon-action-menu').on('click', function(e)
    {
        var subMenu = $("#nav-parent");
        if(subMenu.is(':visible'))
        {
            //subMenu.addClass("closeright");
            //subMenu.slideUp( "90000", function() {
                // Animation complete.
            //});

            subMenu.toggle();

            //subMenu.toggle( "slide", {}, 500 );
            
            $('.icon-action-menu').hide();
            $("header #icon-menu-open").show();
            console.log("if");
        } else {
            //subMenu.removeClass("closeright");
            console.log("else");
            subMenu.slideDown(function(){
                //subMenu.addClass("closeright");
            }); //Open the menu
            $('.icon-action-menu').hide();
            $("header #icon-menu-close").show();
            //subMenu.removeClass("closeright");
        }
    });

    //==========================================
    //Modal Booking Form
    //==========================================
    $("body").on("click",".btn-open-register, .holder_btn_register a", function(event){
        //alert();
        event.preventDefault();

        $(".page_home #holder_form_booking").prependTo("#holderPopupBooking .content_body");

        //$(".modal-overlay.registerForm, #holderPopupBooking.registerFormxxx").show();
        $(".modal-overlay.registerForm").show();
        $( "#holderPopupBooking.registerForm" ).animate(
                {
                    opacity: "show",
                    top: "0%",
                    //opacity: 0.25
                },
            
                // Duration
                600,
            
                // Callback to invoke when the animation is finished
                function() {
                    //console.log( "done!" );
                    $("body").addClass("noScrollbar");
                }
        );
        //$(".details-modal").show();
    });

    $("body").on("click","#closePopupBooking", function(event){
        event.preventDefault();
        
        if($(".global_register_form .col_form").length > 0)
        {
            $("#holderPopupBooking .content_body #holder_form_booking").prependTo(".page_home .global_register_form .col_form");
        }

        $( "#holderPopupBooking.registerForm" ).animate(
                {
                    opacity: "hide",
                    top: "-100%",
                },
            
                // Duration
                600,
            
                // Callback to invoke when the animation is finished
                function() {
                    $(".modal-overlay.registerForm").hide();
                    if( $("#holder_form_booking form").length == 1 )
                    {
                        $("#holder_form_booking form")[0].reset();
                    }
                    $("#book_slots").empty();
                    $("#from, #to").attr("disabled", true);

                    $("body").removeClass("noScrollbar");
                }
            );
        });


    //==========================================
    //Modal Floorplans
    //==========================================
    $("body").on("click", ".opemModalFloorplan", function(event){
        event.preventDefault();
        $(".modal-overlay.floorplans").show();

        $( "#holderPopupBooking.floorplans" ).slideDown( "slow", function() {
            // Animation complete.
            $("body").addClass("noScrollbar");
        });

        let url = $(this).attr("data-fullimage");
        console.log(url);
        if(url){
            $("#content_floorplan").html("<img src='"+url+"' class='img-fluid'>");
        }

    })

    $("body").on("click","#closePopupFloorplans", function(event){
        event.preventDefault();
        //$(".modal-overlay.floorplans, #holderPopupBooking.floorplans").hide();

        $( "#holderPopupBooking.floorplans" ).slideUp( "slow", function() {
            // Animation complete.
            $(".modal-overlay.floorplans").hide();
            $("body").removeClass("noScrollbar");
        });
        
    });

    //==========================================
    //Modal Play Video
    //==========================================
    var playButton = document.getElementById("btnPlayVideo");
    var video = document.getElementById("video");
    // Event listener for the play/pause button
    /*
    playButton.addEventListener("click", function() {
        if (video.paused == true) {
            // Play the video
            video.play();

            // Update the button text to 'Pause'
            playButton.innerHTML = "Pause";
            video.attr

        } else {
            // Pause the video
            video.pause();

            // Update the button text to 'Play'
            playButton.innerHTML = "Play Video";
        }
    })
    */
    $("body").on("click", "#btnPlayVideo", function(event){
        event.preventDefault();
        $(".modal-overlay.playvideo").show();

        $( "#holderPopupBooking.playvideo" ).slideDown( "slow", function() {
            // Animation complete.
            $('#video')[0].play();
        });

        //let url = $(this).attr("data-fullimage");
        //console.log(url);
        //if(url){
            //$("#content_playvideo").html("<img src='"+url+"' class='img-fluid'>");
        //}

    })

    $("body").on("click","#closePopupPlayVideo", function(event){
        event.preventDefault();
        $( "#holderPopupBooking.playvideo" ).slideUp( "slow", function() {
            // Animation complete.
            $(".modal-overlay.playvideo").hide();
            video.pause();
            //$('#video').removeAttr('controls');
            //$('#video').load(); 
        });
    });


    /*
    $("body").on("click","#btnPlayVideo", function(event){
        event.preventDefault();
    })
    */
    /*
    $('#btnPlayVideo').on('click', function(){
        $('#video')[0].play();
        //$(this).hide();
        $(".holderInfoVideo").slideUp("slow");
    });
    */
  
    $('#video').on('play', function (e) {
        $(this).attr('controls','true');
    });

    /*
    let vid = document.getElementById("video");
    if(vid){
        vid.onpause = function() {
            $(".holderInfoVideo").slideDown("slow");
        };

        vid.onplay = function() {
            $(".holderInfoVideo").slideUp("slow");
        }

        vid.onended =  function() {
        
            $('#video').removeAttr('controls');
            $('#video').load(); 
        }
    }
    */

    /*
    
    */



    //Open features of neigbourhood
    $(".neighbourhood_features .feature h4").on("click",function(){

        if( !$(this).hasClass("current"))
        {
            $("body").on(".neighbourhood_features h4.current").find(".items").slideUp("slow");

            $(".neighbourhood_features .feature h4").each(function(){
                $(this).removeClass("current");
            })

            $(this).addClass("current");
            $(this).closest("div").find(".items").slideDown( "slow", function() {
                // Animation complete.
                ///$(this).removeClass("opened");
            });
        }else{
           
            $("body").on(".neighbourhood_features h4.current").find(".items").slideUp("slow");
            $(this).removeClass("current");
            
        }

        


    })

    $("#holder_form_booking .option_right, #holder_form_booking .option_left").each(function(){
        let name = $(this).find(".gfield_description").text();
        $(this).find("select").prepend("<option>"+name+"</option>");
        $(this).find("select option").each(function(index){
            if(index == 0)
            {
                $(this).prop('disabled', true);
                console.log(index) 
            }
           
        })
    })

    
    //-----------------------------------
    //After render the form
    //-----------------------------------
    jQuery(document).on('gform_post_render', function(event, form_id, current_page){
              
        //$(".broker_name ").appendTo(".are_you_working_whit_a_bloker");
        //if( $("body").find("#dinamic_div_insert").length == 0 ){
           // $( "<div id='dinamic_div_insert' class='gfield gfield--width-half  field_sublabel_below field_description_below'></div>" ).insertAfter( ".brokerage_name" );
       // }
    });

    //-----------------------------------
    //After submit form
    //-----------------------------------
    $(document).on("gform_confirmation_loaded", function (e, form_id) {
        // code to run upon successful form submission
        if( $("#form_register_exist").length == 1 && $("#form_register_exist").val() == form_id ){
            $(".registerForm .form_heading, .registerForm .title").hide();
            $(".registerForm #holder_form_booking").css({"position": "absolute", "top":"50%","left":"0%","transform":"translate(0%, -50%)","width":"100%" })
            $(".holderPopupBooking .registerForm").css({"position":"relative"});   
        }    
    });


    //Modal Gallery 
    // Open the Modal
    $("body").on("click",".gallery-full", function(){
        //$(".block").removeClass("gallery-actived");
        $(".parent_images").removeClass("gallery-actived");
        $(this).closest(".parent_images").addClass("gallery-actived");
        let title = $(this).attr("alt");
        let pos = $(this).attr("data-thumbnail");
        
        $("#myModal").show();
        $("body").addClass("noScrollbar");
        
        currentSlide(pos)
    })

    /*
    function openModalGallery(title) {
        document.getElementById("myModal").style.display = "block";
        document.body.style.overflow = 'hidden';
    }
    */
    $("body").on("click",".main_holder_gallery .close", function(){
        $("#myModal").hide();
        //$(".block").removeClass("gallery-actived");
        $(".parent_images").removeClass("gallery-actived");
        $(".MyCaroucel .mySlides").remove();
        $("body").removeClass("noScrollbar");
    })

    /*
    // Close the Modal
    function closeModalGallery() {
        document.getElementById("myModal").style.display = "none";
        document.body.style.overflow = '';
    }
    */

    $("body").on("click",".nav-gallery", function(){
        let direction = $(this).attr("data-direction");
        plusSlides(direction)
    })
  
    //var slideIndex = 1;
    //showSlides(slideIndex);
  
    // Next/previous controls
    function plusSlides(n) {
        n = parseInt(n);
        showSlides(slideIndex += n);
    }
  
    // Thumbnail image controls
    function currentSlide(n) {
        n = parseInt(n);
        showSlides(slideIndex = n);
    }


    function showSlides(n)
    {  
        let total = $("body").find(".gallery-actived").find(".gallery-full").length;

        //console.log(n);
        n = parseInt(n)

        let container = ".MyCaroucel";
        
        $(container+" .mySlides").hide();

        //let total = $(".holder_caroucel .column").length;
        
        if (n > total) {slideIndex = 1}
        if (n < 1) {slideIndex = total}
        
        //console.log("---------------------------------------")
        //console.log(total);
        //console.log("---------------------------------------")

        let url = $('.gallery-actived   *[data-thumbnail="'+slideIndex+'"]').attr("data-full");
        let title = $('.gallery-actived   *[data-thumbnail="'+slideIndex+'"]').attr("data-title");

        let isCreated = $("body").find(container).find("*[data-datafullitem="+slideIndex+"]").length == 0;
        if(isCreated)
        {
            let item = "<div class='mySlides' data-datafullitem="+slideIndex+">";
                item += "<img src='"+url+"' alt='' data-item='"+slideIndex+"' class='hover-shadow img-fluid'>";
                item += "<div class='numbertext'><div>"+title+"</div><div>"+slideIndex+" / "+total+"</div></div>";
                item += "</div>";

            $( container ).prepend( $(item) );    
        }else{
            //console.log("xxxxx")
        }

        $("*[data-datafullitem='"+slideIndex+"']").show();
    }


    let slideFeatureIndex = 1;
    $(".pagination_features").on("click","a", function(event){
        event.preventDefault();
        let direction = $(this).attr("data-direction");
        //alert(direction);
        plusSlidesFeatures(direction);
    })

    function plusSlidesFeatures(n) {
        n = parseInt(n);
        showSlidesFeatures(slideFeatureIndex += n);
    }

    function showSlidesFeatures(n)
    {  
        //console.log(n);
        n = parseInt(n)

        //let container = ".MyCaroucel";
        
        $(".item-features").hide();

        //let total = $(".holder_caroucel .column").length;
        let total = $("body").find(".item-features").length;

        if (n > total) {slideFeatureIndex = 1}
        if (n < 1) {slideFeatureIndex = total}
        
        console.log("---------------------------------------")
        console.log(total);
        console.log("---------------------------------------")
        console.log(slideFeatureIndex);
        /*
        let url = $('.holder_caroucel *[data-thumbnail="'+slideIndex+'"]').attr("data-full");
        let title = $('.holder_caroucel *[data-thumbnail="'+slideIndex+'"]').attr("data-title");

        let isCreated = $("body").find(container).find("*[data-datafullitem="+slideIndex+"]").length == 0;
        if(isCreated)
        {
            let item = "<div class='mySlides' data-datafullitem="+slideIndex+">";
                item += "<img src='"+url+"' alt='' data-item='"+slideIndex+"' class='hover-shadow img-fluid'>";
                item += "<div class='numbertext'><div>"+title+"</div><div>"+slideIndex+" / "+total+"</div></div>";
                item += "</div>";

            $( container ).prepend( $(item) );    
        }else{
            //console.log("xxxxx")
        }
        */
        $(".pagination_features .current").html(slideFeatureIndex);
        $("*[data-feature='"+slideFeatureIndex+"']").show();
    }



});
//мобильное устройство?
var win_w = $(window).width();
var win_h = $(window).height();
var isMobile = false;
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    isMobile = true;
}

if (isMobile == true || win_w < 980 || win_h < 600) {
    $('.animation').addClass('animated');
    $('<style>.animation,.animation *{-webkit-transition:0s all 0s!important;transition:0s all 0s!important;-webkit-animation-duration:0s!important;animation-duration:0s!important;-webkit-animation-delay:0s!important;animation-delay:0s!important}.section .site-nav.down,.section .site-nav.up{display:none!important}.section{min-height:600px; margin-top: -1px;}</style>').appendTo('head');
}

$(document).ready(function() {

    $(".fancy").fancybox();

    $(window).scroll(function() {
        if ($(window).scrollTop() > 150) {
            $(".fixed_header").show();
        } else {
            $(".fixed_header").hide();
        }
    });
    /*
    $(document).on('click', '.cascade-slider_item.now img', function(e){
    	e.preventDefault();
    	var Href = $(this).attr("href");
    	$.fancybox.open({
    		href: Href,
    		type: 'iframe',
    		padding: 5
    	});
    });
    $(document).on('click', '.cascade-slider_item.now .video', function(e){
    	e.preventDefault();
    	var Href = $(this).parent().find("img").attr("href");
    	$.fancybox.open({
    		href: Href,
    		type: 'iframe',
    		padding: 5
    	});
    });*/
    $('.video').click(function() {
        $(this).parent().find(".opacity").html('<iframe width="100%" height="100%" src="https://www.youtube.com/embed/' + $(this).data('video') + '?autoplay=1" frameborder="0" allowfullscreen></iframe>')
        $(this).parent().find(".opacity").css('opacity', '1');
        $(this).css('display', 'none');
    });

    $(".open_menu ul li a").on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });

    $(".cls").on("click", function() {
        $(this).closest('.q_open_close').toggleClass("active");
    });

    $(".fixed_header .right .btn").on("click", function(e) {
        e.preventDefault();
        $(".question a").trigger("click");
    });
    $(".fixed_header .toggle").on("click", function(e) {
        e.preventDefault();
        $("header .menu a").trigger("click");
    });


    $(".scrl").on("click", function() {
        $('html,body').animate({
                scrollTop: $(this).offset().top
            },
            'slow');
    });

    $(".info2 .tabs a").on("click", function() {
        var $this = $(this);
        $(".info2 .tabs a").removeClass("active");
        $this.addClass("active");
        var id = $this.attr("data-id");
        $(".info2 .tab_content > div").hide();
        $(".info2 #tab_" + id).show(500);
    });
    $(".info4 .tabs a").on("click", function() {
        var $this = $(this);
        $(".info4 .tabs a").removeClass("active");
        $this.addClass("active");
        var id = $this.attr("data-id");
        $(".info4 .tab_content > div").hide();
        $(".info4 #tabb_" + id).show(500);
    });

    var step1 = "";
    var step2 = "";
    var step3 = "";
    var step4 = "";

    $(".info12 .form .step1 span").on("click", function() {
        step1 = $(this).text();
        $(".step1").hide();
        $(".step2").show(1000);
    });
    $(".info12 .form .step2 span").on("click", function() {
        step2 = $(this).text();
        $(".step2").hide();
        $(".step3").show(1000);
    });
    $(".info12 .form .step3 span").on("click", function() {
        step3 = $(this).text();
        $(".step3").hide();
        $(".step4").show(1000);
    });
    $(".info12 .form .step4 span").on("click", function() {
        step4 = $(this).text();
        $(".step4").hide();
        $(".step5").show(1000);
    });

    $('#cascade-slider').cascadeSlider({});

    $('#cascade-slider2').cascadeSlider2({});

    /*
        $.validator.addMethod(
            "regex",
            function(value, element, regexp) {
                var re = new RegExp(regexp);
                return this.optional(element) || re.test(value);
            },
            "Please check your input."
        );

        $("header .form1 form").validate({
            rules: {
                phone: {
                    regex: /^[0-9-+ .()]+$/,
                    required: true
                }

            },
            submitHandler: function(form) {
                var phone = $("header .form1 form input[name='phone']").val();
                var subject = "Бесплатная консультация страхового брокера";
                $.ajax({
                    url: "ajax/mail.php",
                    type: "POST",
                    data: {
                        phone: phone,
                        subject: subject
                    },
                    success: function(msg) {
                        $("#tnx_btn").trigger("click");
                    }
                });
            }
        });

        $(".info1 .form form").validate({
            rules: {
                phone: {
                    regex: /^[0-9-+ .()]+$/,
                    required: true
                },
                name: {
                    required: true
                }

            },
            submitHandler: function(form) {
                var phone = $(".info1 .form form input[name='phone']").val();
                var name = $(".info1 .form form input[name='name']").val();
                var subject = "Заявка на звонок";
                $.ajax({
                    url: "ajax/mail.php",
                    type: "POST",
                    data: {
                        phone: phone,
                        name: name,
                        subject: subject,
                        step1: step1,
                        step2: step2,
                        step3: step3,
                        step4: step4
                    },
                    success: function(msg) {
                        $("#tnx_btn").trigger("click");
                    }
                });
            }
        });

        $(".info5 .block2 .left .form form").validate({
            rules: {
                phone: {
                    regex: /^[0-9-+ .()]+$/,
                    required: true
                },
                name: {
                    required: true
                }
            },
            submitHandler: function(form) {
                var phone = $(".info5 .block2 .left .form form input[name='phone']").val();
                var name = $(".info5 .block2 .left .form form input[name='name']").val();
                var subject = "Запись на консультацию к Елене";
                $.ajax({
                    url: "ajax/mail.php",
                    type: "POST",
                    data: {
                        phone: phone,
                        name: name,
                        subject: subject
                    },
                    success: function(msg) {
                        $("#tnx_btn").trigger("click");
                    }
                });
            }
        });

        $(".map .form form").validate({
            rules: {
                phone: {
                    regex: /^[0-9-+ .()]+$/,
                    required: true
                },
                name: {
                    required: true
                },
                question: {
                    required: true
                }
            },
            submitHandler: function(form) {
                var phone = $(".map .form form input[name='phone']").val();
                var name = $(".map .form form input[name='name']").val();
                var question = $(".map .form form textarea[name='question']").val();
                var subject = "Обратная связь";
                $.ajax({
                    url: "ajax/mail.php",
                    type: "POST",
                    data: {
                        phone: phone,
                        name: name,
                        question: question,
                        subject: subject
                    },
                    success: function(msg) {
                        $("#tnx_btn").trigger("click");
                    }
                });
            }
        });

        $(".map .form2 form").validate({
            rules: {
                phone: {
                    regex: /^[0-9-+ .()]+$/,
                    required: true
                },
                name: {
                    required: true
                },
                question: {
                    required: true
                }
            },
            submitHandler: function(form) {
                var phone = $(".map .form2 form input[name='phone']").val();
                var name = $(".map .form2 form input[name='name']").val();
                var question = $(".map .form2 form textarea[name='question']").val();
                var subject = "Обратная связь";
                $.ajax({
                    url: "ajax/mail.php",
                    type: "POST",
                    data: {
                        phone: phone,
                        name: name,
                        question: question,
                        subject: subject
                    },
                    success: function(msg) {
                        $("#tnx_btn").trigger("click");
                    }
                });
            }
        });

        $(".open_question .form form").validate({
            rules: {
                phone: {
                    regex: /^[0-9-+ .()]+$/,
                    required: true
                },
                name: {
                    required: true
                },
                question: {
                    required: true
                }
            },
            submitHandler: function(form) {
                var phone = $(".open_question .form form input[name='phone']").val();
                var name = $(".open_question .form form input[name='name']").val();
                var question = $(".open_question .form form textarea[name='question']").val();
                var subject = "Обратная связь";
                $.ajax({
                    url: "ajax/mail.php",
                    type: "POST",
                    data: {
                        phone: phone,
                        name: name,
                        question: question,
                        subject: subject
                    },
                    success: function(msg) {
                        $("#tnx_btn").trigger("click");
                    }
                });
            }
        });
        */
    function getURLParameter(name) {
        return decodeURIComponent((new RegExp('[?|&]' + name + '=' + '([^&;]+?)(&|#|;|$)').exec(location.search) || [, ""])[1].replace(/\+/g, '%20')) || null;
    }

    function run_geo(geo_url) {
        $.ajax({
            type: 'GET',
            url: geo_url,
            dataType: 'xml',
            success: function(xml) {
                $(xml).find('ip').each(function() {
                    var city = $(this).find('city').text();
                    var region = $(this).find('region').text();
                    if (city != region) {
                        var ipg = city + ', ' + region;
                    } else {
                        var ipg = city;
                    }
                    $('<input type="hidden" />').attr({
                        name: 'location',
                        class: 'location',
                        value: ipg
                    }).appendTo("form");
                });
            }
        });
    }
    $.get("http://ipinfo.io", function(response) {
        geo_url = 'http://ipgeobase.ru:7020/geo?ip=' + response.ip;
        run_geo(geo_url);
    }, "jsonp");
    utm = [];
    $.each(["utm_source", "utm_medium", "utm_campaign", "utm_term", 'source_type', 'source', 'position_type', 'position', 'added', 'creative', 'matchtype'], function(i, v) {
        $('<input type="hidden" />').attr({
            name: v,
            class: v,
            value: function() {
                if (getURLParameter(v) == undefined) return '-';
                else return getURLParameter(v)
            }
        }).appendTo("form")
    });
    $('<input type="hidden" />').attr({
        name: 'url',
        value: document.location.href
    }).appendTo("form");
    $('<input type="hidden" />').attr({
        name: 'title',
        value: document.title
    }).appendTo("form");

    $('input[name="name"]').blur(function() {
        if ($(this).val().length < 3) {
            $(this).addClass('error-input');
        }
    });
    $('input[name="name"]').focus(function() {
        $(this).removeClass('error-input');
    });

    $('input[name="phone"]').mask('+7 (999) 999-99-99');
    $('input[name="phone"]').blur(function() {
        if ($(this).val().length != 18) {
            $(this).addClass('error-input');
        }
    });
    $('input[name="phone"]').focus(function() {
        $(this).removeClass('error-input');
    });

    $('textarea').blur(function() {
        if ($(this).val().length < 3) {
            $(this).addClass('error-input');
        }
    });
    $('textarea').focus(function() {
        $(this).removeClass('error-input');
    });

    $('form').submit(function(e) {
        e.preventDefault();
        $(this).find('input[type="text"]').trigger('blur');
        $(this).find('textarea').trigger('blur');
        if (!$(this).find('input[type="text"]').hasClass('error-input') && !$(this).find('textarea').hasClass('error-input')) {
            var type = $(this).attr('method');
            var url = $(this).attr('action');
            var data = $(this).serialize();
            $.ajax({
                type: type,
                url: url,
                data: data,
                success: function() {
                    $("#tnx_btn").trigger("click");
                }
            });
        }
    });

    $("header .menu a").on("click", function(e) {
        e.preventDefault();
        $(".open_menu").toggle();
    });

    $("header .menu_phone").on("click", function(e) {
        e.preventDefault();
        $(".open_menu").toggle();
    });

    $(".open_menu .close a, .open_menu li a").on("click", function(e) {
        e.preventDefault();
        $(".open_menu").toggle();
    });

    $(".question a").on("click", function(e) {
        e.preventDefault();
        $(".open_question").toggle();
    });

    $(".mob_question a").on("click", function(e) {
        e.preventDefault();
        $(".open_question").toggle();
    });

    $(".open_question .close a").on("click", function(e) {
        e.preventDefault();
        $(".open_question").toggle();
    });

    $('.bxslider1').bxSlider({
        pager: true,
        controls: false
    });

    if ($(window).width() <= 800) {
        $('.info4 .tab_block .tab_content').bxSlider({
            pager: true,
            auto: true,
            adaptiveHeight: true,
            controls: false
        });
    }


    $('<figure><object data="ajax/map.html"></object></figure>').appendTo('#map');
    console.log('map.append');

});


//stabilization

function stabilize() {

    $('.section:not(.rewievs):not(:hidden)').each(function(index, el) {

        var eTop = $(this).offset().top;
        var posTop = eTop - $(window).scrollTop();

        if (posTop > -$(window).height() / 2 && posTop < $(window).height() / 2) {
            $("html, body").animate({
                scrollTop: $(this).offset().top
            }, 250);
            //console.log($(this).attr('class'));
        }

    });

}
$("html, body").on("scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove", function() {
    $("html, body").stop();
});
if (isMobile != true) {
    $(window).scroll(function() {

        clearTimeout($.data(this, 'scrollTimer'));

        $.data(this, 'scrollTimer', setTimeout(stabilize, 1500));

    });
}

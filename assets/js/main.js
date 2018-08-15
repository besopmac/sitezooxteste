/*-----------------------------------------------*/
/* --------- JS - LITTLE-TREX SCRIPT ----------- */
/*-----------------------------------------------*/

var app = {

	init : function(){

        app.loading();
        app.showMenu();
		app.scrollEasing();
        app.initPlugin();
        app.swipe();
        app.mapGoogle();
        app.preventZoomMap();
		app.mask();
		app.validacao();
        app.colorMenu();
        app.produtos();
        app.produtosOn();
	},


    // Loading paginas
    loading : function(){
       $(window).load(function() {
            $(".loader").fadeOut("slow");
        })
    },

    // Comportamento Menu
    showMenu : function(){
        $('#nav-wrapper').height($("#nav").height());
        $('#nav').affix({
            offset: { top: $('#nav').offset().top }
        });
    },

	// Animação scroll
	scrollEasing : function(){
        $('a[href^="#"]').on('click', function(event) {
        var target = $( $(this).attr('href') );
        if( target.length ) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 2000, 'easeInOutExpo');
        }

      });
	},
    // Timeline
    initPlugin : function(){
        window.onload = function() {
            skrollr.init({
             forceHeight: false,
             smoothScrolling: false,
             mobileCheck: function() {
                //hack - forces mobile version to be off
                return false;
                },
            edgeStrategy: 'set',
            easing: {
                WTF: Math.random,
                inverted: function(p) {
                    return 1-p;
                }
            }
            });
        }
    },

    // Swipe para smartphone
    swipe : function(){
        $("#depoimentoSlider,#numerosSlider,#produtosSlider,#topicosSlider").swiperight(function() {
            $(this).carousel('prev');
        });
        $("#depoimentoSlider,#numerosSlider,#produtosSlider,#topicosSlider").swipeleft(function() {
            $(this).carousel('next');
        });

    },


    // Mapa google
    mapGoogle : function(){
        // The latitude and longitude of your business / place
        var position = [-22.973380, -43.373810];

        function showGoogleMaps() {

            var latLng = new google.maps.LatLng(position[0], position[1]);

            var mapOptions = {
                zoom: 16, // initialize zoom level - the max value is 21
                streetViewControl: false, // hide the yellow Street View pegman
                scaleControl: true, // allow users to zoom the Google Map
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: latLng
            };

            map = new google.maps.Map(document.getElementById('googlemaps'),
                mapOptions);

            // Show the default red marker at the location
            marker = new google.maps.Marker({
                position: latLng,
                map: map,
                draggable: false,
                animation: google.maps.Animation.DROP
            });
        }

        google.maps.event.addDomListener(window, 'load', showGoogleMaps);
    },


    // Previne zoom do mapa ao scrollar com o mouse
    preventZoomMap : function(){

        // Ativar os eventos do mouse no click

        $('#googlemaps').addClass('scrolloff'); // Coloca os eventos do mouse para none no doc ready
        $('#contatoBox').on('click', function () {
            $('#googlemaps').removeClass('scrolloff'); // Coloca os eventos do mouse em true no click
        });

        // Retira os eventos do mouse quando o mesmo sai da area do mapa

        $("#googlemaps").mouseleave(function () {
            $('#googlemaps').addClass('scrolloff'); // Coloca os eventos do mouse para none quando ele sai da área do mapa
        });
    },


    // Máscara de telefone
    mask : function(){
        /* Máscara default */
        $.mask.definitions['~']='[123456789]';
        $("#telefone").mask("(99)~999-9999?9");

        $(document.body).on('keyup', '#telefone', function(event){
            var target, phone, element;
            target = $(this);
            phone = target.val().replace(/\D/g, '');

        });

    },


	// Validaçao formulario

	validacao : function(){
		$("#contact-form").validate({
            // debug: true,
            rules: {
				nome: {
                    required: true,
                    minlength: 3
                },
				empresa: {
                    required: false,
                    minlength: 3
                },
				telefone: {
                	required: false,
                    minlength: 7
                },
                email: {
                    required: true,
                    email: true
                },
				assunto: {
                    required: true,
                },
                mensagem: {
					required: false,
                    minlength: 10
                }

            },

            messages: {
				nome: {
                    required: "Digite seu nome.",
                    minlength: "Seu nome deve conter, no mínimo, 2 caracteres."
                },
				empresa: {
                    required: "Digite seu nome.",
                    minlength: "Empresa deve conter, no mínimo, 3 caracteres."
                },
				telefone: {
                	required: "Digite seu telefone.",
                    minlength: "Insira um telefone válido."
                },
                email: {
                    required: "Insira um e-mail.",
                    email: "Insira um e-mail válido."
                },
                assunto: {
                    required: "Escolha um Assunto.",
                    minlength: "O assunto do email deve conter, no mínimo, 5 caracteres."
                },
                mensagem: {
                	minlength: "Sua mensagem deve conter, no mínimo, 10 caracteres."
                }

            },

            errorPlacement: function(error, element) {

                error.css({
                    "color":"#B0E1F0",
                    "display": "block",
                    "font-size": "14px",
                    "white-space" : "nowrap",
                    "margin-top": "0px",
                    "font-weight" : "300",
                    "font-family": "'Avenir'"
                });

                element.css({
                    "border-bottom":"2px solid #B0E1F0",
                });

                if (element.attr("nome", "empresa", "telefone", "email", "assunto", "mensagem") ) {
			    	error.insertAfter(element);
			    }
            },

            submitHandler: function()
			{
				var data_form = $('#contact-form').serialize();
				$.ajax({
					url: 'assets/php/envia.php',
					type: 'POST',
					data: data_form,
					beforeSend: function(data)
					{
						$('.btn-form').html('Enviando...');
					},
					success: function (data)
				    {
						console.log(data);
						if (data.debug) {
						    console.log(data.debug);
						}
						var messageAlert = 'alert-' + data.type;
						var messageText = data.mensagem;
						var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable animated bounceIn"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
						if (messageText) {
						    $('#contact-form').find('.messages').html(alertBox);
						    $('.btn-form').html('Enviado!')
						}
					},
					complete: function ()
					{
						$('.btn-form').html('Enviar');
					}
				})

				return false;

			}
        });
	},

    // Mudança de cor Menu
    colorMenu : function(){
        var mainbottom = $('.box-cal-height').offset().top + $('.box-cal-height').height() - 130;
        var maintop = $('.box-cal-height-dois').offset().top + $('.box-cal-height-dois').height() - 130;

        // no scroll,
        $(window).on('scroll',function(){

            stop = Math.round($(window).scrollTop());
            if (stop > mainbottom) {
                $('.navbar-white').addClass('menu-change');
                $('.navbar-header').addClass('scrolling');
            } else {
                $('.navbar-white').removeClass('menu-change');
                $('.navbar-header').removeClass('scrolling');
           }

           back = Math.round($(window).scrollTop());
            if (back > maintop) {
                $('.navbar-white').removeClass('menu-change');
                $('.navbar-header').removeClass('scrolling');
            } else {

           }

        });
    },

    // Animação produtos
    produtos : function(){

        $("#groupOne").mouseover(function(){
            $(".group-two").fadeTo( "slow", 0.33 );
            $(".group-one").removeClass( 'fade-filter');
        });
        $("#groupOne").mouseout(function(){
            $(".group-two").fadeTo( "slow", 1 );
        });

        $("#groupTwo").mouseover(function(){
            $(".group-one").fadeTo( "slow", 0.33 );
            $(".group-two").removeClass( 'fade-filter');
        });
        $("#groupTwo").mouseout(function(){
            $(".group-one").fadeTo( "slow", 1 );
        });
    },

    produtosOn : function(){
        $("#groupOne").on( "click", function(){
            $(".group-two").addClass('fade-filter');
            $(".group-one").removeClass('fade-filter');
        });

        $("#groupTwo").on( "click", function(){
            $(".group-one").addClass('fade-filter');
            $(".group-two").removeClass('fade-filter');
        });
    }

}

$(document).ready(function() {
    app.init();
});

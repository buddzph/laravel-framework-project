jQuery(function($) {
    /*=============================================================
        Authour URI: www.binarytheme.com
        License: Commons Attribution 3.0
    
        http://creativecommons.org/licenses/by/3.0/
    
        100% To use For Personal And Commercial Use.
        IN EXCHANGE JUST GIVE US CREDITS AND TELL YOUR FRIENDS ABOUT US
       
        ========================================================  */
    /*==========================================
    CUSTOM SCRIPTS
    =====================================================*/

    // CUSTOM LINKS SCROLLING FUNCTION 

    $('a[href*=#]').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
       && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target
            || $('[name=' + this.hash.slice(1) + ']');
            if ($target.length) {
                var targetOffset = $target.offset().top;
                $('html,body')
                .animate({ scrollTop: targetOffset }, 800); //set scroll speed here
                return false;
            }
        }
    });


    /*==========================================
    VERTICAL SLIDER
    =====================================================*/

    $('ul.port li div.desc p a').click(function(evt) {
      evt.preventDefault();
    });
    $('ul.port li div.desc p').hide();
    $('ul.port li').hover(function() {
      $(this).find('p').stop().slideDown(500);
    },function() {
      $(this).find('p').stop().slideUp(500);
    });

    var winwidth = $( window ).width();

    //Carousel

    var total = $('div.port-wrapper ul.port').find('li').size();
    //$('div.port-wrapper').after('<p>'+total+'</p>');
    var rm = total % 3;
    if(winwidth <= 520){
        var dvider = 2;
        $('div.port-wrapper ul.port').find('li').addClass('mobiesize');
    }else{
        var dvider = 3;
        $('div.port-wrapper ul.port').find('li').removeClass('mobiesize');
    }
    
    if(rm != 0)
        total = total + (dvider - rm);
    
        var mul = ((total/dvider)-1) * 248;

    // console.log(mul);
    // console.log(total);

    var somethingelse,some,y;

    // go right
    $('div.port-ctrl div.right').click(function() {
      some = -parseInt($('ul.port li').css('top'));
      //$('div.port-wrapper').after(some+" ");
      somethingelse = -(some + 248);
      //alert(somethingelse);
      if(somethingelse >= -mul) {
        $('ul.port').find('li')
              .css('top',somethingelse);
      } else {
        $('ul.port').find('li')
            .css('top',0);
      }
    }); 

    // go left
    $('div.port-ctrl div.left').click(function() {
      some = parseInt($('ul.port li').css('top'));
      //$('div.port-wrapper').after(some+" ");
      somethingelse = -(some + 248);
      //alert(somethingelse);
      if(somethingelse <= -248) {
        $('ul.port').find('li')
            .css('top',-mul);
      } else {
        $('ul.port').find('li')
              .css('top',-somethingelse);
      }
    }); 

    /*==========================================
    END VERTICAL SLIDER
    =====================================================*/
  

    /*==========================================
    SLIDE SHOW  SCRIPTS BELOW
    =====================================================*/
    $(function () {

        var Page = (function () {

            var $navArrows = $('#nav-arrows'),
                $nav = $('#nav-dots > span'),
                slitslider = $('#slider').slitslider({
                    onBeforeChange: function (slide, pos) {

                        $nav.removeClass('nav-dot-current');
                        $nav.eq(pos).addClass('nav-dot-current');

                    }
                }),

                init = function () {

                    initEvents();

                },
                initEvents = function () {

                    // add navigation events
                    $navArrows.children(':last').on('click', function () {

                        slitslider.next();
                        return false;

                    });

                    $navArrows.children(':first').on('click', function () {

                        slitslider.previous();
                        return false;

                    });

                    $nav.each(function (i) {

                        $(this).on('click', function (event) {

                            var $dot = $(this);

                            if (!slitslider.isActive()) {

                                $nav.removeClass('nav-dot-current');
                                $dot.addClass('nav-dot-current');

                            }

                            slitslider.jump(i + 1);
                            return false;

                        });

                    });

                    // Select the radio button:
                    $(document).on('click', '.card', function(e){
                        e.preventDefault();
                        $(this).find('input.rbt-alias').prop('checked', true);
                        $('.card').removeClass('selected');
                        $(this).addClass('selected');
                    });

                };

            return { init: init };

        })();

        Page.init();


    });
    
    
    /*==========================================
    SUBSCRIPTION SUBMIT
    =====================================================*/
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.subscription-verification-cellnum-submit-button').click(function() {
    	//var cell = $('#cellnum').val();
        var cell = cellnum;
    	var url = 'verification';
		$.post( url, { cellnum: cell, serviceid: serviceid, servicename: servicename, type: type })
			.done(function( data ) {
                    if(data == 'success'){

                        $('#notification').removeClass('alert alert-danger');
                        $('#notification').addClass('alert alert-success text-left');
                        $('#notification').empty();
                        $('#notification').append('<p><b>Success!</b> Verification sent successfully!</p>');
                        $('#notification').show();

                        $('.verification-form-step-one').fadeOut();
                        $('.resend-verification-button').fadeIn();
                        $('.verification-form-step-two').fadeIn();

                        setTimeout(function() {

                               $('#notification').hide();

                        }, 10000);

                        // jQuery selector to get an element
                        var query = $('#ringbackwrapper');
                         
                        // check if element is Visible
                        var isVisible = query.is(':visible');
                         
                        if (isVisible === true) {
                           query.children().hide();
                           $('#verificationwrapper').appendTo(query);
                           query.css('background-image', 'none');
                        } else {
                           $('#verificationwrapper').appendTo($('#serviceverificationwrapper'));
                        }

                    }else{

                        $('#notification').removeClass('alert alert-success');
                        $('#notification').addClass('alert alert-danger text-left');
                        $('#notification').empty();
                        $('#notification').append('<p><b>Ooops!</b> Invalid Globe Number!</p>');
                        $('#notification').show();

                        $('#notificationrbt').removeClass('alert alert-success');
                        $('#notificationrbt').addClass('alert alert-danger text-left');
                        $('#notificationrbt').empty();
                        $('#notificationrbt').append('<p><b>Ooops!</b> Invalid Globe Number!</p>');
                        $('#notificationrbt').show();

                        setTimeout(function() {

                               $('#notification').hide();
                               $('#notificationrbt').hide();

                        }, 10000);

                        return false;

                    }

                    // alert(data);
				}
				
				
			).fail(function() {
			
			
    			alert( "error" );
  			
  			
  			});
		
	});

    $('.resend-verification-button').click(function() {
        var cell = cellnum;
        var url = 'verification';
        $.post( url, { cellnum: cell, serviceid: serviceid, servicename: servicename, type: type })
            .done(function( data ) {
                    if(data == 'success'){
                        //alert('Verification sent successfully!');

                        $('#notification').removeClass('alert alert-danger');
                        $('#notification').addClass('alert alert-success text-left');
                        $('#notification').empty();
                        $('#notification').append('<p><b>Success!</b> Verification re-sent successfully!</p>');
                        $('#notification').show();

                        $('.resend-verification-button').prop('disabled', true);
                        setTimeout(function() {

                               $('.resend-verification-button').prop('disabled', false);
                               $('#notification').hide();

                        }, 10000);
                        $('#resendlink').hide().delay(10000).show(0);

                        $('#verificationcode').val('');
                    }else{
                        alert('Not a valid Globe number!');
                        return false;
                    }

                    // alert(data);
                }
                
                
            ).fail(function() {
            
            
                alert( "error" );
            
            
            });
        
    });

    //$('#resendlink').click(function() {

    resendverificationcode = function () {
        var cell = cellnum;
        var url = 'verification';
        $.post( url, { cellnum: cell, serviceid: serviceid, servicename: servicename, type: type })
        .done(function( data ) {
                if(data == 'success'){
                    
                    $('#notification').removeClass('alert alert-danger');
                    $('#notification').addClass('alert alert-success text-left');
                    $('#notification').empty();
                    $('#notification').append('<p><b>Success!</b> Verification re-sent successfully!</p>');
                    $('#notification').show();

                    $('.resend-verification-button').prop('disabled', true);
                    setTimeout(function() {

                           $('.resend-verification-button').prop('disabled', false);
                           $('#notification').hide();

                    }, 10000);
                    $('#resendlink').hide().delay(10000).show(0);

                    $('#verificationcode').val('');
                }else{
                    alert('Not a valid Globe number!');
                    return false;
                }

                // alert(data);
            }
            
            
        ).fail(function() {
        
        
            alert( "error" );
        
        
        });
    };

    closemodalsubscription = function () {
        window.location.href = '/';
    }    
        
    //});
    
    $('#confirmverification').click(function() {
    	var cell = cellnum;
    	var confirmverificationcode = $('#verificationcode').val();
        var url = 'confirmverification';
    	// console.log(cell);
    	
		$.post( url, { cellnum: cell, confirmverificationcode: confirmverificationcode, serviceid: serviceid, servicename: servicename, type: type })
			.done(function( data ) {
				if(data){
                    $('.modal-content').empty();
                    $('.modal-content').append('<button type="button" id="btnconfirmclose" onclick="closemodalsubscription()" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>');
                    $('.modal-content').append('<center><h2>Thank you! Subscription<br />successful!</h2>You will receive a confirmation shortly.<br /><br /><br /></center>');

                }else{
                    $('#notification').removeClass('alert alert-success');
                    $('#notification').addClass('alert alert-danger text-left');
                    $('#notification').empty();
                    $('#notification').append('<p><b>Failed!</b> Not a valid verification number!</p>');
                    $('#notification').show();

                    setTimeout(function() {

                           $('#notification').hide();
                           $('#notificationrbt').hide();

                    }, 10000);
                    return false;
                }
			}
		);
		
	});

    $(".numberonly").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $('#rbtopenlistbtn').click(function(){
        $('.resend-verification-button').fadeOut();
        $('.verification-form-step-two').fadeOut();
        $('#ringbackwrapper').children().show();
        $('#modal-footer').hide();
    })
    
});

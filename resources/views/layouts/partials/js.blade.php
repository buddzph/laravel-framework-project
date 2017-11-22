  <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
  <!-- CORE JQUERY LIBRARY -->
  <script src="{{asset('js/jquery.js')}}"></script>
  <!-- CORE BOOTSTRAP LIBRARY -->
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <!-- SLIDESHOW LIBRARY -->
  <script src="{{asset('js/modernizr.custom.79639.js')}}"></script>
  <script src="{{asset('js/jquery.ba-cond.min.js')}}"></script>
  <script src="{{asset('js/jquery.slitslider.js')}}"></script>
  <!-- CUSTOM SCRIPT-->   
  <script src="{{asset('js/custom.js')}}"></script>

<script type="text/javascript">
  // SERVICE
  var serviceid;
  var servicename;
  var type;
  var cellnum;

  // RBT
  var rbtid;
  var rbtalias;

  function submitservice(serviceid, servicename, type){
    window.serviceid = serviceid;
    window.servicename = servicename;
    window.type = type;

    $('#verificationwrapper').appendTo($('#serviceverificationwrapper'));

    $('.verification-form-step-one').fadeIn();
    $('.resend-verification-button').fadeOut();
    $('.verification-form-step-two').fadeOut();
    $('#notification').hide();
    //alert(servicename);

  }

  function verifycellnum(){
    window.cellnum = $('#cellnum').val();

    //alert(servicename);
  }

  function rbtselected(rbtid, rbtalias, imageid){
    /*window.rbtid = rbtid;
    window.rbtalias = rbtalias;
    window.rbttype = 'rbt';*/

    window.serviceid = rbtid;
    window.servicename = rbtalias;
    window.type = 'rbt';

    for(i = 0; i < 500; i++) { 
      if($( "#rbtimage" + i ).length){
        $( "#rbtimage" + i ).removeClass( "lowopacity" );
      }

      if($( "#priceid" + i ).length){
        $( "#priceid" + i ).removeClass( "showhide" );
      }

      if($( "p#data" + i ).length){
        $( "p#data" + i ).removeClass( "datadisplay" );
      }
    }

    $( "#rbtimage" + imageid ).addClass( "lowopacity" );
    $( "#priceid" + imageid ).addClass( "showhide" );

    $("p#data" + imageid).addClass('datadisplay');

    $('#modal-footer').hide();

    $('#modal-footer').fadeIn();
    
    $('#rbtcellnum').focus();
    $('#rbtcellnum').select();
    $('#rbtcellnum').trigger('focus');
    $('#rbtcellnum').trigger('click');
  }

  function rbtverifycellnum(){
    window.cellnum = $('#rbtcellnum').val();

    //alert(servicename);
  }
  
</script>
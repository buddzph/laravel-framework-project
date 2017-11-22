<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=yes"/>
  <title>MusicHQ</title>
  <!--link rel="shortcut icon" href="{{ config('app.icon_url').'kudos-logo.png'}}"-->
  <!--stylesheets-->
  @include('layouts.partials.css')

</head>
<body>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90764010-1', 'auto');
  ga('send', 'pageview');

</script>

  <div class="container-fluid full-box">
    <div class="row">
      <div class="col-lg-12 rp">
        <div class="container-fluid main-box">
          <div class="row">
            <div class="col-lg-12 rp">
              @include('pages.nav')
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 rp">
              @yield('main_content')
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12 rp">
        @include('layouts.partials.footer')
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">

      </div>
    </div>
  </div>
  @include('pages.modals')
  @include('layouts.partials.js')
</body>
</html>

<?php
if(isset($_GET['subscription']) and !empty($_GET['subscription'])):
  ?>

  <script type="text/javascript">
    

      var slideid = 0;
    
  </script>

<?php

  switch ($_GET['subscription']) {

      case 'nakaka-miss':
          ?>

          <script type="text/javascript">
            $(document).ready(function(){

              var executefunction = submitservice('42', 'Nakakamiss', 'service');

              slideid = 42;

              $('#subscription-verification-modal').modal({
                 show: true,
                 open: function() {
                    // some functions here
                 }
              });

            })
            
          </script>

<?php
	break;
	case 'dahilsayo':
?>
 		<script type="text/javascript">
            $(document).ready(function(){

              var executefunction = submitservice('43', 'Dahil Sayo', 'service');

              slideid = 43;

              //alert(slideid);

              $('#subscription-verification-modal').modal({
                 show: true,
                 open: function() {
                    // some functions here
                 }
              });
            })

    </script>
          
<?php
	break;
	case 'intheend':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('44', 'In The End', 'service');

          slideid = 44;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>
      
      
<?php
	break;
	case 'shapeofyou':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('45', 'Shape Of You', 'service');

          slideid = 45;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>
      

<?php
	break;
	case 'nogames':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('46', 'No Games', 'service');

          slideid = 46;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>
      
      
<?php
	break;
	case 'pasipsipnaman':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('47', 'Pasipsip Naman', 'service');

          slideid = 47;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>
      
      
<?php
	break;
	case 'kahitdinatayo':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('48', 'Kahit Di Na Tayo', 'service');

          slideid = 48;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>
      
        
<?php
	break;
	case 'nanghihinayang':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('49', 'Nanghihinayang', 'service');

          slideid = 49;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>
      
      
<?php
	break;
	case 'masayaakosayo':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('50', 'Masaya Ako Sayo', 'service');

          slideid = 50;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>
      
      
<?php
	break;
	case 'perfect':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('51', 'Perfect', 'service');

          slideid = 51;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>
      
      
      
<?php
	break;
	case 'hiling':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('52', 'Hiling', 'service');

          slideid = 52;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>


<?php
	break;
	case 'hindiparasayo':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('53', 'Hindi Para Sayo', 'service');

          slideid = 53;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>
      
      
      
<?php
	break;
	case 'dontknowwhattodo':
?>

	<script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('54', "Don't Know What To Do", 'service');

          slideid = 54;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>


<?php
	break;
  case 'arawaraw':
?>

  <script type="text/javascript">
        $(document).ready(function(){

          var executefunction = submitservice('55', "Araw Araw", 'service');

          slideid = 55;

          $('#subscription-verification-modal').modal({
             show: true,
             open: function() {
                // some functions here
             }
          });

        })
        
      </script>


<?php
  break;
  case 'haring-palusot':
  ?>
  
    <script type="text/javascript">
          $(document).ready(function(){
  
            var executefunction = submitservice('56', "Hari Ng Palusot (May Butas Pa)", 'service');
  
            slideid = 56;
  
            $('#subscription-verification-modal').modal({
               show: true,
               open: function() {
                  // some functions here
               }
            });
  
          })
          
        </script>
  
  
  <?php
  break;
  case 'minsan':
  ?>
  
    <script type="text/javascript">
          $(document).ready(function(){
  
            var executefunction = submitservice('57', "Minsan", 'service');
  
            slideid = 57;
  
            $('#subscription-verification-modal').modal({
               show: true,
               open: function() {
                  // some functions here
               }
            });
  
          })
          
        </script>
  
  
  <?php
  break;
  case 'nakakamiss':
  ?>
  
    <script type="text/javascript">
          $(document).ready(function(){
  
            var executefunction = submitservice('58', "Nakakamiss", 'service');
  
            slideid = 58;
  
            $('#subscription-verification-modal').modal({
               show: true,
               open: function() {
                  // some functions here
               }
            });
  
          })
          
        </script>
  
  
  <?php
  break;
  case 'sana-di-nalang-chorus':
  ?>
  
    <script type="text/javascript">
          $(document).ready(function(){
  
            var executefunction = submitservice('59', "Sana Di Na Lang Chorus", 'service');
  
            slideid = 59;
  
            $('#subscription-verification-modal').modal({
               show: true,
               open: function() {
                  // some functions here
               }
            });
  
          })
          
        </script>
  
  
  <?php
  break;
  case 'darating':
  ?>
  
    <script type="text/javascript">
          $(document).ready(function(){
  
            var executefunction = submitservice('60', "Darating", 'service');
  
            slideid = 60;
  
            $('#subscription-verification-modal').modal({
               show: true,
               open: function() {
                  // some functions here
               }
            });
  
          })
          
        </script>
  
  
  <?php
  break;
	default:
	//code to be executed if n is different from all labels;
	}
endif;

?>


<?php
if(isset($_GET['subscription']) and !empty($_GET['subscription'])):
  ?>

<script type="text/javascript">
            $(document).ready(function(){
              setTimeout(function() {

                  $('.sl-slides-wrapper div.sl-slide').css('display', 'none');
                  $('.sl-slides-wrapper div#slideid-' + slideid).css('display', 'block');

              }, 1000);

              
            })

    </script>

<?php endif; ?>
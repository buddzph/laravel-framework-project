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
  switch ($_GET['subscription']) {

      case 'nakakamiss':
          ?>

          <script type="text/javascript">
            $(document).ready(function(){

              var executefunction = submitservice('42', 'Nakakamiss', 'service');

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

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
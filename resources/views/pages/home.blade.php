@extends('layouts.main_layout')

@section('main_content')
     <div class="wrapper">
       @include('pages.content')
       <!--SPACE ADJUSTMENT SECTION -->
       <div  id="space" ></div>
       <!--END SPACE ADJUSTMENT SECTION -->
       <!--WELCOME SECTION -->
       <div class="text-center hidden" id="subscription-section">

        <h1>Subscribe now!</h1>

        <!--MIN SUBSCRIPTION FORM-->

        <div class="row">
          <div class="col-lg-4"></div>
          <div class="col-lg-4">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Insert cellnum (09xxxxxxxxx)">
              <span class="input-group-btn">
                <button class="btn btn-success" type="button">Go!</button>
              </span>
            </div>
          </div>
          <div class="col-lg-4"></div>
        </div>
      </div>

      <!--END WELCOME SECTION -->
   </div>
@stop
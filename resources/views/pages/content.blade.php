 
 <!-- SLIDE SECTION -->
   <div class="container-fluid" id="header-section">
    <div class="row centered" >
      <div class="col-md-12">
    
      <div class="demo-1">  

        <div id="slider" class="sl-slider-wrapper">

          <div class="sl-slider" data="">


          <?php 

          $artistarray = array('jennylynmercado', 'myrtlesarrosa', 'silentsanctuary');

          if(isset($_GET['artist']) and in_array($_GET['artist'], $artistarray)):

            // NOTHING TO DO

          else:

              foreach ($services as $key => $value) {
                 $serviceid = $value['id'];
                 $servicename = $value['name'];
                 $type = $value['type'];
                 $bg_image = $value['bg_image'];
                 $expcontent = explode('|', $value['content']);
                 $servicecontenttext = $expcontent[0];
                 $servicecontentcss = $expcontent[1];
                 $servicecontentbutton = $expcontent[2];
                 $servicecontentdataorientation = $expcontent[3];
                 $servicecontentdataslice1rotation = $expcontent[4];
                 $servicecontentdataslice2rotation = $expcontent[5];
                 $servicecontentdataslice1scale = $expcontent[6];
                 $servicecontentdataslice2scale = $expcontent[7];
                 ?>

                  <div class="sl-slide bg-1 <?php echo $servicecontentcss; ?>" data-orientation="<?php echo $servicecontentdataorientation; ?>" data-slice1-rotation="<?php echo $servicecontentdataslice1rotation; ?>" data-slice2-rotation="<?php echo $servicecontentdataslice2rotation; ?>" data-slice1-scale="<?php echo $servicecontentdataslice1scale; ?>" data-slice2-scale="<?php echo $servicecontentdataslice2scale; ?>">
                    <div class="sl-slide-inner" style="background-image: url(<?php echo $bg_image; ?>);">
                      <h2><?php echo $servicename; ?></h2>
                      <blockquote><p><?php echo $servicecontenttext; ?></p><cite><a href="javascript void(0);" onclick="submitservice('<?php echo $serviceid ?>', '<?php echo $servicename ?>', '<?php echo $type ?>')" class="btn btn-default subscription-button" data-toggle="modal" data-target="#subscription-verification-modal"><?php echo $servicecontentbutton; ?></a></cite></blockquote><br/>
                    </div>
                  </div>

                 <?php
              }

          endif;

          $rbtbg = 'background-image: url(img/music-03.jpg);';

          if(isset($_GET['artist']) and $_GET['artist'] == 'jennylynmercado'):

            $rbtbg = 'background-image: url(img/JennylynMusicHQ.png);';

          elseif(isset($_GET['artist']) and $_GET['artist'] == 'myrtlesarrosa'):

            $rbtbg = 'background-image: url(img/Myrtle Sarrosa_MusicHQ.png);';

          elseif(isset($_GET['artist']) and $_GET['artist'] == 'silentsanctuary'):
            
            $rbtbg = 'background-image: url(img/Silent Sancstuary MUSICHQ.png);';

          endif;
          ?>

           <div class="sl-slide bg-5 slide-rbt" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
              <div class="sl-slide-inner" style="<?php echo $rbtbg; ?>">
                          <!--<div class="deco" data-icon="R"></div>-->
                <h2>Ringback Tones</h2>
                <blockquote><p>Check out our wide variety of Ringbacks</p><cite><a id="rbtopenlistbtn" class="btn btn-default subscription-button" data-toggle="modal" data-target="#subscription-choose-modal">Subscribe to Service</a></cite></blockquote> <br />
              </div>
            </div>
            
            <?php
             /*
            
            <div class="sl-slide bg-1 slide-brunomars" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                      <div class="sl-slide-inner">
                  <h2>Bruno Mars</h2>
                  <blockquote><p>Get a chance to win tickets to his concert in Vancouver, Canada!</p><cite><a class="btn btn-default subscription-button" data-toggle="modal" data-target="#subscription-verification-modal">Subscribe to Promo</a></cite></blockquote><br/>
                </div>
            </div>

            <div class="sl-slide bg-2 slide-lovepack" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
              <div class="sl-slide-inner">
                          <!--<div class="deco" data-icon="I"></div>-->
                <h2>Lovepack</h2>
                <blockquote><p>Get weekly Bruno Mars love songs!</p><cite><a class="btn btn-default subscription-button" data-toggle="modal" data-target="#subscription-verification-modal">Subscribe to Service</a></cite></blockquote> <br />
              </div>
            </div>
      
            <div class="sl-slide bg-3 slide-music" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
              <div class="sl-slide-inner">
                      <!--    <div class="deco" data-icon="N"></div>-->
                <h2>Music</h2>
                <blockquote><p>Jam to Bruno Mars' hits daily!</p><cite><a class="btn btn-default subscription-button" data-toggle="modal" data-target="#subscription-verification-modal">Subscribe to Service</a></cite></blockquote> <br />
              </div>
            </div>
      
            <div class="sl-slide bg-4 slide-karaokeidol" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
              <div class="sl-slide-inner">
                          <!--<div class="deco" data-icon="A"></div>-->
                <h2>Karaoke Idol</h2>
                <blockquote><p>Be the next Bruno Mars!</p><cite><a class="btn btn-default subscription-button" data-toggle="modal" data-target="#subscription-verification-modal">Subscribe to Service</a></cite></blockquote>
                        <br />
              </div>
            </div>
      
            <div class="sl-slide bg-5 slide-rbt" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
              <div class="sl-slide-inner">
                          <!--<div class="deco" data-icon="R"></div>-->
                <h2>Ringback Tones</h2>
                <blockquote><p>Check out our wide variety of Bruno Mars Ringbacks</p><cite><a class="btn btn-default subscription-button" data-toggle="modal" data-target="#subscription-choose-modal">Subscribe to Service</a></cite></blockquote> <br />
              </div>
            </div>
          */
          ?>


          </div><!-- /sl-slider -->
    
          <nav id="nav-arrows" class="nav-arrows">
            <span class="nav-arrow-prev">Previous</span>
            <span class="nav-arrow-next">Next</span>
          </nav>

		
		<!-- NAV DOTS 
          <nav id="nav-dots" class="nav-dots">
            <span class="nav-dot-current"></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </nav>
		-->


        </div>
        </div>
        
        
        
        
      </div>                    
  </div>
</div>
<!--END SLIDE SECTION -->

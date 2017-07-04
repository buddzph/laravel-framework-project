 <!--MODAL SUBSCRIPTION CHOOSE RINGBACK -->
 <div class="modal fade rbt-choose" id="subscription-choose-modal"  role="dialog">
   <div class="modal-dialog" role="document">
     <div class="modal-content" id="ringbackwrapper">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="nm">Choose a ringback tone</h4>
       </div>
       <div class="modal-body">
         <div class="container-fluid">
           <div class="row">
             <div class="col-lg-12">
               <div class="site__wrapper">




                <div class="port-wrapper">
                  <ul class="port">

                      <?php

                       //dd($alias);
                       $cntid = 0;
                       foreach ($alias as $key => $value) {
                          $cntid++;
                          $rbtid = $value['id'];
                          $rbtalias = $value['keyword'];
                          $rbtcontent = $value['content'];
                          $rbttitle = $value['title'];
                          $type = $value['type'];
                          $artist = $value['artist'];
                          //$expcontent = explode('|', $value['content']);
                          $expcontent = $value['content'];
                          //$rbtcontenttext = $expcontent[0];
                          $rbtcontentcss = $expcontent[0];
                          //$rbtcontentdetails = $expcontent[2];
                          //$rbtimage = $expcontent[2];
                          $rbtimage = $value['bg_image'];
                          $rbttariff = $value['tariff'];
                          $rbtexpiry = $value['expiry'];

                          ?>

                          <li>
                            <img src="<?php echo $rbtimage; ?>" style="width: 162px;" />
                            <div class="desc">
                              <h4><b><?php echo $rbttitle; ?></b></h4>
                              <p id="data<?php echo $cntid; ?>"><b>By:</b> <?php echo $artist; ?><br />
                                <?php
                                if($rbttariff == 0):
                                  echo 'FREE for ' . $rbtexpiry . ' Days';
                                else:
                                  echo $rbttariff . ' Pesos for ' . $rbtexpiry . ' Days';
                                endif;
                                ?>
                                <br />
                                <span style="text-align: center;"><a href="javascript: void(0);" class="btn btn-success" style="cursor: pointer;" onclick="rbtselected('<?php echo $rbtid ?>', '<?php echo $rbtalias ?>', '<?php echo $cntid; ?>')">SUBSCRIBE NOW!</a></span>
                              </p>
                            </div>
                          </li>

                          <!--li><img src="<?php echo $rbtimage; ?>" id="rbtimage<?php echo $cntid; ?>" />
                              <div class="desc">
                                <h4><?php echo $rbttitle; ?></h4>
                                <p>
                                  <b>Artist:</b> <?php echo $artist; ?>
                                      <div class="contentprice" id="priceid<?php echo $cntid; ?>">
                                       <b><?php
                                          if($rbttariff == 0):
                                            echo 'FREE for ' . $rbtexpiry . ' Days';
                                          else:
                                            echo $rbttariff . ' Pesos for ' . $rbtexpiry . ' Days';
                                          endif;
                                       ?></b>
                                     </div>
                                  <a href="javascript: void(0);" style="cursor: pointer;" onclick="rbtselected('<?php echo $rbtid ?>', '<?php echo $rbtalias ?>', '<?php echo $cntid; ?>')">Subscribe Now!</a>
                                </p>
                              </div>
                          </li-->

                          <?php /* first design 

                          <div class="grid">
                             <div class="card">
                               <div class="card__image">
                                 <img src="<?php echo $rbtimage; ?>" id="rbtimage<?php echo $cntid; ?>" alt="" style="width: 165px;">

                                 <div class="card__overlay <?php //echo $rbtcontentcss; ?>">
                                   <div class="card__overlay-content">
                                     <a href="javascript: void(0);" style="cursor: pointer;" onclick="rbtselected('<?php echo $rbtid ?>', '<?php echo $rbtalias ?>', '<?php echo $cntid; ?>')" class="card__title"><?php echo $rbttitle; ?></a>
                                     <div class="songartist">Artist: <?php echo $artist; ?></div>
                                     <div class="contentprice" id="priceid<?php echo $cntid; ?>">
                                       <b><?php
                                          if($rbttariff == 0):
                                            echo 'FREE for ' . $rbtexpiry . ' Days';
                                          else:
                                            echo 'PHP <span style="color: red;">' . $rbttariff . '</span> Pesos for <span style="color: red;">' . $rbtexpiry . '</span> Days';
                                          endif;
                                       ?></b>
                                     </div>
                                   </div>
                                 </div>

                               </div>
                             </div>
                           </div>

                           */ ?>

                        <?php
                       }
                       ?>

                    <?php /*
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More1!</a></p></div></li>
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More2!</a></p></div></li>
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More3!</a></p></div></li>
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More4!</a></p></div></li>
                    <!--Row 2-->
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More5!</a></p></div></li>
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More6!</a></p></div></li>
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More7!</a></p></div></li>
                     <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More8!</a></p></div></li>
                    <!-- Row new -->
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More9!</a></p></div></li>
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More10!</a></p></div></li>
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More11!</a></p></div></li>
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More12!</a></p></div></li>
                    <!--Row 2-->
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More13!</a></p></div></li>
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More14!</a></p></div></li>
                    <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More15!</a></p></div></li>
                     <li><img src="http://placehold.it/150x247" /><div class="desc"><h4>Some Text</h4><p>Grumpy wizards make toxic brew..<a href="#">More16!</a></p></div></li>
                    */ ?>
                  </ul>
                  <div class="port-ctrl">
                    <div class="left btn btn-danger"><< Previous</div>
                    <div class="right btn btn-danger">Next >></div>
                  </div>
                </div>


               
               <?php
               /*

               //dd($alias);
               $cntid = 0;
               foreach ($alias as $key => $value) {
                  $cntid++;
                  $rbtid = $value['id'];
                  $rbtalias = $value['keyword'];
                  $rbtcontent = $value['content'];
                  $rbttitle = $value['title'];
                  $type = $value['type'];
                  $artist = $value['artist'];
                  //$expcontent = explode('|', $value['content']);
                  $expcontent = $value['content'];
                  //$rbtcontenttext = $expcontent[0];
                  $rbtcontentcss = $expcontent[0];
                  //$rbtcontentdetails = $expcontent[2];
                  //$rbtimage = $expcontent[2];
                  $rbtimage = $value['bg_image'];
                  $rbttariff = $value['tariff'];
                  $rbtexpiry = $value['expiry'];

                  ?>

                  <div class="grid">
                     <div class="card">
                       <div class="card__image">
                         <img src="<?php echo $rbtimage; ?>" id="rbtimage<?php echo $cntid; ?>" alt="" style="width: 165px;">

                         <div class="card__overlay <?php //echo $rbtcontentcss; ?>">
                           <div class="card__overlay-content">
                             <a href="javascript: void(0);" style="cursor: pointer;" onclick="rbtselected('<?php echo $rbtid ?>', '<?php echo $rbtalias ?>', '<?php echo $cntid; ?>')" class="card__title"><?php echo $rbttitle; ?></a>
                             <div class="songartist">Artist: <?php echo $artist; ?></div>
                             <div class="contentprice" id="priceid<?php echo $cntid; ?>">
                               <b><?php
                                  if($rbttariff == 0):
                                    echo 'FREE for ' . $rbtexpiry . ' Days';
                                  else:
                                    echo 'PHP <span style="color: red;">' . $rbttariff . '</span> Pesos for <span style="color: red;">' . $rbtexpiry . '</span> Days';
                                  endif;
                               ?></b>
                             </div>
                           </div>
                         </div>

                       </div>
                     </div>
                   </div>

                  <?php
               }

               */
               ?>

               <?php
               /*
                 <div class="grid">
                   <div class="card">
                     <div class="card__image">
                       <img src="https://unsplash.it/400/608?image=123" alt="">

                       <div class="card__overlay card__overlay--indigo">
                         <div class="card__overlay-content">
                           <a href="#0" class="card__title">Talking to the Moon</a>
                           <!--input type="radio" name="rbt_alias" class="rbt-alias notvs" value="rbt1"-->
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="grid">
                   <div class="card">
                     <div class="card__image">
                       <img src="https://unsplash.it/400/608?image=100" alt="">

                       <div class="card__overlay card__overlay--indigo">
                         <div class="card__overlay-content">
                           <a href="#0" class="card__title">Treasure</a>
                           <!--input type="radio" name="rbt_alias" class="rbt-alias notvs" value="rbt1"-->
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="grid">
                   <div class="card">
                     <div class="card__image">
                       <img src="https://unsplash.it/400/300?image=200" alt="">

                       <div class="card__overlay card__overlay--indigo">
                         <div class="card__overlay-content">
                           <a href="#0" class="card__title">24K Magic</a>
                           <!--input type="radio" name="rbt_alias" class="rbt-alias notvs" value="rbt1"-->
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="grid">
                   <div class="card">
                     <div class="card__image">
                       <img src="https://unsplash.it/400/300?image=300" alt="">

                       <div class="card__overlay card__overlay--indigo">
                         <div class="card__overlay-content">

                           <a href="#0" class="card__title">The Lazy Song</a>
                           <!--input type="radio" name="rbt_alias" class="rbt-alias notvs" value="rbt1"-->
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>

                 <div class="grid">
                   <div class="card">
                     <div class="card__image">
                       <img src="https://unsplash.it/400/300?image=400" alt="">

                       <div class="card__overlay card__overlay--blue">
                         <div class="card__overlay-content">
                           <a href="#0" class="card__title">Versace on the Floor</a>
                           <!--input type="radio" name="rbt_alias" class="rbt-alias notvs" value="rbt1"-->
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>

                  */
                 ?>

               </div><!-- @end site__wrapper -->

             </div>
           </div>
         </div>
       </div>
       <div class="modal-footer" id="modal-footer" style="display: none;">
          <div id="notificationrbt" style="display: none;"></div>
         <div class="form-group">
           <div class="row">
             <div class="col-lg-8 col-md-8 col-xs-12 col-sm-8">
               <input type="text" name="rbtcellnum" id="rbtcellnum" maxlength="11" class="numberonly form-control input-verify-cellnum" placeholder="11-digit cellphone # (09xxxxxxxxx)">
             </div>
             <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
               <span class="input-group-btn"><button type="button" onclick="rbtverifycellnum()" id="rbtbutton" class="btn btn-primary subscription-verification-cellnum-submit-button">Send Verification Code!</button></span>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>


  <!--MODAL SECTION / SUBSCRIPTION SECTION-->

  <div class="modal fade" id="subscription-modal" tabindex="-1" role="dialog" aria-labelledby="subscription-modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
          <div class="row">

            <div class="col-lg-4"></div>
            <div class="col-lg-4 text-center">
              <input type="text" class="form-control input-cellnum" placeholder="Enter your 11-digit cellphone number here (09xxxxxxxxx)">
              <br/>
              <button type="submit" class="btn btn-primary subscription-submit-button">Subscribe!</button>
            </div>
            <div class="col-lg-4"></div>
          </div>

        </div>

      </div>
    </div>
  </div>


  <!--MODAL SECTION / SUBSCRIPTION SECTION WITH VERIFICATION-->

  <div class="modal fade" id="subscription-verification-modal" tabindex="-1" role="dialog" aria-labelledby="subscription-verfication-modal">

    <div class="modal-dialog" role="document">


      <div class="modal-content" id="serviceverificationwrapper">

        <div id="verificationwrapper">
            <div class="modal-header text-center">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Verify your number</h4>
            </div>


            <div class="modal-body">
              <div class="row">

                <div class="col-lg-1"></div>
                <div class="col-lg-10 text-center">
                  <div id="notification" style="display: none;"></div>
                  <div class="input-group verification-form-step-one">
                    <input type="text" name="cellnum" id="cellnum" maxlength="11" class="numberonly form-control input-verify-cellnum" placeholder="11-digit cellphone # (09xxxxxxxxx)">
                    <span class="input-group-btn"><button type="button" onclick="verifycellnum()" class="btn btn-primary subscription-verification-cellnum-submit-button">Send Verification Code!</button></span>
                  </div>
                  <div class="input-group verification-form-step-two">
                    <p>Verification code successfully sent! Kindly wait a while for our text.</p>
                    <br/>
                    <input type="text" id="verificationcode" name="verificationcode" style="text-align: center;" maxlength="6" class="form-control input-verify-cellnum" placeholder="Enter 6-digit verification code">
                    <div>&nbsp;</div>
                    <div class="" role="group">              
                      <button type="button" class="btn btn-primary resend-verification-button">Resend code</button>
                      <button type="button" id="confirmverification" name="confirmverification" class="btn btn-primary subscription-verification-code-submit-button">Subscribe!</button>
                    </div>
                    <br/>
                    <p>
                      Still haven't received your code?<br/>
                      <a href="javascript: void(0);" onclick="resendverificationcode()" id="resendlink">Click here to resend.</a>
                    </p>
                  </div>
                  <br/>

                </div>
                <div class="col-lg-1"></div>
              </div>

            </div>
        </div> <!--end of verificationwrapper-->

      </div>
    </div>

  </div>
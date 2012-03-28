  <div class="row">
    <div class="span8 game-logo">
      <div id="simple-carousel-details" class="carousel slide">
          <!-- Carousel items -->
          <div class="carousel-inner">
              <?php if ($game->images): ?>
                <?php foreach ($game->images as $i => $item): ?>
                  <div class="item <?php echo $i===0 ? 'active' : '' ?>">
                      <img src="<?php echo base_url() ?>uploads/original/<?php echo $item->path ?>" alt="">
                  </div>  
                <?php endforeach ?>
              <?php endif ?>
          </div>
          <!-- Carousel nav -->
          <a class="carousel-control left" href="#simple-carousel-details" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#simple-carousel-details" data-slide="next">&rsaquo;</a>
      </div>      
      <div class="tabbable tabs-below" style="margin:15px 0;">
        <div class="tab-content">
          <div id="images" class="tab-pane active game-tab-pane span8" style="margin-left:0px;">
            <div id="image-carousel" class="es-carousel-wrapper span7" style="margin-left:0">
                <div class="es-carousel">
                    <ul>
                      <?php if ($game->images): ?>
                        <?php foreach ($game->images as $i => $item): ?>
                          <li>
                            <a href="#" class="thumbnail">
                              <img src="<?php echo base_url() ?>uploads/original/<?php echo $item->path ?>" alt="" style="width:128px">
                            </a>
                          </li>                      
                        <?php endforeach ?>
                      <?php endif ?>                      
                      <?php foreach (range(0, 7) as $key => $value): ?>
                        <li>
                          <a href="#" class="thumbnail">
                            <img alt="" src="http://placehold.it/128x85/">
                          </a>
                        </li>
                      <?php endforeach ?>
                    </ul>
                </div>
            </div>             
          </div>
          <div id="videos" class="tab-pane game-tab-pane span8" style="margin-left:0px;">
            <div id="video-carousel" class="es-carousel-wrapper span7" style="margin-left:0">
                <div class="es-carousel">
                    <ul>
                      <?php foreach (range(0, 20) as $key => $value): ?>
                        <li>
                          <a href="#" class="thumbnail">
                            <img alt="" src="http://placehold.it/128x85/">
                          </a>
                        </li>
                      <?php endforeach ?>
                    </ul>
                </div>
            </div>             
          </div>
        </div> <!-- /tab-content -->
        <ul class="nav nav-tabs game-tabs">
          <li class="active"><a data-toggle="tab" href="#images">Images</a></li>
          <li class=""><a data-toggle="tab" href="#videos">Videos</a></li>
        </ul>
        
      </div>      
      
      <div class="span8 crosspromo" style="margin-bottom:20px;">
        <h3 style="margin-bottom:-15px; padding:5px 20px;">Other games</h3>
        <hr>
        <ul class="thumbnails" style="margin-bottom:10px; margin-left:20px;">
          <li class="span2"><a href="#" class="thumbnail"><img alt="" src="<?php echo base_url() ?>assets/games/flyfu/Icon170.png"></a></li>
          <li class="span2"><a href="#" class="thumbnail"><img alt="" src="<?php echo base_url() ?>assets/games/roc/Icon170.png"></a></li>
          <li class="span2"><a href="#" class="thumbnail"><img alt="" src="<?php echo base_url() ?>assets/games/lazyfarmer/Icon170.png"></a></li>
          <li class="span2"><a href="#" class="thumbnail"><img alt="" src="<?php echo base_url() ?>assets/games/greedcorp/Icon170.png"></a></li>
          <li class="span2"><a href="#" class="thumbnail"><img alt="" src="<?php echo base_url() ?>assets/games/mistbouncer/Icon170.png"></a></li>
        </ul>
      </div>
      
      <div class="fb-comments" data-href="http://example.com" data-num-posts="2" data-width="620"></div>
      
    </div>
    <div class="span4 details-pane game-details">
      <h3 class="game-name-and-icon">
        <?php echo $game->name ?>
        <img src="<?php echo base_url() ?>uploads/original/<?php echo $game->logo ?>" alt="" class="pull-right" style="width:64px;">
      </h3>
      <hr>
      <p>
        <?php echo $game->short_description ?>
      </p>
      <p>
        <?php echo $game->long_description ?>
      </p>
      <div class="game-available-in">
        <hr>
        <h4 style="margin-top:10px;">Stores</h4>
        <ul class="thumbnails">
          <?php if ($game->platforms): ?>
            <?php foreach ($game->platforms as $item): ?>
              <li class="span2">
                <a class="thumbnail" href="<?php echo $item->url ?>" target = "_blank" rel="tooltip" title="<?php echo $item->name ?>" style="display:inline-block">
                  <img alt="" src="<?php echo base_url() ?>uploads/original/<?php echo $item->image ?>">
                </a>
              </li>           
            <?php endforeach ?>
          <?php else: ?>
            <li><h6>No platform</h6></li>
          <?php endif ?>
        </ul>
      </div>
      
      <hr>
      
      <h2 style="margin-bottom:20px;"><?php echo $game->name ?> on Facebook</h2>
      <div class="fb-like" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false"></div>
      <a href="https://twitter.com/share" class="twitter-share-button" data-via="adobi">Tweet</a>
      <g:plusone size="medium"></g:plusone>
      <p>&nbsp;</p> 
      <div class="fb-like-box" data-href="https://www.facebook.com/greedcorp.mobile" data-width="360" data-show-faces="true" data-stream="true" data-header="false"></div>
    </div>
  </div>
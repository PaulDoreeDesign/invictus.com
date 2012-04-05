      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit header-carousel" style="">
        <div class="row">
          <div class="span8 image-carousel" style="margin-bottom:10px;">
            <div id="simple-carousel" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <?php if ($carousel): ?>
                    <?php foreach ($carousel as $i=>$item): ?>
                      <?php if ($item): ?>
                        <div class="item <?php echo $i===0 ? 'active' : '' ?>" data-item="<?php echo $item->id ?>">
                            <img src="<?php echo base_url() ?>uploads/original/<?php echo $item->hero_image ?>" alt="">
                            <div class="carousel-caption">
                              <h4><?php echo $item->name ?></h4>
                              <p><?php echo $item->short_description ?> <a  <?php echo event_tracking($item->analytics['hero']) ?> href="<?php echo base_url() ?>games/<?php echo $item->url ?>" class="btn">View detailes <i class="icon-arrow-right"></i></a></p>
                            </div>        
                        </div> 
                      <?php endif ?>
                    <?php endforeach ?>
                  <?php endif ?>
                </div>
                <!-- Carousel nav -->
                <a class="carousel-control left" href="#simple-carousel" data-slide="prev">&lsaquo;</a>
                <a class="carousel-control right" href="#simple-carousel" data-slide="next">&rsaquo;</a>
            </div>
          </div>  
          <div class="span4 teasers">
            <?php if ($carousel): ?>
              <?php foreach ($carousel as $i=>$item): ?>
                <?php if ($item): ?>
                  <div class="teaser <?php echo $i === 0 ? 'hide' : '' ?>" data-item="<?php echo $item->id ?>">
                    <a <?php echo event_tracking($item->analytics['teaser']) ?> href="<?php echo base_url() ?>games/<?php echo $item->url ?>">
                      <img src="<?php echo base_url() ?>uploads/original/<?php echo $item->teaser_image ?>" alt="">
                    </a>
                  </div>
                <?php endif ?>
              <?php endforeach ?>
            <?php endif ?>
          </div>        
        </div>
      </div>
      <div class="hero-unit social">
        <div class="row">
          <div class="span8 ">
            <?php if ($about): ?>
              <div class="blog">
                <!-- 
                <h2 style="margin-bottom:10px;">Latest blog posts</h2>
                <?php foreach (range(0,2) as $key => $value): ?>
                  <div>
                    <h6>Lorem ipsum dolor sit amet</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam varius lorem in magna ornare dapibus. Nam vel lectus mauris. Sed ante felis vulputate sit amet mi</p>
                    <p style="text-align:right">
                      <a href="#">Read more &rarr;</a>
                    </p>
                    <?php if ($key !== 2): ?>
                      <hr>
                    <?php endif ?>
                  </div>
                <?php endforeach ?>
                 -->
                <div class="span8">
                  <h2 style="margin-bottom:10px;">About Invictus</h2>
                </div>
                <p style="padding:10px;"><?php echo nl2br($about->description) ?></p>
              </div>
            <?php endif ?>
            
            <?php if ($current_offer): ?>
              <div class="row newsletter" style="margin-top:20px;">
                <div class="span7">
                  <h2 style="margin-bottom:10px;">Offer: <span class="upper-gray"><?php echo $current_offer->name ?></span></h2>
                </div>
                <div class="span4 subscribe" style="margin:auto 10px;">
                  <!-- <img src="http://placehold.it/360x160" alt=""> -->
                  <img src="<?php echo base_url() ?>uploads/original/<?php echo $current_offer->image ?>" alt="">
                </div>
                <div class="span4 offer">
                  <!-- <h2>Current offer</h2> -->
                  <p>
                    <?php echo nl2br($current_offer->description) ?>
                  </p>
                </div>
                <div class="span7">
                  <hr>
                  <?php echo form_open(base_url()."pages/subscribe", array('id'=>'subscribe-form', 'class'=>'form-search')) ?>
                    <input name="email" type="text" class="input-large search-query span5" style="font-size:1.4em; height:36px" placeholder="example@domain.com">
                    <button class="btn btn-orange btn-large" type="submit" <?php echo $current_offer ? event_tracking($current_offer) : '' ?>><i class="icon-pencil icon-white"></i> Subscribe</button>
                  <?php echo form_close() ?>
                </div>
              </div>
            <?php endif ?>
          </div>
          <div class="span4 social-feed">
              <h2 style="margin-bottom:20px;">
                Invictus on
              </h2>
              
              <div class="fb-like" data-send="false" data-layout="button_count" data-width="80" data-show-faces="false"></div>
              <a href="https://twitter.com/<?php echo $settings->twitter_id ?>" class="twitter-follow-button" data-show-count="false">Follow @<?php echo $settings->twitter_id ?></a>
              <g:plusone size="medium"></g:plusone>
              <p>&nbsp;</p>
              <div class="fb-like-box" data-href="https://www.facebook.com/<?php echo $settings->facebook_page ?>" data-width="360" data-show-faces="true" data-stream="true" data-header="false"></div>
              
          </div>
        </div>
      </div>
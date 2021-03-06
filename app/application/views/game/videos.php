
<?php if (validation_errors()): ?>
    <div class="alert alert-error">
        <?php echo validation_errors() ?>
    </div>
<?php endif ?>

<?php echo form_open_multipart('', array('id'=>'edit-form', '_data-ajax-form'=>1)) ?>    

    <?php echo panel_close('images/'.($item ? $item->id : '')) ?>
    
    <legend>
      <strong>4. </strong>
        <?php if ($item): ?>
          "<?php echo $item->name ?>" videos
        <?php endif ?>
        <p class="pull-right">
          <!-- <button class="btn btn-primary" rel="tooltip" title="Save game"><i class="icon-ok icon-white"></i></button> -->
          <a class="btn btn-primary" href="<?php echo base_url() ?>gamevideo/edit/for_game/<?php echo $item->id ?>" rel="tooltip" title="Add new video" data-ajax-link><i class="icon-plus-sign icon-white"></i></a>
          <?php if ($item): ?>
            <!-- <a href="<?php echo base_url() ?>game/delete/<?php echo $item->id ?>" class="btn delete-item" data-location="r" rel="tooltip" title="Delete game" data-modal-header="Game <?php echo $item->name ?>"><i class="icon-trash"></i></a> -->
          <?php endif ?>
        </p>  
      
    </legend> 
    <div class="right-side-scroll">
      <?php if ($videos): ?>
        <div class="items">
        
        <?php foreach ($videos as $p): ?>
            <div class="item">
              <h6>
                <?php echo $p->description ?>
                  
                <div class="pull-right">
                  <div class="btn-group">
                  <!-- <a class="btn" href="<?php echo base_url() ?>gamevideo/analytics/<?php echo $p->id ?>" rel="tooltip" title="Analytics settings" data-ajax-link><i class="icon-signal"></i></a> -->
                  <a data-reset="reload" data-type="on-mainpage" data-action="<?php echo $p->is_on_mainpage ? 'inactivate' : 'activate' ?>" href="<?php echo base_url() ?>gamevideo/action/<?php echo $p->is_on_mainpage ? 'inactivate' : 'activate' ?>/<?php echo $p->id ?>/on_mainpage" class="btn video-action <?php echo $p->is_on_mainpage ? 'active' : '' ?>" rel="tooltip" title="<?php echo $p->is_on_mainpage ? 'Inactivate' : 'Activate' ?> "><i class="icon-home"></i></a>
                  <a data-reset="reload" data-type="on-more-games" data-action="<?php echo $p->is_on_all_games ? 'inactivate' : 'activate' ?>" href="<?php echo base_url() ?>gamevideo/action/<?php echo $p->is_on_all_games ? 'inactivate' : 'activate' ?>/<?php echo $p->id ?>/on_all_games" class="btn video-action <?php echo $p->is_on_all_games ? 'active' : '' ?>" rel="tooltip" title="<?php echo $p->is_on_all_games ? 'Inactivate' : 'Activate' ?> "><i class="icon-list"></i></a>
                  <a data-reset="reload" data-type="on-more-product-page" data-action="<?php echo $p->is_on_product_page ? 'inactivate' : 'activate' ?>" href="<?php echo base_url() ?>gamevideo/action/<?php echo $p->is_on_product_page ? 'inactivate' : 'activate' ?>/<?php echo $p->id ?>/on_product_page" class="btn video-action <?php echo $p->is_on_product_page ? 'active' : '' ?>" rel="tooltip" title="<?php echo $p->is_on_product_page ? 'Inactivate' : 'Activate' ?> "><i class="icon-file"></i></a>
                  <a class="btn" href="<?php echo base_url() ?>gamevideo/edit/<?php echo $p->id ?>" rel="tooltip" title="Edit video" data-ajax-link><i class="icon-pencil"></i></a>
                  <a class="btn delete-item" href="<?php echo base_url() ?>gamevideo/delete/<?php echo $p->id ?>" data-trigger="reload" data-location="r"   rel="tooltip" title="Delete video" data-modal-header="<?php echo $p->description ?> video"><i class="icon-trash"></i></a>
                  </div>
                </div>
              </h6>
              <br>
              <div class="center">
                <?php echo embed_youtube($p->code) ?>
              </div>
            </div>
        <?php endforeach ?>
        </div>
      <?php else: ?>
        <div class="alert alert-error">
          No videos
        </div>
      <?php endif ?>    
    </div>
    <fieldset class="form-actions right">
        <!-- <button class="btn btn-primary" rel="tooltip" title="Save game"><i class="icon-ok icon-white"></i></button>  -->
        <a class="btn" data-ajax-link="1" href="<?php echo base_url() ?>game/seo/<?php echo $item->id ?>"><strong>5.</strong> Set up SEO</a>
    </fieldset>      
<?php echo form_close() ?>    
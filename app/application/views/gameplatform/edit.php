  
  <?php echo panel_close('platforms/'.($game ? $game->id : '')) ?>

  <?php echo form_open('', array('id'=>'edit-form', 'data-ajax-form'=>1, 'class'=>'_form-horizontal', 'data-trigger'=>'back')) ?>
      <legend>
        Set up Platform for <?php echo $game->name ?>
        <p class="pull-right">
          <button class="btn btn-primary" rel="tooltip" title="Save platform"><i class="icon-ok icon-white"></i></button>
          <?php if ($item): ?>
            <a href="<?php echo base_url() ?>game/delete/<?php echo $item->id ?>" class="btn delete-item" data-location="r" rel="tooltip" title="Delete platform" data-modal-header="platform from <?php echo $game->name ?>"><i class="icon-trash"></i></a>
          <?php endif ?>
        </p>         
      </legend>
      <fieldset class="control-group">
          <label class="control-label" for="url">Platform</label>
          <div class="controls">
              <?php echo form_dropdown('platform_id', $platforms, $item ? $item->platform_id : '', 'class="span4 chosen"') ?>
          </div>
      </fieldset>       
      <fieldset class="control-group">
          <label class="control-label" for="min_os_version">Minimal OS version</label>
          <div class="controls">
              <input type="text" name="min_os_version" id = "min_os_version" class = "span2" value = "<?php echo $item ? $item->min_os_version : '' ?>"/> 
          </div>
      </fieldset> 
      <fieldset class="control-group">
          <label class="control-label" for="width">Minimal resolution</label>
          <div class="controls">
              <input type="text" name="width" id = "width" class = "span1" value = "<?php echo $item ? $item->width : '' ?>"/> x 
              <input type="text" name="height" id = "height" class = "span1" value = "<?php echo $item ? $item->height : '' ?>"/>
          </div>
      </fieldset> 
      <fieldset class="control-group">
          <label class="control-label" for="opengl">Minimal OpenGL</label>
          <div class="controls">
              <input type="text" name="opengl" id = "opengl" class = "span1" value = "<?php echo $item ? $item->opengl : '' ?>"/>
          </div>
      </fieldset>                  
      <fieldset class="control-group">
          <label class="control-label" for="version">Game version</label>
          <div class="controls">
              <input type="text" name="version" id = "version" class = "span2" value = "<?php echo $item ? $item->version : '' ?>"/> 
          </div>
      </fieldset>      
      <fieldset class="control-group">
          <label class="control-label" for="price">Price</label>
          <div class="controls">
              <input type="text" name="price" id = "price" class = "span2" value = "<?php echo $item ? $item->price : '' ?>"/> 
              <?php echo form_dropdown('currency', array('$'=>'$', '€'=>'€'), $item ? $item->currency : '', 'class="span1"') ?>
          </div>
      </fieldset>
      <fieldset class="control-group">
          <label class="control-label" for="url">Original url</label>
          <div class="controls">
              <input type="text" name="long_url" id = "bitly-input-url" class = "span4" value = "<?php echo $item ? $item->long_url : '' ?>"/> 
              <a class="btn" id="shorten-with-bitly" href="javascript:void(0)" rel="tooltip" title="Shorten with bit.ly"><i class="icon-retweet"></i></a>
          </div>
      </fieldset>       
      <fieldset class="control-group">
          <label class="control-label" for="url">Shorten url <span class="label label-important">Do not edit</span></label>
          <div class="controls">
              <input type="text" name = "url" id = "url" class = "span4" value = "<?php echo $item ? $item->url : '' ?>" style="margin-top:5px;" />
          </div>
      </fieldset>       

      <fieldset class="form-actions right">
          <button class="btn btn-primary" rel="tooltip" title="Save platform"><i class="icon-ok icon-white"></i></button>
      </fieldset>      
    <?php echo form_close() ?>    
    
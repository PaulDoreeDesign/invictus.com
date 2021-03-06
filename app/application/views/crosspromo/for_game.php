<h3>
  Promotional games for <?php echo $game->name ?>
              <div class="pull-right">
                <span class="label label-info">Tipp</span> <span class="tipp-text"><strong>Move items to change the order</strong></span>
                <!-- 
                <?php if ($games_for_select): ?>
                  <a href="#" class="btn dropdown-toggle" data-toggle="dropdown" rel="tooltip" title="Copy crosspromo" ><i class="icon-list"></i></a></a>
                  <ul class="dropdown-menu" style="top:auto; right:20px; font-size:13px">
                    <li style="padding:3px 15px">Copy crosspromo to</li>
                    <li class="divider"></li>
                    <?php foreach ($games_for_select as $i=>$item): ?>
                      <?php if ($item): ?>
                        <li><a href="<?php echo base_url() ?>crosspromo/copy/<?php echo $game->id ?>/<?php echo $i ?>"><?php echo $item ?></a></li>
                      <?php endif ?>
                    <?php endforeach ?>
                  </ul>                
                <?php endif ?>
                 -->
              </div>  
        
</h3>
<hr>
<ul class="thumbnails" style=" width:650px; margin-left:-15px">
  <?php foreach ($games as $item): ?>
    <?php if ($item) :?>
      <li class="span2" id="<?php echo $item->id ?>">
        <div class="item thumbnail" data-id="<?php echo $item->promo_game_id ?>">
          <h6 class="center" rel="tooltip" title="<?php echo $item->name ?>">
            <?php echo strlen($item->name) > 12 ? substr($item->name, 0, 13) . '...' : $item->name ?>
          </h6> 
          <img src="<?php echo base_url() ?>uploads/original/<?php echo $item->logo ?>" style="width:96px" alt="">
          <div class="caption center">
            <hr style="margin:4px 0 6px;">
            <!-- <a href="#" class="btn"><i class="icon-signal"></i></a>   -->
            <a href="javascript:void(0)" class="btn layout-remove" rel="tooltip" title="Remove"><i class="icon-trash"></i></a>
          </div>                 
        </div>                  
      </li>
    <?php else : ?>
      <li class="span2" id="0">
      </li>
    <?php endif; ?>
  <?php endforeach; ?>
  
</ul>
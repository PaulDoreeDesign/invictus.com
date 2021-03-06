
<?php if ($item): ?>
  <?php echo panel_close() ?>
  <legend>
      <?php if ($item): ?>
          View job <?php //echo $item->name ?>
      <?php endif ?>
      <div class="pull-right">
        <div class="btn-group">
        <a href = "<?php echo base_url() ?>job/edit/<?php echo $item->id ?>" data-ajax-link="1" class="btn" rel="tooltip" title="Edit job"><i class="icon-pencil"></i></a>          
        <!-- <a href="<?php echo base_url() ?>job/analytics/<?php echo $item->id ?>" class="btn" data-ajax-link="1" rel="tooltip" title="Analytics settings"><i class="icon-signal"></i></a> -->
        <a href="<?php echo base_url() ?>job/delete/<?php echo $item->id ?>" class="btn delete-item select-item" data-location="r" rel="tooltip" title="Delete job" data-modal-header="Job <?php echo $item->name ?>"><i class="icon-trash"></i></a>
        </div>
      </div>
  </legend>  
  <div class=" right-side-scroll">
    <h2><?php echo $item->name ?> <span class="upper-gray"><?php echo to_date($item->available) ?></span></h2>
    <h6 style="margin-bottom:30px;"><?php echo $item->type === '1' ? 'Full time' : 'Part time' ?> — <?php echo $item->location ?></h6>  
    <strong>About this Job</strong><br> 
    <p><?php echo nl2br($item->description) ?></p>
    <br>&nbsp;<strong>Responsibilities</strong><br>
    <ul>
      <?php foreach ($item->responsabilities as $key => $value): ?>
        <li><?php echo $value->description ?></li>
      <?php endforeach ?>
    </ul>
    <strong>Qualifications</strong><br>
    <ul>
      <?php foreach ($item->qualifications as $key => $value): ?>
        <li><?php echo $value->description ?></li>
      <?php endforeach ?>
    </ul>
    <strong>Desired Skills</strong><br>
    <ul>
      <?php foreach ($item->skills as $key => $value): ?>
        <li><?php echo $value->description ?></li>
      <?php endforeach ?>
    </ul>    
    <strong>What we offer</strong><br>
    <ul>
      <?php foreach ($item->offers as $key => $value): ?>
        <li><?php echo $value->description ?></li>
      <?php endforeach ?>
    </ul>       
  </div>
<?php endif ?>

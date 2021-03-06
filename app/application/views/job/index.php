<div class="well">
  <h3>
    <a class="btn" href="#" onclick="$('.category-items').toggle();" rel="tooltip" title="Toggle list"><i class="icon-resize-vertical"></i></a> &nbsp;
    Job categories
    <p class="pull-right">
      <a class="btn btn-primary" href="<?= base_url(); ?>jobcategory/edit" data-ajax-link="1" data-unselect="1"><i class="icon-plus-sign icon-white"></i></a>
    </p>
  </h3>
  
  <?php if ($job_category_items): ?>
    <div class="items category-items">
      <hr>
      <?php foreach ($job_category_items as $item): ?>
        <div class="item">
          <h4>
            <img src="<?php echo $item->icon ? base_url() . 'uploads/original/' . $item->icon : 'http://placehold.it/24x24' ?>" alt=""> 
            <?php echo $item->name ?>
            
            <div class="pull-right" style="margin-top:5px;">
              <div class="btn-group">
              <a href="<?php echo base_url() ?>jobcategory/edit/<?php echo $item->id ?>" class="btn select-item" data-ajax-link="1" rel="tooltip" title="Edit category"><i class="icon-pencil"></i></a>
              <a href="<?php echo base_url() ?>jobcategory/delete/<?php echo $item->id ?>" class="btn delete-item select-item" data-location="l" rel="tooltip" title="Delete category" data-modal-header="Job category <?php echo $item->name ?>"><i class="icon-trash"></i></a>
              </div>
            </div>
          </h4>
        </div>
      <?php endforeach ?>
    </div>
  <?php endif ?>
  
</div> <!-- well -->  

<div class="well">
  
  <h3>
    <a class="btn" href="#" onclick="$('.job-items').toggle();" rel="tooltip" title="Toggle list"><i class="icon-resize-vertical"></i></a> &nbsp;
    Jobs
    <p class="pull-right">
      <a class="btn btn-primary" href="<?= base_url(); ?>job/edit" data-ajax-link="1" data-unselect="1"><i class="icon-plus-sign icon-white"></i></a>
    </p>
  </h3>
  
  <?php if ($job_items): ?>
    <div class="items job-items">
      <hr>
        <div class="item">
          <h4>
            <img src="<?php echo base_url() ?>img/glyphicons_003_user.png"> 
            New talent
            <a href="<?php echo base_url() ?>job/applications/new-talent" class="select-item" data-ajax-link="1" rel="tooltip" title="New talents">
              <!--<i class="icon-user"></i>  -->
              <span class="badge badge-info"><?php echo isset($talents_count) ? $talents_count : 0 ?></span>
            </a>
          </h4>
        </div>        
      <?php foreach ($job_items as $item): ?>
        <div class="item <?php echo $item->is_active ? 'alert-success' : '' ?> ">
          <h4>
            <?php if ($item->is_first): ?>
                
              <span style="font-size:1.6em">1.</span>
              
            <?php endif ?>
            <img src="<?php echo $item->category_icon ? base_url() . 'uploads/original/' . $item->category_icon : 'http://placehold.it/24x24' ?>" alt="" rel="tooltip" title="<?php echo $item->category_name ?>"> 
            <?php echo $item->name ?>
            <span class="upper-gray"><?php echo to_date($item->available) ?></span>
            <a href="<?php echo base_url() ?>job/applications/<?php echo $item->id ?>" class="select-item" data-ajax-link="1" rel="tooltip" title="Candidates for the job">
              <!--<i class="icon-user"></i>  -->
              <span class="badge badge-info"><?php echo $item->applications ? $item->applications : 0 ?></span>
            </a>
            
            <div class="pull-right" style="margin-top:5px;">
              <div class="btn-group">
              <?php if ($item->is_active): ?>
                <a data-contet-ajax-link href="<?php echo base_url() ?>job/<?php echo $item->is_first ? 'remove_first' : 'show_first' ?>/<?php echo $item->id ?>" class="btn" rel="tooltip" title="<?php echo $item->is_first ? 'Remove from first' : 'Show first' ?>"><i class="icon-home"></i></a>
              <?php endif ?>
              <a data-action="<?php echo $item->is_active ? 'inactivate' : 'activate' ?>" href="<?php echo base_url() ?>job/action/<?php echo $item->is_active ? 'inactivate' : 'activate' ?>/<?php echo $item->id ?>" class="btn action" data-trigger="reload" data-location="l" rel="tooltip" title="<?php echo $item->is_active ? 'Inactivate' : 'Activate' ?> job"><i class="icon-lock"></i></a>
              <a href="<?php echo base_url() ?>job/show/<?php echo $item->id ?>" class="btn select-item" data-ajax-link="1" rel="tooltip" title="View job"><i class="icon-eye-open"></i></a>
              <!-- <a href="<?php echo base_url() ?>job/analytics/<?php echo $item->id ?>" class="btn " data-ajax-link="1" rel="tooltip" title="Analytics settings"><i class="icon-signal"></i></a> -->
              <a href="<?php echo base_url() ?>job/edit/<?php echo $item->id ?>" class="btn select-item" data-ajax-link="1" rel="tooltip" title="Edit job"><i class="icon-pencil"></i></a>
              <a href="<?php echo base_url() ?>job/delete/<?php echo $item->id ?>" class="btn delete-item select-item" data-location="l" rel="tooltip" title="Delete job" data-modal-header="Job <?php echo $item->name ?>"><i class="icon-trash"></i></a>
              </div>
            </div>
          </h4>
          <h6>
            <?php echo $item->type === '1' ? 'Full time' : 'Part time' ?> — <?php echo $item->location ?>
          </h6>
        </div>        
      <?php endforeach ?>
    </div>
  <?php endif ?>
  
</div> <!-- well -->  
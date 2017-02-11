<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">

      	<?php  if (isset($title) && trim($title) != "") { ?>
        	<a role="button" data-toggle="collapse" aria-expanded="false" href="#collapse-block_<?php echo $bID; ?>"><?php  echo h($title); ?>
        		<i class="more-less glyphicon glyphicon-plus"></i>
           	</a>
        <?php  } ?>

      </h4>
    </div>
    <div id="collapse-block_<?php echo $bID; ?>" class="panel-collapse collapse">
      <div class="panel-body">

      <?php  if ($image) { ?>
	      <div class="col-md-4">
	      	 <img src="<?php  echo $image->getURL(); ?>" alt="<?php  echo $image->getTitle(); ?>" class="image-responsive">
	      </div>
      	<?php } ?>

      	<?php  if (isset($content) && trim($content) != "") { ?>
    	<div class="col-md-8">
    		<?php  echo $content; ?>
    	</div>
    	<?php  } ?>
      </div>
      <!-- <div class="panel-footer"></div> -->
    </div>
  </div>
</div>

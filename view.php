<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" href="#collapse1">Collapsible panel</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
      <div class="col-md-4">
      	 Panel Body
      </div>
    	<div class="col-md-8">
    		yyy
    	</div>
      </div>
      <div class="panel-footer">Panel Footer</div>
    </div>
  </div>
</div>


<?php  if (isset($title) && trim($title) != "") { ?>
    <?php  echo h($title); ?><?php  } ?>
<?php  if ($image) { ?>
    <img src="<?php  echo $image->getURL(); ?>" alt="<?php  echo $image->getTitle(); ?>"/><?php  } ?>
<?php  if (isset($content) && trim($content) != "") { ?>
    <?php  echo $content; ?><?php  } ?>
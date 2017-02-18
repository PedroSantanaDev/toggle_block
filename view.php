<?php  defined("C5_EXECUTE") or die("Access Denied."); ?>

<?php  if (trim($blockStyle) != "") { ?>
    
<?php 
$panel_style = "";
switch($blockStyle) {
case "1":
    $panel_style = "panel-default";
    break;
case "2":
    $panel_style = "panel-primary";
    break;
case "3":
    $panel_style = "panel-success";
    break;
case "4":
    $panel_style = "panel-info";
    break;
case "5":
    $panel_style = "panel-warning";
    break;
case "6":
    $panel_style = "panel-danger";
    break;
      } ?>
<?php  } ?>


<div class="panel-group" id="accordion">
  <div class="panel <?= $panel_style; ?>">
    <div class="panel-heading">
      <h4 class="panel-title">

      	<?php  if (isset($title) && trim($title) != "") { ?>
        	<a data-toggle="collapse" data-parent="#accordion"  href="#collapse-block_<?php echo $bID; ?>"><?php  echo h($title); ?>
        		<span class="glyphicon pull-right glyphicon-plus"></span>
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
<script type="text/javascript">
	$('.collapse').on('shown.bs.collapse', function(){
	$(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
	}).on('hidden.bs.collapse', function(){
	$(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
	});
</script>

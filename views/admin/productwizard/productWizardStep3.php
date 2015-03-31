<div class="ui-widget-header ui-corner-all center-header">
	Product - Product Pictures
</div>

<?if ($event->getArg('message') != "") {?>
<div class="ui-helper-clearfix spacer"></div>
<div class="ui-state-error ui-corner-all" style="padding: 8px;">
	<p><span class="ui-icon ui-icon-alert" style="float: left; margin-right: .3em;"></span> 
	<strong>Warning:</strong> <?=$event->getArg('message');?></p> 
</div>
<?}?>

<div class="ui-helper-clearfix spacer"></div>

<div class="ui-widget">
	<?php echo $event->getArg('productWizardNavigation')?>
</div>

<div class="ui-helper-clearfix spacer"></div>

<div class="ui-widget-content ui-corner-bottom center-content">
	<div><p style="color:red">Please note that this image <strong>MUST HAVE 800x600px</strong> and it is resized to 480x360px and 140x105px automatically.<br/>
	If your image has different size please put it on white background with proper size (800x600px).<br/><br/></p></div>

	<div style="height:50px;">
		<div style="float:left">
			<input type="file" name="uploadify" id="uploadify" />
		</div>
		<div id="fileQueue" style="float:right;">
		</div>
	</div>
	<div class="ui-helper-clearfix spacer"></div>
	<div id="filesUploaded"></div>
	
	<div class="ui-helper-clearfix spacer"></div>
	
	<form name="f1" method="post" action="index.php">
	    <input type="hidden" name="event" id="event" value="showProductStep4">
	    <input type="hidden" name="productId" id="productId" value="<?=$event->getArg('productId')?>">
	</form>
	
</div>

<div class="ui-helper-clearfix spacer"></div>

<div class="ui-widget formButtons">
	<span class="wizardButton"><a href="javascript:document.f1.submit();">Next Step</a></span>
	<span class="wizardButton"><a href="javascript:$('#event').val('executeWizardClose');$('#productId').val('<?=$event->getArg("productId");?>');document.f1.submit();">Save Changes</a></span>
</div>
<div class="ui-widget-header ui-corner-all center-header">
<?if ($event->getArg('message') != "") {?>
<div class="ui-helper-clearfix spacer"></div>
<div class="ui-widget">
<div class="ui-helper-clearfix spacer"></div>
<form name="f1" method="post" action="index.php">
	
	<div style="float:left; width:20%">
	
		<?if($event->getArg('BetaOrder') != 0) {
			$maxBetaOrder = $event->getArg("BetaOrder");
		} else {
			$maxBetaOrder = $event->getArg("maxBetaOrder");
			$maxBetaOrder = $maxBetaOrder + 1;
		}?>
		<fieldset >
			<label for="BetaOrder">Order <font color="red">*</font></label>
			<input style="width:80px" type="text" name="BetaOrder" id="BetaOrder" value="<?=$maxBetaOrder?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "BetaOrder") echo "ui-state-error"?>" />
		</fieldset>		
	</div>
	<div class="ui-helper-clearfix spacer"></div>
</div>

<div class="ui-helper-clearfix spacer"></div>
		
<div class="ui-widget-content ui-corner-all center-content">
	<fieldset>
		<label for="Name">Category Title</label>
		<input type="text" name="Name" id="Name" value="<?echo htmlspecialchars_decode($event->getArg('Name'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Name") echo "ui-state-error"?>" />
	</fieldset>
	
	<fieldset>
		<label for="Keyword">Category Alt Description</label>
		<input type="text" name="Keyword" id="Keyword" value="<?echo htmlspecialchars_decode($event->getArg('Keyword'));?>" class="text ui-widget-content ui-corner-all <?if ($event->getArg("missingField") == "Keyword") echo "ui-state-error"?>" />
	</fieldset>
</div>

<div class="ui-helper-clearfix spacer"></div>

<div class="ui-widget formButtons">
	<input type="submit" value="Add Pictures" class="wymupdate">
	<span class="wizardButton wymupdate"><a href="javascript:$('#event').val('executeBetaWizardClose');$('#BetaId').val('<?=$event->getArg("BetaId");?>');document.f1.submit();">Save Changes</a></span>
</div>
</form>				
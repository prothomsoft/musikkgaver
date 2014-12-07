<?
require_once("model/components/session.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
require_once("model/components/translator.inc.php");
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
$arrDeltas = $event->getArg("arrDeltas");?>


 
		<!-- Begin Main Slide -->
		<div role="main" class="main">
			<!-- Begin Main Slide -->
			<section class="main-slide">
				<div id="owl-main-demo" class="owl-carousel main-demo">
					<?if($arrDeltas) {
						foreach ($arrDeltas as $objDelta) {?>
							<div class="item" id="item1"><img src="<?=$SN?>upload/proper/<?=$objDelta->getImgDriveName();?>" alt="Photo">
								<div class="item-caption">
									<div class="item-caption-inner">
										<h2><?=htmlspecialchars_decode($objDelta->getName());?></h2>
										<a href="<?=$objDelta->getKeyword();?>" class="btn btn-white">Shop Now</a>
									</div>
								</div>
							</div>
						<?}
					}?>
				</div>
			</section>
			<!-- End Main Slide -->	 		 
	
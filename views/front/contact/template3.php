<?
require_once("model/components/session.inc.php");
require_once("model/components/translator.inc.php");
require_once("model/components/MenuBuilderPL.inc.php");
require_once("model/components/MenuBuilderEN.inc.php");
$objAppSession=new AppSession();
$SN = $objAppSession->getSession('SN');
$sLang = $objAppSession->getSession('sLang');
$oT = new Translator('template3',$sLang);
$title = "opinionlab by opinionway";
$keywords = "opinionlab by opinionway";
$description = "opinionlab by opinionway";
$url = "";
$image = "";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?=$title;?></title>
		<meta name="keywords" content="<?=$keywords?>" />
		<meta name="description" content="<?=$description;?>" />
		<meta property="og:title" content="OpinionLab by OpinionWay"/>
	    <meta property="og:type" content="article"/>
	    <meta property="og:url" content="<?=$SN?>"/>
	    <meta property="og:image" content="<?=$SN?>images/social/facebook.jpg"/>
	    <meta property="og:site_name" content="opinionlab by opinionway"/>
	    <meta property="fb:admins" content="543999369"/>
	    <meta property="og:description" content="opinionlab by opinionway"/>
	    <link rel="icon" href="<?=$SN;?>favicon.ico" type="image/x-icon" />
		<link type="text/css" href="<?=$SN;?>styles/custom-theme/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
		<link href="<?=$SN;?>styles/global.css" rel="stylesheet" type="text/css" media="screen" />
		<script type="text/javascript" src="<?=$SN;?>js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="<?=$SN;?>js/jquery-ui-1.8.16.custom.min.js"></script>
		<script type="text/javascript" src="<?=$SN;?>js/hoverIntent.js"></script>
		<script type="text/javascript" src="<?=$SN;?>js/superfish.js"></script>
		<script type="text/javascript" src="<?=$SN;?>js/plugins.js"></script>
		<script type="text/javascript" src="<?=$SN;?>js/slides.min.jquery.js"></script>
		<script type="text/javascript" src="<?=$SN;?>js/jquery.opinionlab.js?ver=2.0"></script>
		<script type="text/javascript" src="<?=$SN;?>js/jquery.prettyPhoto.js"></script>
		<script type="text/javascript" src="<?=$SN;?>js/highcharts_3.js"></script>
		<script type="text/javascript" src="<?=$SN;?>js//modules/exporting.js"></script>		
		<script type="text/javascript" src="<?=$SN;?>charts/chart_home_1/chart_home_1.js?time=<?=time()?>"></script>
		<script type="text/javascript" src="<?=$SN;?>charts/chart_home_2/chart_home_2.js?time=<?=time()?>"></script>
		<script type="text/javascript" src="<?=$SN;?>charts/chart_home_3/chart_home_3.js?time=<?=time()?>"></script>
		<script type="text/javascript" src="<?=$SN;?>js/jquery.chart_home_1.js?time=<?=time()?>"></script>
		<script type="text/javascript" src="<?=$SN;?>charts/chart_home_4/chart_home_4.js?time=<?=time()?>"></script>
		<script type="text/javascript" src="<?=$SN;?>js/jquery.chart_home_4.js?time=<?=time()?>"></script>
		
		<script type="text/javascript" src="<?=$SN;?>js/jquery.tipTip.minified.js"></script>
		
		<script language="javascript">AC_FL_RunContent = 0;</script>
		<script src="<?=$SN;?>js/AC_RunActiveContent.js" type="text/javascript"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-29033977-1', 'opinion-way.com');
  ga('send', 'pageview');

</script>
	</head>
	
	<body style="background:#fff url('<?=$SN?>/images/background/background_block.jpg') top left repeat;">
	
		<div class="grid-960" style="background:#fff url('<?=$SN?>/images/background/background_strip.jpg') top left no-repeat;">
	
		<header>
		
		
            
             <div class="grid-960">
                <div class="grid-1-1">
                	<div class="ui-helper-clearfix" style="padding:2px 0px 5px 0px;" >
						<div style="float:left;">
								<a href="<?=$SN?>opinionlab_start.html"><img src="<?=$SN?>images/header/logo.png" alt="Opinion Way" /></a>					
						</div>
						<div style="float:right;padding:0px 0px 0px 0px;">
							<div class="icons" style="float:left; padding: 10px 0px 0px 0px;  width:430px;">
								<!-- AddThis Button BEGIN -->
								<div class="addthis_toolbox addthis_default_style">
									<a class="addthis_button_tweet"></a>
									<a class="addthis_button_google_plusone" g:plusone:size="medium" g:plusone:locale="fr_FR"></a>
									<a class="addthis_button_facebook_like" fb:like:layout="button_count" fb:like:width="100" fb:like:locale="fr_FR"></a>
									<span><a href="<?=$SN?>rss.html"><img src="<?=$SN?>images/social/feedIcon.png"></a></span>
									<span style="font-size: 14px; font-style:italic; color:#777; padding-right:15px; padding-left:10px;"><?= strftime("%d/%m/%Y");?></span>
								</div>
								<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=prothomsoft"></script>
								<script type="text/javascript">var addthis_config = { ui_language: "fr" }</script>
								<!-- AddThis Button END -->
							</div>
						</div>
					</div>
                </div><!--grid-1-1-->
            </div><!--grid-960-->  
            
            <div class="clear"></div>
            
            <div class="grid-960 menu_line">
                <div class="grid-1-1">
                	<div id="navigation">
						<?$menu = new MenuBuilderPL();
						echo $menu->get_menu_html();?>							
					</div>
                </div><!--grid-4-1-->
                <div class="clear"></div>
			</div><!--grid-960-->            
        </header>
        
        <article>
        
        	<div class="grid-960">
		        <div class="grid-1-1">
		        	<div class="spacer-20"></div>
			        <h5>Derniers indicateurs publiés</h5>
		        </div><!--grid-1-1-->
		    </div><!--grid-960-->
        
        



        
        	<?$objBeta = $event->getArg("objBeta");?>
        	<div class="grid-960">
		        <div class="grid-1-1">
		            <div class="product-container">
		                <a href="<?=$objBeta->getName();?>" title="">
		                    <span class="product-image product-4"></span>
		                    <span class="product-image product-4 hover-state product-4-hover"></span>
		                    <span class="premium-arrow"></span></a>
		            </div>
		            <div class="product-container">
		                <a href="<?=$objBeta->getShortDescription();?>" title="">
		                    <span class="product-image product-3"></span>
		                    <span class="product-image product-3 hover-state product-3-hover"></span>
		                    <span class="premium-arrow"></span></a>
		            </div>
		            <div class="product-container">
		                <a href="<?=$objBeta->getEventDate();?>" title="">
		                    <span class="product-image product-2"></span>
		                    <span class="product-image product-2 hover-state product-2-hover"></span>
		                    <span class="premium-arrow"></span></a>
		            </div>
		            <div class="product-container">
		                <a href="<?=$objBeta->getBetaOrder();?>" title="">
		                    <span class="product-image product-1"></span>
		                    <span class="product-image product-1 hover-state product-1-hover"></span>
		                    <span class="premium-arrow"></span></a>	                
		            </div>
		            <div class="spacer-20"></div>
		        </div><!--grid-1-1-->
		    </div><!--grid-960-->
		    
		    <div class="grid-960">
		        <div class="grid-1-1">
			        <h5><a class="anchor_link_2" href="<?=$objBeta->getScr10();?>"><?=$objBeta->getScr9();?></a></h5>
		        </div><!--grid-1-1-->
		    </div><!--grid-960-->
		    
        	<div class="grid-960">
		        <div class="grid-1-1">
    		    	<?if ($event->getArg("chart1View") != "") {
						echo $event->getArg("chart1View");
					}?>
        		</div><!--grid-1-1-->
        	</div><!--grid-960-->
        	
        	
        	<div class="grid-960">
        		<div class="grid-1-2">
        			<div class="spacer-25"></div>
        			<h2>Maintenant sur OpinionLab</h2>
        			<div class="spacer-5"></div>
        			<?if ($event->getArg("slideView") != "") {
						echo $event->getArg("slideView");
					}?>	
        		    <div class="spacer-25"></div>
        		</div><!--grid-1-2-->
        		<div class="grid-1-2">
        			<div class="spacer-25"></div>
        			<h2>Dernier billet publié sur le blog</h2>
        			<div class="spacer-5"></div>
        		    <?if ($event->getArg("blogHomeView") != "") {
						echo $event->getArg("blogHomeView");
					}?>	
        		    <div class="spacer-25"></div>
        		</div><!--grid-1-2-->
        		<div class="clear"></div>
        	</div><!--grid-960-->
        	
        	
        	<div class="grid-960">
        		<div class="grid-1-2">
        			<div class="spacer-5"></div>
        			<h2><a class="anchor_link_2" href="<?=$objBeta->getScr12();?>">Le chiffre de la semaine</a></h2>
        			<div class="spacer-5"></div>
        		    <?if ($event->getArg("semaineView") != "") {
						echo $event->getArg("semaineView");
					}?>	
        		    <div class="spacer-35"></div>
        		    <?if ($event->getArg("mediaView") != "") {
						echo $event->getArg("mediaView");
					}?>
        		    <div class="spacer-30"></div>
        		</div><!--grid-1-2-->
        		<div class="grid-1-2">
        			<h2>Les conversations des Français</h2>
        			<div class="spacer-5"></div>
        			<?if ($event->getArg("chart4View") != "") {
						echo $event->getArg("chart4View");
					}?>
        		    <div class="spacer-30"></div>
        		    <?/*
        		    <div>
        		    	<a href="http://lebaro.fr/" target="_blank"><img src="<?=$SN?>images/temp/consulez.jpg" /></a>
        		    </div>
        		    <div class="spacer-30"></div>
        		    */?>
        		    
        		</div><!--grid-1-2-->
        		<div class="clear"></div>
        	</div><!--grid-960-->
        	
        	<div class="grid-960">
		        <div class="grid-1-1">
			        <h5>Suivez nous sur Twitter</h5>
		        </div><!--grid-1-1-->
		    </div><!--grid-960-->
        	
        	
        	<div class="grid-960">
        		<div class="grid-1-3">
        		    <div class="spacer-5"></div>
            			<?if ($event->getArg("tweet1View") != "") {
							echo $event->getArg("tweet1View");
						}?>
            		<div class="spacer-5"></div>
        		</div><!--grid-1-3-->
        		<div class="grid-1-3">
        		    <div class="spacer-5"></div>
            			<?if ($event->getArg("tweet2View") != "") {
							echo $event->getArg("tweet2View");
						}?>
            		<div class="spacer-5"></div>
        		</div><!--grid-1-3-->
        		<div class="grid-1-3">
        		    <div class="spacer-5"></div>
            			<?if ($event->getArg("tweet3View") != "") {
							echo $event->getArg("tweet3View");
						}?>
            		<div class="spacer-5"></div>
        		</div><!--grid-1-3-->
        		<div class="clear"></div>
        	</div><!--grid-960-->
        	        	
        </article>
        
        </div>
        
        <footer>
        	<div class="grid-960">
        		<div class="grid-1-3">
        			<p style="text-align:center; padding-top:35px;"><a class="anchor_link_1" href="<?=$SN?>opinionlab/557/355/mentions-legales.html">Mentions légales</a>&nbsp;|&nbsp;<a class="anchor_link_1" id="login" href="#">Login</a></p>
        		</div>
        		<div class="grid-2-3">
        			<p style="text-align:center; padding-top:15px;"><a  class="anchor_link_1" href="http://labrh.opinion-way.com" target="_blank"><img src="<?=$SN?>images/link_left_left.png" /></a><a  class="anchor_link_1" href="http://www.opinion-way.com" target="_blank"><img src="<?=$SN?>images/link_left.png" /></a><a href="#" class="contact anchor_link_1"><img src="<?=$SN;?>images/link_right.png" /></a></p>
        		</div>
        		<div class="clear"></div>
        	</div><!--grid-960-->
        	
        	<div class="grid-960">
		        <div class="grid-1-1">
			        <div id="scroll-container">
			            <a class="scroll-top" href="" title="Haut de page"><span id="scroll-arrow"></span></a>
                    </div>
		        </div><!--grid-1-1-->
		        <div class="clear"></div>
		    </div><!--grid-960-->

            <hr id="hr-red">
        </footer>
        
        
		
		
		<?if ($event->getArg('dialogLogin') != "") {
			echo $event->getArg('dialogLogin');
		}?>
		<?if ($event->getArg('dialogContact') != "") {
			echo $event->getArg('dialogContact');
		}?>
		<?if ($event->getArg('dialogContactConfirm') != "") {
			echo $event->getArg('dialogContactConfirm');
		}?>
		<?if ($event->getArg('dialogNewsletter') != "") {
			echo $event->getArg('dialogNewsletter');
		}?>
		<?if ($event->getArg('dialogNewsletterConfirm') != "") {
			echo $event->getArg('dialogNewsletterConfirm');
		}?>
		
		<form id="siteNavigation" action="">
			<input type="hidden" name="form_SN" id="form_SN" value="<?=$SN;?>">
		</form>
	
    <div id="isLoading"><span class="shadow"></span><span class="white">WCZYTYWANIE</span></div>
    	
	</body>
	
</html>

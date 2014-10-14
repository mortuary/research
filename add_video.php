<!-- //Add button -->
<script type="text/javascript">
$(document).ready(function() {
$('<a href="#slideshow" style="background: #1b0504 url(/local/templates/villagio/img/ico-video-arrow.png) no-repeat 25px 22px; left: 0px; padding-left: 70px;  font-size: 20px; text-decoration: none; width: 100px;" class="img-plate__desc img-plate__desc_fix-corner img-plate__link slideshow-btn">Слайдшоу</a>').insertAfter(".img-plate__desc_fix-corner");
});
</script>

<? //add video in detail page
if ($arResult["DISPLAY_PROPERTIES"]['video_watch']):?>
<div id="slideshow" style="margin-top: 24px;"> 
<?echo $arResult['DISPLAY_PROPERTIES']['video_watch']['DISPLAY_VALUE']; 
endif;?>
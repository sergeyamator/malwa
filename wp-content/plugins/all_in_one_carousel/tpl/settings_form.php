<div class="wrap">
	<div id="lbg_logo">
			<h2>Carousel Settings for carousel: <span style="color:#FF0000; font-weight:bold;"><?=$_SESSION['xname']?> - ID #<?=$_SESSION['xid']?></span></h2>
 	</div>
  <form method="POST" enctype="multipart/form-data">
	<script>
	jQuery(function() {
		var icons = {
			header: "ui-icon-circle-arrow-e",
			headerSelected: "ui-icon-circle-arrow-s"
		};
		jQuery( "#accordion" ).accordion({
			icons: icons,
			autoHeight: false
		});
	});
	</script>


<div id="accordion">
  <h3><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General Settings</a></h3>
  <div style="padding:30px;">
	  <table class="wp-list-table widefat fixed pages" cellspacing="0">
     
		  <tr>
		    <td align="right" valign="top" class="row-title" width="30%">Carousel Name</td>
		    <td align="left" valign="top" width="75%"><input name="name" type="text" size="40" id="name" value="<?=$_SESSION['xname'];?>"/></td>
	      </tr>
		  <tr>
            <td width="30%" align="right" valign="top" class="row-title">Carousel Width</td>
		    <td width="75%" align="left" valign="top"><input name="width" type="text" size="25" id="width" value="<?=$_POST['width'];?>"/></td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Carousel Height</td>
		    <td align="left" valign="top"><input name="height" type="text" size="25" id="height" value="<?=$_POST['height'];?>"/></td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Skin Name</td>
		    <td align="left" valign="middle"><select name="skin" id="skin">
		      <option value="sweet" <?=(($_POST['skin']=='sweet')?'selected="selected"':'')?>>sweet</option>
		      <option value="powerful" <?=(($_POST['skin']=='powerful')?'selected="selected"':'')?>>powerful</option>
		      <option value="charming" <?=(($_POST['skin']=='charming')?'selected="selected"':'')?>>charming</option>
            </select></td>
	      </tr>
          <tr>
		    <td align="right" valign="top" class="row-title">Responsive</td>
		    <td align="left" valign="middle"><select name="responsive" id="responsive">
              <option value="true" <?=(($_POST['responsive']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['responsive']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Responsive Relative To Browser</td>
		    <td align="left" valign="middle"><select name="responsiveRelativeToBrowser" id="responsiveRelativeToBrowser">
              <option value="true" <?=(($_POST['responsiveRelativeToBrowser']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['responsiveRelativeToBrowser']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Auto Play (in seconds)</td>
		    <td align="left" valign="middle"><input name="autoPlay" type="text" size="25" id="autoPlay" value="<?=$_POST['autoPlay'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Number Of Visible Items</td>
		    <td align="left" valign="middle"><input name="numberOfVisibleItems" type="text" size="25" id="numberOfVisibleItems" value="<?=$_POST['numberOfVisibleItems'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Elements Horizontal Spacing</td>
		    <td align="left" valign="middle"><input name="elementsHorizontalSpacing" type="text" size="25" id="elementsHorizontalSpacing" value="<?=$_POST['elementsHorizontalSpacing'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Elements Vertical Spacing</td>
		    <td align="left" valign="middle"><input name="elementsVerticalSpacing" type="text" size="25" id="elementsVerticalSpacing" value="<?=$_POST['elementsVerticalSpacing'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Vertical Adjustment</td>
		    <td align="left" valign="middle"><input name="verticalAdjustment" type="text" size="25" id="verticalAdjustment" value="<?=$_POST['verticalAdjustment'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Animation Time</td>
		    <td align="left" valign="middle"><input name="animationTime" type="text" size="25" id="animationTime" value="<?=$_POST['animationTime'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Easing</td>
		    <td align="left" valign="middle"><select name="easing" id="easing">
		      <option value="easeInQuad" <?=(($_POST['easing']=='easeInQuad')?'selected="selected"':'')?>>easeInQuad</option>
		      <option value="easeOutQuad" <?=(($_POST['easing']=='easeOutQuad')?'selected="selected"':'')?>>easeOutQuad</option>
              <option value="easeInOutQuad" <?=(($_POST['easing']=='easeInOutQuad')?'selected="selected"':'')?>>easeInOutQuad</option>
              <option value="easeInCubic" <?=(($_POST['easing']=='easeInCubic')?'selected="selected"':'')?>>easeInCubic</option>
              <option value="easeOutCubic" <?=(($_POST['easing']=='easeOutCubic')?'selected="selected"':'')?>>easeOutCubic</option>
              <option value="easeInOutCubic" <?=(($_POST['easing']=='easeInOutCubic')?'selected="selected"':'')?>>easeInOutCubic</option>              
              <option value="easeInQuart" <?=(($_POST['easing']=='easeInQuart')?'selected="selected"':'')?>>easeInQuart</option>
              <option value="easeOutQuart" <?=(($_POST['easing']=='easeOutQuart')?'selected="selected"':'')?>>easeOutQuart</option>
              <option value="easeInOutQuart" <?=(($_POST['easing']=='easeInOutQuart')?'selected="selected"':'')?>>easeInOutQuart</option>
              <option value="easeInSine" <?=(($_POST['easing']=='easeInSine')?'selected="selected"':'')?>>easeInSine</option>   
              <option value="easeOutSine" <?=(($_POST['easing']=='easeOutSine')?'selected="selected"':'')?>>easeOutSine</option>
              <option value="easeOutSine" <?=(($_POST['easing']=='easeOutSine')?'selected="selected"':'')?>>easeOutSine</option>
              <option value="easeInExpo" <?=(($_POST['easing']=='easeInExpo')?'selected="selected"':'')?>>easeInExpo</option>
              <option value="easeOutExpo" <?=(($_POST['easing']=='easeOutExpo')?'selected="selected"':'')?>>easeOutExpo</option>
              <option value="easeInOutExpo" <?=(($_POST['easing']=='easeInOutExpo')?'selected="selected"':'')?>>easeInOutExpo</option>
              <option value="easeInQuint" <?=(($_POST['easing']=='easeInQuint')?'selected="selected"':'')?>>easeInQuint</option>
              <option value="easeOutQuint" <?=(($_POST['easing']=='easeOutQuint')?'selected="selected"':'')?>>easeOutQuint</option>
              <option value="easeInOutQuint" <?=(($_POST['easing']=='easeInOutQuint')?'selected="selected"':'')?>>easeInOutQuint</option>
              <option value="easeInCirc" <?=(($_POST['easing']=='easeInCirc')?'selected="selected"':'')?>>easeInCirc</option>
              <option value="easeOutCirc" <?=(($_POST['easing']=='easeOutCirc')?'selected="selected"':'')?>>easeOutCirc</option>
              <option value="easeInOutCirc" <?=(($_POST['easing']=='easeInOutCirc')?'selected="selected"':'')?>>easeInOutCirc</option>
              <option value="easeInElastic" <?=(($_POST['easing']=='easeInElastic')?'selected="selected"':'')?>>easeInElastic</option>
              <option value="easeOutElastic" <?=(($_POST['easing']=='easeOutElastic')?'selected="selected"':'')?>>easeOutElastic</option>
              <option value="easeInOutElastic" <?=(($_POST['easing']=='easeInOutElastic')?'selected="selected"':'')?>>easeInOutElastic</option>
              <option value="easeInBack" <?=(($_POST['easing']=='easeInBack')?'selected="selected"':'')?>>easeInBack</option>
              <option value="easeOutBack" <?=(($_POST['easing']=='easeOutBack')?'selected="selected"':'')?>>easeOutBack</option>
              <option value="easeInOutBack" <?=(($_POST['easing']=='easeInOutBack')?'selected="selected"':'')?>>easeInOutBack</option>
              <option value="easeInBounce" <?=(($_POST['easing']=='easeInBounce')?'selected="selected"':'')?>>easeInBounce</option>
              <option value="easeOutBounce" <?=(($_POST['easing']=='easeOutBounce')?'selected="selected"':'')?>>easeOutBounce</option>
              <option value="easeInOutBounce" <?=(($_POST['easing']=='easeInOutBounce')?'selected="selected"':'')?>>easeInOutBounce</option>
              <!--<option value="zaq2" <?=(($_POST['easing']=='zaq2')?'selected="selected"':'')?>>zaq2</option>-->
	        </select></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Resize Images</td>
		    <td align="left" valign="middle"><select name="resizeImages" id="resizeImages">
              <option value="true" <?=(($_POST['resizeImages']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['resizeImages']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Show Element Title</td>
		    <td align="left" valign="middle"><select name="showElementTitle" id="showElementTitle">
              <option value="true" <?=(($_POST['showElementTitle']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['showElementTitle']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr> 
		  <tr>
		    <td align="right" valign="top" class="row-title">Target Window For Link</td>
		    <td align="left" valign="middle"><select name="target" id="target">
		      <option value="_blank" <?=(($_POST['target']=='_blank')?'selected="selected"':'')?>>_blank</option>
		      <option value="_self" <?=(($_POST['target']=='_self')?'selected="selected"':'')?>>_self</option>
            </select></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Enable Touch Screen</td>
		    <td align="left" valign="middle"><select name="enableTouchScreen" id="enableTouchScreen">
              <option value="true" <?=(($_POST['enableTouchScreen']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['enableTouchScreen']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>        

        
      </table>
  </div>
  <h3><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Controllers Settings</a></h3>
  <div style="padding:30px;">
	  <table class="wp-list-table widefat fixed pages" cellspacing="0">

		  <tr>
		    <td align="right" valign="top" class="row-title" width="30%">Show All Controllers</td>
		    <td align="left" valign="middle" width="70%"><select name="showAllControllers" id="showAllControllers">
              <option value="true" <?=(($_POST['showAllControllers']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['showAllControllers']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Show Navigation Arrows</td>
		    <td align="left" valign="middle"><select name="showNavArrows" id="showNavArrows">
              <option value="true" <?=(($_POST['showNavArrows']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['showNavArrows']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
         <tr>
		    <td align="right" valign="top" class="row-title">Show Navigation Arrows On Init</td>
		    <td align="left" valign="middle"><select name="showOnInitNavArrows" id="showOnInitNavArrows">
              <option value="true" <?=(($_POST['showOnInitNavArrows']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['showOnInitNavArrows']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
         <tr>
		    <td align="right" valign="top" class="row-title">Auto Hide Navigation Arrows</td>
		    <td align="left" valign="middle"><select name="autoHideNavArrows" id="autoHideNavArrows">
              <option value="true" <?=(($_POST['autoHideNavArrows']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['autoHideNavArrows']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Show Bottom Navigation</td>
		    <td align="left" valign="middle"><select name="showBottomNav" id="autoPlay">
              <option value="true" <?=(($_POST['showBottomNav']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['showBottomNav']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Show Bottom Navigation On Init</td>
		    <td align="left" valign="middle"><select name="showOnInitBottomNav" id="showOnInitBottomNav">
              <option value="true" <?=(($_POST['showOnInitBottomNav']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['showOnInitBottomNav']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Auto Hide Bottom Navigation</td>
		    <td align="left" valign="middle"><select name="autoHideBottomNav" id="autoHideBottomNav">
              <option value="true" <?=(($_POST['autoHideBottomNav']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['autoHideBottomNav']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Show Preview Thumbs</td>
		    <td align="left" valign="middle"><select name="showPreviewThumbs" id="showPreviewThumbs">
              <option value="true" <?=(($_POST['showPreviewThumbs']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['showPreviewThumbs']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Next&amp;Prev Buttons Margin Top</td>
		    <td align="left" valign="middle"><input name="nextPrevMarginTop" type="text" size="15" id="nextPrevMarginTop" value="<?=$_POST['nextPrevMarginTop'];?>"/></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Play Movie Margin Top</td>
		    <td align="left" valign="middle"><input name="playMovieMarginTop" type="text" size="15" id="playMovieMarginTop" value="<?=$_POST['playMovieMarginTop'];?>"/></td>
	    </tr>  
        <tr>
		    <td align="right" valign="top" class="row-title">Bottom Navigation Margin Bottom</td>
		    <td align="left" valign="middle"><input name="bottomNavMarginBottom" type="text" size="15" id="bottomNavMarginBottom" value="<?=$_POST['bottomNavMarginBottom'];?>"/></td>
	    </tr>              

      </table>
  </div>
  

<h3><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Circle Timer Settings</a></h3>
  <div style="padding:30px;">
	  <table class="wp-list-table widefat fixed pages" cellspacing="0">
		<tr>
		    <td align="right" valign="top" class="row-title" width="30%">Show Circle Timer</td>
		    <td align="left" valign="middle" width="70%"><select name="showCircleTimer" id="showCircleTimer">
              <option value="true" <?=(($_POST['showCircleTimer']=='true')?'selected="selected"':'')?>>true</option>
              <option value="false" <?=(($_POST['showCircleTimer']=='false')?'selected="selected"':'')?>>false</option>
            </select></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Circle Radius</td>
		    <td align="left" valign="middle"><input name="circleRadius" type="text" size="15" id="circleRadius" value="<?=$_POST['circleRadius'];?>"/></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Circle Line Width</td>
		    <td align="left" valign="middle"><input name="circleLineWidth" type="text" size="15" id="circleLineWidth" value="<?=$_POST['circleLineWidth'];?>"/></td>
	    </tr>
<tr>
		    <td align="right" valign="top" class="row-title">Circle Color</td>
		    <td align="left" valign="top"><input name="circleColor" type="text" size="25" id="circleColor" value="<?=$_POST['circleColor'];?>" style="background-color:#<?=$_POST['circleColor'];?>" />
                <script>
jQuery('#circleColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Circle Alpha</td>
		    <td align="left" valign="middle"><script>
	jQuery(function() {
		jQuery( "#circleAlpha-slider-range-min" ).slider({
			range: "min",
			value: <?=$_POST['circleAlpha'];?>,
			min: 0,
			max: 100,
			slide: function( event, ui ) {
				jQuery( "#circleAlpha" ).val(ui.value );
			}
		});
		jQuery( "#circleAlpha" ).val( jQuery( "#circleAlpha-slider-range-min" ).slider( "value" ) );
	});
	        </script>
                <div id="circleAlpha-slider-range-min" class="inlinefloatleft"></div>
		      <div class="inlinefloatleft" style="padding-left:20px;">%
		        <input name="circleAlpha" type="text" size="10" id="circleAlpha" style="border:0; color:#000000; font-weight:bold;"/>
	          </div></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Behind Circle Color</td>
		    <td align="left" valign="top"><input name="behindCircleColor" type="text" size="25" id="behindCircleColor" value="<?=$_POST['behindCircleColor'];?>" style="background-color:#<?=$_POST['behindCircleColor'];?>" />
                <script>
jQuery('#behindCircleColor').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		jQuery(el).val(hex);
		jQuery(el).css("background-color",'#'+hex);
		jQuery(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		jQuery(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	jQuery(this).ColorPickerSetColor(this.value);
});
              </script>            </td>
	    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Behind Circle Alpha</td>
		    <td align="left" valign="middle"><script>
	jQuery(function() {
		jQuery( "#behindCircleAlpha-slider-range-min" ).slider({
			range: "min",
			value: <?=$_POST['behindCircleAlpha'];?>,
			min: 0,
			max: 100,
			slide: function( event, ui ) {
				jQuery( "#behindCircleAlpha" ).val(ui.value );
			}
		});
		jQuery( "#behindCircleAlpha" ).val( jQuery( "#behindCircleAlpha-slider-range-min" ).slider( "value" ) );
	});
	        </script>
                <div id="behindCircleAlpha-slider-range-min" class="inlinefloatleft"></div>
		      <div class="inlinefloatleft" style="padding-left:20px;">%
		        <input name="behindCircleAlpha" type="text" size="10" id="behindCircleAlpha" style="border:0; color:#000000; font-weight:bold;"/>
	          </div></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Circle Left Position Correction</td>
		    <td align="left" valign="middle"><input name="circleLeftPositionCorrection" type="text" size="15" id="circleLeftPositionCorrection" value="<?=$_POST['circleLeftPositionCorrection'];?>"/></td>
	    </tr>
        <tr>
		    <td align="right" valign="top" class="row-title">Circle Top Position Correction</td>
		    <td align="left" valign="middle"><input name="circleTopPositionCorrection" type="text" size="15" id="circleTopPositionCorrection" value="<?=$_POST['circleTopPositionCorrection'];?>"/></td>
	    </tr>      
        </table>
  </div>  

  
  
</div>

<div style="text-align:center; padding:20px 0px 20px 0px;"><input name="Submit" type="submit" id="Submit" class="button-primary" value="Update Carousel Settings"></div>

</form>
</div>
<script>
jQuery(document).ready(function() {
		window.send_to_editor = function(html) {
		 imgurl = jQuery('img',html).attr('src');
		 //jQuery('#'+formfield).val(imgurl);
		 if (formfield=='img') {
		 	document.forms["form-playlist-all_in_one_carousel-"+the_i].img.value=imgurl;
		 } else {
			 document.forms["form-playlist-all_in_one_carousel-"+the_i].thumbnail.value=imgurl;
		 }
		 //alert (the_i); 	
		 jQuery('#'+formfield+'_'+the_i).attr('src',imgurl);
		 tb_remove();
		 
		}
});		
</script>


<div class="wrap">
	<div id="lbg_logo">
			<h2>Playlist for carousel: <span style="color:#FF0000; font-weight:bold;"><?=$_SESSION['xname']?> - ID #<?=$_SESSION['xid']?></span></h2>
 	</div>
  <div id="all_in_one_carousel_updating_witness"><img src="<?=plugins_url('images/ajax-loader.gif', dirname(__FILE__))?>" /> Updating...</div>
  
  
<div style="text-align:center; padding:0px 0px 20px 0px;"><img src="<?=plugins_url('images/icons/add_icon.gif', dirname(__FILE__))?>" alt="add" align="absmiddle" /> <a href="?page=all_in_one_carousel_Playlist&xmlf=add_playlist_record">Add new</a></div>
<div style="text-align:left; padding:10px 0px 10px 14px;">#Initial Order</div>


<ul id="all_in_one_carousel_sortable">
	<?php foreach ( $result as $row ) 
	{
		$row=all_in_one_carousel_unstrip_array($row); ?>
	<li class="ui-state-default cursor_move" id="<?=$row['id']?>">#<?=$row['ord']?> ---  <img src="<?=$row['img']?>" height="30" align="absmiddle" id="top_image_<?=$row['id']?>" /><div class="toogle-btn-closed" id="toogle-btn<?=$row['ord']?>" onclick="mytoggle('toggleable<?=$row['ord']?>','toogle-btn<?=$row['ord']?>');"></div><div class="options"><a href="javascript: void(0);" onclick="all_in_one_carousel_delete_entire_record(<?=$row['id']?>,<?=$row['ord']?>);">Delete</a></div>
	<div class="toggleable" id="toggleable<?=$row['ord']?>">
    <form method="POST" enctype="multipart/form-data" id="form-playlist-all_in_one_carousel-<?=$row['ord']?>">
	    <input name="id" type="hidden" value="<?=$row['id']?>" />
        <input name="ord" type="hidden" value="<?=$row['ord']?>" />
		<table width="100%" cellspacing="0" class="wp-list-table widefat fixed pages" style="background-color:#FFFFFF;">
		  <tr>
		    <td align="left" valign="middle" width="25%"></td>
		    <td align="left" valign="middle" width="77%"></td>
		  </tr>
		  <tr>
		    <td colspan="2" align="center" valign="middle">&nbsp;</td>
		  </tr>
          <tr>
            <td align="right" valign="top" class="row-title">Image</td>
            <td align="left" valign="middle"><input name="img" type="text" id="img" size="100" value="<?=stripslashes($row['img']);?>" />
              <input name="upload_img_button_<?=$row['ord']?>" type="button" id="upload_img_button_carousel_<?=$row['ord']?>" value="Change Image" />
              <br />
              Enter an URL or upload an image<br />
              <br />
              Recommended size for each skin:
              <blockquote>
              Sweet: 	520px x 385px<br />
				Powerful: 	326px x 329px<br />
				Charming: 	452px x 302px 
              </blockquote><br />
If you need other dimensions please edit in wp-content\plugins\all_in_one_carousel\carousel\allinone_carousel.css file the "contentHolderUnit" class associated with the skin:
<blockquote>.allinone_carousel.sweet .contentHolderUnit <br />
.allinone_carousel.powerful .contentHolderUnit <br />
.allinone_carousel.charming .contentHolderUnit </blockquote>
              </td>
            </tr>
          <tr>
        <td align="right" valign="top" class="row-title">&nbsp;</td>
        <td align="left" valign="middle"><img src="<?=$row['img']?>" width="300" id="img_<?=$row['ord']?>" /></td>
      </tr>
		<tr>
		    <td align="right" valign="top" class="row-title">Link For The Image</td>
		    <td align="left" valign="top"><input name="data-link" type="text" size="60" id="data-link" value="<?=$row['data-link'];?>"/></td>
	      </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Link Target</td>
		    <td align="left" valign="top"><select name="data-target" id="data-target">
              <option value="" <?=(($row['data-target']=='')?'selected="selected"':'')?>>select...</option>
		      <option value="_blank" <?=(($row['data-target']=='_blank')?'selected="selected"':'')?>>_blank</option>
		      <option value="_self" <?=(($row['data-target']=='_self')?'selected="selected"':'')?>>_self</option>
		      
	        </select></td>
	      </tr>         
          <tr>
            <td align="right" valign="top" class="row-title">Thumbnail</td>
            <td align="left" valign="middle"><input name="thumbnail" type="text" id="thumbnail" size="100" value="<?=stripslashes($row['thumbnail'])?>" />
              <input name="upload_thumbnail_button_<?=$row['ord']?>" type="button" id="upload_thumbnail_button_carousel_<?=$row['ord']?>" value="Change Thumbnail" />
              <br />
              Enter an URL or upload an image<br />
              <br />
              Recommended size for each skin: 80px x 80px </td>
            </tr>
          <tr>
        <td align="right" valign="top" class="row-title">&nbsp;</td>
        <td align="left" valign="middle"><img src="<?=$row['thumbnail']?>" name="thumbnail_<?=$row['ord']?>" id="thumbnail_<?=$row['ord']?>" /></td>
      </tr>
          <tr>
            <td align="right" valign="top" class="row-title">Image Title</td>
            <td align="left" valign="top"><textarea name="data-title" id="data-title" cols="45" rows="5"><?=stripslashes($row['data-title']);?></textarea></td>
          </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Video Beneath Image</td>
		    <td align="left" valign="middle"><select name="data-video" id="data-video">
		      <option value="false" <?=(($row['data-video']=='false')?'selected="selected"':'')?>>false</option>
		      <option value="true" <?=(($row['data-video']=='true')?'selected="selected"':'')?>>true</option>
		      </select></td>
		    </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">Content</td>
		    <td align="left" valign="top"><textarea name="content" id="content" cols="45" rows="5"><?=stripslashes($row['content']);?></textarea></td>
		  </tr>
		  <tr>
		    <td align="right" valign="top" class="row-title">&nbsp;</td>
		    <td align="left" valign="middle">&nbsp;</td>
		    </tr>
<!--		  <tr>
		    <td align="right" valign="top" class="row-title">Manage Texts Over the Photo</td>
		    <td align="left" valign="middle"><input name="texts<?=$row['ord']?>" id="texts<?=$row['ord']?>" type="button" class="button-primary" value="Open Texts Editor" onclick="all_in_one_carousel_open_dialog(<?=$row['ord']?>)"></td>
   
		  </tr>        -->  
		  <tr>
		    <td colspan="2" align="left" valign="middle">
            
<div id="dialog<?=$row['ord']?>" title="Manage Texts Over the Photo" style="display:none; padding:0; margin:0;">
	<div id="photo_div<?=$row['id']?>" style="padding:50px 0 0px 50px;"><img src="<?=$row['img']?>" />
    <?php
    	$safe_sql=$wpdb->prepare( "SELECT * FROM (".$wpdb->prefix ."all_in_one_carousel_texts) WHERE photoid = %d ORDER BY id",$row['id'] );
		$result_text = $wpdb->get_results($safe_sql,ARRAY_A);
		
		foreach ( $result_text as $row_text ) {
	?>	

		<div id="draggable<?=$row_text['id']?>" class="my_draggable" style="left:<?=$row_text['data-initial-left']+50?>px;top:<?=$row_text['data-initial-top']+50-32?>px;"><h2>&nbsp;</h2><textarea name="content<?=$row_text['id']?>" id="content<?=$row_text['id']?>" cols="30" rows="1"><?=stripslashes($row_text['content'])?></textarea></div>
<script>
		jQuery("#draggable<?=$row_text['id']?>").draggable( { 
			handle: 'h2',
			start: function(event, ui) {
				jQuery("#text_line_settings<?=$row_text['id']?>").css('background','#cccccc');
			},
			stop: function(event, ui) {
				jQuery("#text_line_settings<?=$row_text['id']?>").css('background','#ffffff');
			},
			drag: function(event, ui) { 
				jQuery("#data-initial-left<?=$row_text['id']?>").val(all_in_one_carousel_process_val(jQuery(this).css('left'),'left'));
				jQuery("#data-initial-top<?=$row_text['id']?>").val(all_in_one_carousel_process_val(jQuery(this).css('top'),'top'));
			}
		});
</script>    
    <div class="text_line_settings" id="text_line_settings<?=$row_text['id']?>">
    <table width="100%" border="0">
  <tr>
    <td>Initial Left:</td>
    <td> <input name="data-initial-left<?=$row_text['id']?>" type="text" id="data-initial-left<?=$row_text['id']?>" size="10" value="<?=$row_text['data-initial-left']?>" /> px</td>
    <td>Initial Top:</td>
    <td><input name="data-initial-top<?=$row_text['id']?>" type="text" id="data-initial-top<?=$row_text['id']?>" size="10" value="<?=$row_text['data-initial-top']?>" /> px</td>
    <td>Final Left:</td>
    <td><input name="data-final-left<?=$row_text['id']?>" type="text" id="data-final-left<?=$row_text['id']?>" size="10" value="<?=$row_text['data-final-left']?>" /> px</td>
    <td>Final Top:</td>
    <td><input name="data-final-top<?=$row_text['id']?>" type="text" id="data-final-top<?=$row_text['id']?>" size="10" value="<?=$row_text['data-final-top']?>" /> px</td>
  </tr>
  <tr>
    <td>Duration:</td>
    <td><input name="data-duration<?=$row_text['id']?>" type="text" id="data-duration<?=$row_text['id']?>" size="10" value="<?=$row_text['data-duration']?>" /> s</td>
    <td>Initial Opacity:</td>
    <td><input name="data-fade-start<?=$row_text['id']?>" type="text" id="data-fade-start<?=$row_text['id']?>" size="10" value="<?=$row_text['data-fade-start']?>" /> (Value between 0-100)</td>
    <td>Delay:</td>
    <td><input name="data-delay<?=$row_text['id']?>" type="text" id="data-delay<?=$row_text['id']?>" size="10" value="<?=$row_text['data-delay']?>" /> s</td>
    <td>CSS Styles</td>
    <td><textarea name="css<?=$row_text['id']?>" id="css<?=$row_text['id']?>" cols="30" rows="3"><?=stripslashes($row_text['css'])?></textarea></td>
  </tr>
	<tr>
	<td colspan="8"><div class="delete_text" onclick="all_in_one_carousel_delete_text_line(<?=$row_text['id']?>)">&nbsp;</div></td>
	</tr>  
</table>
    </div>
    
    <? } ?>    
    </div>
    <p><input name="all_in_one_carousel_add_text_line<?=$row['ord']?>" id="all_in_one_carousel_add_text_line<?=$row['ord']?>" type="button" class="button-primary" value="Add New Text Line" onclick="all_in_one_carousel_add_text_line(<?=$row['id']?>)"></p>

 
</div>             
            </td>
		    </tr>
		  <tr>
		    <td colspan="2" align="left" valign="middle">&nbsp;</td>
		  </tr>
		  <tr>
		    <td colspan="2" align="center" valign="middle"><input name="Submit<?=$row['ord']?>" id="Submit<?=$row['ord']?>" type="submit" class="button-primary" value="Update Playlist Record"></td>
		  </tr>
		</table>
       
            
        </form>
            <div id="ajax-message-<?=$row['ord']?>" class="ajax-message"></div>
    </div>
    </li>
	<?php } ?>
</ul>





</div>				
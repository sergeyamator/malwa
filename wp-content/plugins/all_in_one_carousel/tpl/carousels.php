<div class="wrap">
	<div id="lbg_logo">
			<h2>Manage Carousels</h2>
 	</div>
    <div><p>From this section you can add multiple carousels. When you'll insert the carousel into your page using the shortcode, please specify the carousel ID settings: <br />
Ex: [all_in_one_carousel settings_id='1']</p>
    </div>

<div style="text-align:center; padding:0px 0px 20px 0px;"><img src="<?=plugins_url('images/icons/add_icon.gif', dirname(__FILE__))?>" alt="add" align="absmiddle" /> <a href="?page=all_in_one_carousel_Add_New">Add new (carousel)</a></div>
    
<table width="100%" class="widefat">

			<thead>
				<tr>
					<th scope="col" width="12%">ID</th>
					<th scope="col" width="52%">Name</th>
					<th scope="col" width="36%">Action</th>
				</tr>
			</thead>
            
<tbody>
<?php foreach ( $result as $row ) 
	{
		$row=all_in_one_carousel_unstrip_array($row); ?>
							<tr class="alternate author-self status-publish" valign="top">
					<td><?=$row['id']?></td>
					<td><?=$row['name']?></td>				
					<td>
						<a href="?page=all_in_one_carousel_Settings&amp;id=<?=$row['id']?>&amp;name=<?=$row['name']?>">Carousel Settings</a> &nbsp;&nbsp;|&nbsp;&nbsp; 
						<a href="?page=all_in_one_carousel_Playlist&amp;id=<?=$row['id']?>&amp;name=<?=$row['name']?>">Playlist</a> &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="?page=all_in_one_carousel_Manage_Carousels&id=<?=$row['id']?>" onclick="return confirm('Are you sure?')">Delete</a></td>
				</tr>
<? } ?>                
						</tbody>
		</table>                





</div>				
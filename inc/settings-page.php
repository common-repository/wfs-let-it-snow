<div class="wrap">
	
	<h1><?php _e( 'WFS Let It Snow Plugin', 'wfs-letitsnow' ); ?> v<?php echo WFS_LIS_VERSION; ?></h1>
	
	<div id="poststuff">
		
		<div id="post-body" class="metabox-holder columns-2">
			
			<div id="post-body-content">
				
				<div class="meta-box-sortables ui-sortable">
					
					<div class="postbox">
						
						<h3><span><?php _e( 'Plugin Options', 'wfs-letitsnow' ); ?></span></h3>
						
						<div class="inside">
							
							<form method="post" action="options.php">
								
								<?php settings_fields( 'wfs-letitsnow-group' ); ?>
								<?php $lis_options = get_option( 'wfs_letitsnow_options' ); ?>
								
								<table class="form-table">
									
									<tr valign="top">
										<th scope="row"><?php _e( 'Do you want to Let It Snow?', 'wfs-letitsnow' ); ?></th>
										<td>
											<select name="wfs_letitsnow_options[status]">
												<option <?php if( $lis_options['status'] == false ) : ?>selected="selected"<?php endif; ?> value="false"><?php _e( 'No thanks', 'wfs-letitsnow' ); ?></option>
												<option <?php if( $lis_options['status'] == true ) : ?>selected="selected"<?php endif; ?> value="true"><?php _e( 'Yes please!', 'wfs-letitsnow' ); ?></option>
											</select>
										</td>
									</tr>
									
									<tr valign="top">
										<th scope="row"><?php _e( 'Where should the snow fall?', 'wfs-letitsnow' ); ?></th>
										<td>
											<select name="wfs_letitsnow_options[scope]">
												<option <?php if( $lis_options['scope'] == 'homepage' ) : ?>selected="selected"<?php endif; ?> value="homepage"><?php _e( 'Homepage Only', 'wfs-letitsnow' ); ?></option>
												<option <?php if( $lis_options['scope'] == 'site' ) : ?>selected="selected"<?php endif; ?> value="site"><?php _e( 'Entire Site', 'wfs-letitsnow' ); ?></option>
											</select>
										</td>
									</tr>
									
									<tr valign="top">
										<th scope="row"><?php _e( 'Type of snowfall', 'wfs-letitsnow' ); ?></th>
										<td>
											<select name="wfs_letitsnow_options[flakeCount]">
												<option <?php if( $lis_options['flakeCount'] == 350 ) : ?>selected="selected"<?php endif; ?> value="350"><?php _e( 'Light flurry', 'wfs-letitsnow' ); ?></option>
												<option <?php if( $lis_options['flakeCount'] == 700 ) : ?>selected="selected"<?php endif; ?> value="700"><?php _e( 'Medium flurry', 'wfs-letitsnow' ); ?></option>
												<option <?php if( $lis_options['flakeCount'] == 1300 ) : ?>selected="selected"<?php endif; ?> value="1300"><?php _e( 'Heavy flurry', 'wfs-letitsnow' ); ?></option>
												<option <?php if( $lis_options['flakeCount'] == 2000 ) : ?>selected="selected"<?php endif; ?> value="2000"><?php _e( 'Whiteout!', 'wfs-letitsnow' ); ?></option>
											</select>
										</td>
									</tr>
									
									<tr valign="top">
										<th scope="row"><?php _e( 'Minimum flake size', 'wfs-letitsnow' ); ?></th>
										<td>
											<select name="wfs_letitsnow_options[minSize]">
												<option <?php if( $lis_options['minSize'] == 1 ) : ?>selected="selected"<?php endif; ?> value="1">1</option>
												<option <?php if( $lis_options['minSize'] == 2 ) : ?>selected="selected"<?php endif; ?> value="2">2</option>
												<option <?php if( $lis_options['minSize'] == 3 ) : ?>selected="selected"<?php endif; ?> value="3">3</option>
												<option <?php if( $lis_options['minSize'] == 4 ) : ?>selected="selected"<?php endif; ?> value="4">4</option>
												<option <?php if( $lis_options['minSize'] == 5 ) : ?>selected="selected"<?php endif; ?> value="5">5</option>
												<option <?php if( $lis_options['minSize'] == 6 ) : ?>selected="selected"<?php endif; ?> value="6">6</option>
												<option <?php if( $lis_options['minSize'] == 7 ) : ?>selected="selected"<?php endif; ?> value="7">7</option>
												<option <?php if( $lis_options['minSize'] == 8 ) : ?>selected="selected"<?php endif; ?> value="8">8</option>
												<option <?php if( $lis_options['minSize'] == 9 ) : ?>selected="selected"<?php endif; ?> value="9">9</option>
												<option <?php if( $lis_options['minSize'] == 10 ) : ?>selected="selected"<?php endif; ?> value="10">10</option>
											</select>
										</td>
									</tr>
									
									<tr valign="top">
										<th scope="row"><?php _e( 'Maximum flake size', 'wfs-letitsnow' ); ?></th>
										<td>
											<select name="wfs_letitsnow_options[maxSize]">
												<option <?php if( $lis_options['maxSize'] == 1 ) : ?>selected="selected"<?php endif; ?> value="1">1</option>
												<option <?php if( $lis_options['maxSize'] == 2 ) : ?>selected="selected"<?php endif; ?> value="2">2</option>
												<option <?php if( $lis_options['maxSize'] == 3 ) : ?>selected="selected"<?php endif; ?> value="3">3</option>
												<option <?php if( $lis_options['maxSize'] == 4 ) : ?>selected="selected"<?php endif; ?> value="4">4</option>
												<option <?php if( $lis_options['maxSize'] == 5 ) : ?>selected="selected"<?php endif; ?> value="5">5</option>
												<option <?php if( $lis_options['maxSize'] == 6 ) : ?>selected="selected"<?php endif; ?> value="6">6</option>
												<option <?php if( $lis_options['maxSize'] == 7 ) : ?>selected="selected"<?php endif; ?> value="7">7</option>
												<option <?php if( $lis_options['maxSize'] == 8 ) : ?>selected="selected"<?php endif; ?> value="8">8</option>
												<option <?php if( $lis_options['maxSize'] == 9 ) : ?>selected="selected"<?php endif; ?> value="9">9</option>
												<option <?php if( $lis_options['maxSize'] == 10 ) : ?>selected="selected"<?php endif; ?> value="10">10</option>
											</select>
										</td>
									</tr>
									
									<tr valign="top">
										<th scope="row"><?php _e( 'Minimum flake speed', 'wfs-letitsnow' ); ?></th>
										<td>
											<select name="wfs_letitsnow_options[minSpeed]">
												<option <?php if( $lis_options['minSpeed'] == 1 ) : ?>selected="selected"<?php endif; ?> value="1">1</option>
												<option <?php if( $lis_options['minSpeed'] == 2 ) : ?>selected="selected"<?php endif; ?> value="2">2</option>
												<option <?php if( $lis_options['minSpeed'] == 3 ) : ?>selected="selected"<?php endif; ?> value="3">3</option>
												<option <?php if( $lis_options['minSpeed'] == 4 ) : ?>selected="selected"<?php endif; ?> value="4">4</option>
												<option <?php if( $lis_options['minSpeed'] == 5 ) : ?>selected="selected"<?php endif; ?> value="5">5</option>
												<option <?php if( $lis_options['minSpeed'] == 6 ) : ?>selected="selected"<?php endif; ?> value="6">6</option>
												<option <?php if( $lis_options['minSpeed'] == 7 ) : ?>selected="selected"<?php endif; ?> value="7">7</option>
												<option <?php if( $lis_options['minSpeed'] == 8 ) : ?>selected="selected"<?php endif; ?> value="8">8</option>
												<option <?php if( $lis_options['minSpeed'] == 9 ) : ?>selected="selected"<?php endif; ?> value="9">9</option>
												<option <?php if( $lis_options['minSpeed'] == 10 ) : ?>selected="selected"<?php endif; ?> value="10">10</option>
											</select>
										</td>
									</tr>
									
									<tr valign="top">
										<th scope="row"><?php _e( 'Maximum flake speed', 'wfs-letitsnow' ); ?></th>
										<td>
											<select name="wfs_letitsnow_options[maxSpeed]">
												<option <?php if( $lis_options['maxSpeed'] == 1 ) : ?>selected="selected"<?php endif; ?> value="1">1</option>
												<option <?php if( $lis_options['maxSpeed'] == 2 ) : ?>selected="selected"<?php endif; ?> value="2">2</option>
												<option <?php if( $lis_options['maxSpeed'] == 3 ) : ?>selected="selected"<?php endif; ?> value="3">3</option>
												<option <?php if( $lis_options['maxSpeed'] == 4 ) : ?>selected="selected"<?php endif; ?> value="4">4</option>
												<option <?php if( $lis_options['maxSpeed'] == 5 ) : ?>selected="selected"<?php endif; ?> value="5">5</option>
												<option <?php if( $lis_options['maxSpeed'] == 6 ) : ?>selected="selected"<?php endif; ?> value="6">6</option>
												<option <?php if( $lis_options['maxSpeed'] == 7 ) : ?>selected="selected"<?php endif; ?> value="7">7</option>
												<option <?php if( $lis_options['maxSpeed'] == 8 ) : ?>selected="selected"<?php endif; ?> value="8">8</option>
												<option <?php if( $lis_options['maxSpeed'] == 9 ) : ?>selected="selected"<?php endif; ?> value="9">9</option>
												<option <?php if( $lis_options['maxSpeed'] == 10 ) : ?>selected="selected"<?php endif; ?> value="10">10</option>
											</select>
										</td>
									</tr>
									
									<tr valign="top">
										<th scope="row"><?php _e( 'Turn on shadows?', 'wfs-letitsnow' ); ?><br><em><small><?php _e( 'For websites with white backgrounds', 'wfs-letitsnow' ); ?></small></em></th>
										<td>
											<select name="wfs_letitsnow_options[shadow]">
												<option <?php if( $lis_options['shadow'] == false ) : ?>selected="selected"<?php endif; ?> value="false"><?php _e( 'No', 'wfs-letitsnow' ); ?></option>
												<option <?php if( $lis_options['shadow'] == true ) : ?>selected="selected"<?php endif; ?> value="true"><?php _e( 'Yes', 'wfs-letitsnow' ); ?></option>
											</select>
										</td>
									</tr>
									
								</table>
								
								<p class="submit"><input type="submit" class="button-primary" value="<?php _e( 'Save Changes', 'wfs-letitsnow' ); ?>"></p>
								
							</form>
							
						</div>
						
					</div>
					
				</div>
				
			</div>
			
			<div id="postbox-container-1" class="postbox-container">
				
				<div class="meta-box-sortables">
					
					<div class="postbox">
						
						<h3><span><?php _e( 'Developed by', 'wfs-letitsnow' ); ?></span></h3>
						
						<div class="inside">
							<a href="http://winkingfrog.com" target="_blank"><img src="<?php echo plugins_url( 'assets/img/WFS-Inline-Logo.png', dirname(__FILE__) ); ?>" alt="Winking Frog Studios Ltd"></a>
							<p>Visit our website at <a href="http://winkingfrog.com" target="_blank">http://winkingfrog.com</a></p>
							<p>Or find us on:<br>
								<a href="https://twitter.com/WinkingFrog" target="_blank">Twitter</a> | <a href="https://www.facebook.com/WinkingFrog" target="_blank">Facebook</a> | <a href="https://google.com/+WinkingFrogStudio" target="_blank">Google+</a>
							</p>
						</div>
						
					</div>
					
					<div class="postbox">
					
						<h3><span><?php _e( 'Help us do more!', 'wfs-letitsnow' ); ?></span></h3>
						
						<div class="inside">
							<p>This plugin is distributed as a FREE plugin for you to enjoy. If it makes you happy, and you feel like helping us develop and support more WordPress themes &amp; plugins, you can use the PayPal link below. No pressure, this plugin is more for fun than anything else :-)</p>
							<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
								<input type="hidden" name="cmd" value="_s-xclick">
								<input type="hidden" name="hosted_button_id" value="9TNDZAD79QD8S">
								<table>
								<tr><td><input type="hidden" name="on0" value="What's this plugin worth to you?">What's this plugin worth to you?</td></tr><tr><td><select name="os0">
									<option value="By me a coffee">By us a coffee £2.50 GBP</option>
									<option value="Coffee and a cake">Coffee and a cake £5.00 GBP</option>
								</select> </td></tr>
								</table>
								<input type="hidden" name="currency_code" value="GBP">
								<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
								<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
							</form>
						</div>
						
					</div> 
					
				</div>
				
			</div>
			
		</div>
		
		<br class="clear">
		
	</div>
		
</div>
<?php
add_thickbox();
$tp_twitter_plugin_options = get_option('tp_twitter_plugin_options');
?>
<div class="wrap">
        <?php settings_errors(); ?>
        <?php /*
        <div class="updated" style="border-color:#6c65c2;">
                <p>
                        Looking for more sharing tools? &nbsp;<a href="<?php echo admin_url('plugin-install.php?tab=plugin-information&plugin=sumome&TB_iframe=true&width=743&height=500'); ?>" class="thickbox button button-primary">Get SumoMe WordPress Plugin</a>
                </p>
        </div>
        */ ?>
	<?php screen_icon(); ?>
	<h2>Recent Tweets</h2>
	<form method="post" action="options.php"> 
		<?php settings_fields( 'tp_twitter_plugin_options' ); ?>
		<table class="form-table">
                	<tr valign="top">
                		<th scope="row"><label for="support-us">Support Us!</label></th>
                		<td>
                			<select name="tp_twitter_plugin_options[support-us]" id="support-us">
                				<option value="1" <?php echo is_array($tp_twitter_plugin_options) && $tp_twitter_plugin_options['support-us'] == '1' ? 'selected="selected"' : ''; ?>>Yes</option>
                				<option value="0" <?php echo !is_array($tp_twitter_plugin_options) || $tp_twitter_plugin_options['support-us'] != '1' ? 'selected="selected"' : ''; ?>>No</option>
                			</select>
                                        <p>Show our link below the widget. Pretty please.</p>
                		</td>
                	</tr>
		</table>
		<?php submit_button(); ?>
	</form>
        <h2>Adding the Widget</h2>
        <ol>
                <li><a href="<?php echo admin_url('widgets.php'); ?>" target="_blank">Go to your Widgets menu</a>, add the <code>Recent Tweets</code> widget to a widget area.</li>
                <li>Visit <a href="https://apps.twitter.com/">https://apps.twitter.com/</a>, sign in with your account, click on <code>Create New App</code> and create your own keys if you haven't already.</li>
                <li>Fill all your widget settings.</li>
                <li>Enjoy your new Twitter feed! :)</li>
        </ol>
        <!--<p style="border:1px solid #CCCCCC;background:#FFFFFF;padding:8px;">Check out more sharing tools with our <a href="<?php echo admin_url('plugin-install.php?tab=plugin-information&plugin=sumome&TB_iframe=true&width=743&height=500'); ?>" class="thickbox">SumoMe WordPress plugin</a></p>-->
        <p><i>If you find this plugin useful please <a href="https://wordpress.org/support/view/plugin-reviews/recent-tweets-widget" target="_blank">leave us a review!</a></i></p>
</div>
<?php //Panel de administración ?>

<h2>Stats Website</h2>
<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('statistics'); ?>
	<label value="id-website"/>Id of website</label><br />
    <input type="text" name="ID_website" value="<?php echo get_option('ID_website'); ?>" /><br />
	<label value="Id-user"/>Id of user</label><br />
    <input type="text" name="ID_user" value="<?php echo get_option('ID_user'); ?>" />
    <input type="hidden" name="action" value="update" /><br /><br />
	<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</form>

<p><a href="http://stats.logonike.com/" target="_blank">Get Id of website / Id of user</a></p>

<div style="float:left; width:300px">
<p><b>Features</b></p>
- Real Time Visitor Count<br />
- Last 30 Minutes<br />
- Last 24 Hours<br />
- Visits Over Time<br />
- Visits by Server Time<br />
- Visitor Map<br />
- Visitor Location (Country)<br />
- Returning Visits Over Time<br />
- Pages per Visit<br />
- Search Engines<br />
- Referrer Websites<br />
- Keywords<br />
- And more...<br />
</div>
<div style="float:left;width:300px; margin-top:20px">
<img src="http://logonike.com/wp-content/uploads/2014/05/300x250.jpg"/>
</div>
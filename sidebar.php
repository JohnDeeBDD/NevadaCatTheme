<div id="sidebar1" class="sidebar threecol last clearfix form_section" role="complementary">
<?php if ( is_active_sidebar( 'sidebar1' ) ) :
	dynamic_sidebar( 'sidebar1' );
	else : ?>
<!-- This content shows up if there are no widgets defined in the backend. -->
<div class="alert help">
<p><?php _e("Please activate some Widgets.", "bonestheme");  ?></p>
</div>
<?php endif; ?>
</div>

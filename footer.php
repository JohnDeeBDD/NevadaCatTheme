<footer role="contentinfo">
<div id="inner-footer" class="wrap clearfix">
	<span style="float:left;">Copyright <a href = "https://nevadacathouse.biz/wp-admin/index.php">&copy;</a> Nevada Cat House. All rights reserved. <a href = "https://nevadacathouse.biz/contact/">Contact us.</a> This site is a <a href = "https://wordpress-bdd.com">Custom Ray Gun.<img align = "MIDDLE" src = "https://nevadacathouse.biz/wp-content/themes/NevadaCatTheme/library/images/ray_gun.png" /></a>.</span>
</div> <!-- end #inner-footer -->
</footer> <!-- end footer -->

</div> <!-- end #container -->
<!-- all js scripts are loaded in library/bones.php -->
<?php 
	wp_footer(); 
	if(isset($_SESSION['msg']))
	unset($_SESSION['msg']);
?>
</body>
</html> <!-- end page. what a ride! -->

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

<div id="footer">
    <ul>
        <?php wp_list_pages('sort_column=menu_order&depth=0&title_li=');?>
    </ul>
    <span>&copy; Copyright 2011</span>
</div>

<!--footer_end-->
</div>
</body>
</html>



<div class="user_logout">
	<?php $page_logout =get_page_by_path('logout'); ?>
	<a href="<?php echo get_permalink($page_logout->ID); ?>">
		<?php echo __('[:es]Cerrar Sesión[:en]Logout[:]'); ?>
	</a>
</div>
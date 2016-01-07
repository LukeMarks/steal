		</div>
			<footer>
				<nav>
					<!-- Includes the footer menu in the footer -->
					<?php echo wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
				</nav>	
				<!-- Echos the current year -->
				<p>Copyright. <?php echo date('Y'); ?>. All rights reserved.</p>
			</footer>
			<!-- Includes the footer -->
			<?php wp_footer(); ?>
		</div>
	</body>
</html>
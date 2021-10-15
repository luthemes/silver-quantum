<?php
/**
 * Silver Quantum ( footer.php )
 *
 * @package   Silver Quantum
 * @copyright Copyright (C) 2014-2020. Benjamin Lu
 * @license   GNU General Public License v2 or later ( https://www.gnu.org/licenses/gpl-2.0.html )
 * @author    Benjamin Lu ( https://benjlu.com )
 */
?>
	<footer id="footer" class="site-footer">
		<div class="site-info">
			<?php
			printf(
				// Translators: 1 = Date, 2 = Site Link.
				esc_html__( 'Copyright &#169; %1$s. %2$s', 'silver-quantum' ),
				absint( date_i18n( 'Y' ) ),
				Benlumia007\Backdrop\Theme\Site\render_site_link() // phpcs:ignore
			);
			?>
			<br />
			<?php
			printf(
				// Translators: 1 = WordPress Link, 2 = Theme Link.
				esc_html__( 'Powered By %1$s and %2$s', 'silver-quantum' ),
				Benlumia007\Backdrop\Theme\Site\render_wp_link(), // phpcs:ignore
				Benlumia007\Backdrop\Theme\Site\render_theme_link() // phpcs:ignore
			);
			?>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>

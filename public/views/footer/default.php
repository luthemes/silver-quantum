<?php
/**
 * Default footer template
 *
 * @package   Silver Quantum
 * @author    Benjamin Lu <benlumia007@gmail.com>
 * @copyright 2014 Benjamin Lu
 * @license   https://www.gnu.org/licenses/gpl-2.0.html
 * @link      https://luthemes.com/portfolio/silver-quantum
 */
?>
<footer id="colophon" class="site-footer">
	<?php Backdrop\View\display( 'menu', 'social', [ 'location' => 'social' ] ); ?>
	<div class="site-info">
		<?php SilverQuantum\Template\Footer::displayCredit() ?>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>

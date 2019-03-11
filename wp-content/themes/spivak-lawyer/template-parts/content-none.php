<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package spivak-lawyer
 */

?>

<section class="no-results not-found">
	<header style="margin-bottom: 15px;" class="page-header">
		<h1 class="page-title">Нічого не знайдено</h1>
	</header><!-- .page-header -->

	<div style="margin-bottom: 30px" class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'spivak-lawyer' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p style="margin-bottom: 15px;"><?php esc_html_e( 'Вибачте, але нічого не відповідає вашим пошуковим запитам. Повторіть спробу з іншими ключовими словами.', 'spivak-lawyer' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p style="margin-bottom: 15px";><?php esc_html_e( 'Здається, ми можемо знайти те, що ви шукаєте. Повторіть спробу з іншими ключовими словами.', 'spivak-lawyer' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->

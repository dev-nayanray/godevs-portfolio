<?php
/**
 * Theme onboarding dashboard: welcome page + one-click demo import.
 *
 * This is an Appearance submenu page ("GoDevs Portfolio"), not a settings
 * screen. It contains zero color/typography/spacing/layout controls — see
 * docs/CLAUDE.md's non-negotiable rule 6 and docs/WPORG_CHECKLIST.md's
 * "No settings page duplicating Site Editor/Customizer" REQUIRED item. The
 * only things this page can DO are: link to the Site Editor, and import a
 * niche's bundled demo content (a one-time content action, not a
 * persistent design setting). The theme works fully whether or not anyone
 * ever visits this page.
 *
 * @package GoDevs_Portfolio
 */

namespace GoDevs_Portfolio;

defined( 'ABSPATH' ) || exit;

/**
 * Registers the dashboard page and its demo-import handler.
 */
class Dashboard {

	const PAGE_SLUG     = 'godevs-portfolio-dashboard';
	const NONCE_ACTION  = 'godevs_portfolio_import_demo';
	const IMPORTED_OPT  = 'godevs_portfolio_imported_demos';

	/**
	 * Hook the dashboard page and its import handler into WordPress.
	 */
	public static function init() {
		add_action( 'admin_menu', array( __CLASS__, 'register_page' ) );
		add_action( 'admin_init', array( __CLASS__, 'maybe_handle_import' ) );
		add_action( 'admin_enqueue_scripts', array( __CLASS__, 'enqueue_assets' ) );
	}

	/**
	 * Register the "GoDevs Portfolio" page under Appearance.
	 *
	 * add_theme_page() is the correct, Theme-Review-conventional home for
	 * a theme's own informational page — it does not register a
	 * standalone top-level admin menu that could be mistaken for a
	 * required setup step.
	 */
	public static function register_page() {
		add_theme_page(
			__( 'GoDevs Portfolio', 'godevs-portfolio' ),
			__( 'GoDevs Portfolio', 'godevs-portfolio' ),
			'manage_options',
			self::PAGE_SLUG,
			array( __CLASS__, 'render_page' )
		);
	}

	/**
	 * Enqueue this page's own small layout stylesheet — admin UI chrome
	 * for the demo card grid, not a front-end design token (rule 1 in
	 * docs/CLAUDE.md scopes hard-coded-value avoidance to patterns,
	 * templates, and template parts — the rendered site — not admin
	 * screens). Loaded only on this one screen.
	 *
	 * @param string $hook_suffix Current admin page hook suffix.
	 */
	public static function enqueue_assets( $hook_suffix ) {
		if ( 'appearance_page_' . self::PAGE_SLUG !== $hook_suffix ) {
			return;
		}
		wp_enqueue_style(
			'godevs-portfolio-dashboard',
			GODEVS_PORTFOLIO_URI . '/assets/css/admin-dashboard.css',
			array(),
			GODEVS_PORTFOLIO_VERSION
		);
	}

	/**
	 * The 8 niche demos this theme ships, keyed by slug.
	 *
	 * 'file' is relative to the theme's own bundled demo-content/
	 * directory. This is plain PHP, not WXR/XML: WordPress.org Theme
	 * Review disallows .xml files in a theme package (confirmed directly
	 * by Theme Check's "XML file found" REQUIRED flag during this
	 * feature's own testing — not assumed). Each file defines one
	 * function (see 'function' below) that creates that niche's pages
	 * and navigation directly via wp_insert_post(), generated once from
	 * the same reviewed content already shipped in the development
	 * repo's root-level demo-content/*.xml files (that directory's own
	 * README.md documents those as the source of truth and the
	 * Tools > Import path for developers working from the repo) — see
	 * demo-content/README.md in this theme's own bundled copy for the
	 * one-time generation note.
	 *
	 * @return array
	 */
	public static function get_niches() {
		return array(
			'agency'            => array(
				'title'       => __( 'Creative Agency', 'godevs-portfolio' ),
				'description' => __( 'The full portfolio funnel: services, case studies, team, pricing, and a blog. 14 pages.', 'godevs-portfolio' ),
				'file'        => 'agency.php',
				'function'    => 'godevs_portfolio_import_demo_agency',
			),
			'freelancer'        => array(
				'title'       => __( 'Freelance Designer/Developer', 'godevs-portfolio' ),
				'description' => __( 'A lean, solo-practitioner site with a focused portfolio and simple pricing. 6 pages.', 'godevs-portfolio' ),
				'file'        => 'freelancer.php',
				'function'    => 'godevs_portfolio_import_demo_freelancer',
			),
			'webdev-studio'     => array(
				'title'       => __( 'Web Development Studio', 'godevs-portfolio' ),
				'description' => __( 'A small technical studio, including a dedicated page explaining how engagements run. 7 pages.', 'godevs-portfolio' ),
				'file'        => 'webdev-studio.php',
				'function'    => 'godevs_portfolio_import_demo_webdev_studio',
			),
			'photographer'      => array(
				'title'       => __( 'Photographer', 'godevs-portfolio' ),
				'description' => __( 'A solo photographer\'s site with a video hero and an image-forward masonry gallery. 6 pages.', 'godevs-portfolio' ),
				'file'        => 'photographer.php',
				'function'    => 'godevs_portfolio_import_demo_photographer',
			),
			'interior-designer' => array(
				'title'       => __( 'Interior Designer', 'godevs-portfolio' ),
				'description' => __( 'A small design studio with room-type galleries and a before/after comparison. 6 pages.', 'godevs-portfolio' ),
				'file'        => 'interior-designer.php',
				'function'    => 'godevs_portfolio_import_demo_interior_designer',
			),
			'architect'         => array(
				'title'       => __( 'Architect', 'godevs-portfolio' ),
				'description' => __( 'A small architecture firm with large single-project features and an awards section. 6 pages.', 'godevs-portfolio' ),
				'file'        => 'architect.php',
				'function'    => 'godevs_portfolio_import_demo_architect',
			),
			'medical'           => array(
				'title'       => __( 'Medical Practice', 'godevs-portfolio' ),
				'description' => __( 'A multi-provider practice with informational-only new-patient details. 7 pages. Placeholder content — see the notice after import.', 'godevs-portfolio' ),
				'file'        => 'medical.php',
				'function'    => 'godevs_portfolio_import_demo_medical',
			),
			'law-firm'          => array(
				'title'       => __( 'Law Firm', 'godevs-portfolio' ),
				'description' => __( 'A multi-practice-area firm with practice areas and a results page. 7 pages. Placeholder content — see the notice after import.', 'godevs-portfolio' ),
				'file'        => 'law-firm.php',
				'function'    => 'godevs_portfolio_import_demo_law_firm',
			),
		);
	}

	/**
	 * Build a URL back to this page, optionally with extra query args.
	 *
	 * @param array $args Extra query args.
	 * @return string
	 */
	private static function page_url( $args = array() ) {
		return add_query_arg( $args, admin_url( 'themes.php?page=' . self::PAGE_SLUG ) );
	}

	/**
	 * Handle the "Import demo content" form submission.
	 *
	 * Runs on admin_init (not directly in render_page()) so it can
	 * wp_safe_redirect() before any HTML output — the standard
	 * redirect-after-POST pattern, avoiding a resubmission-on-refresh
	 * prompt and letting the confirmation/success states below be driven
	 * entirely by GET params on the next page load.
	 */
	public static function maybe_handle_import() {
		if ( empty( $_POST['godevs_portfolio_action'] ) || 'import_demo' !== $_POST['godevs_portfolio_action'] ) {
			return;
		}
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}
		check_admin_referer( self::NONCE_ACTION );

		$niche_slug = isset( $_POST['godevs_niche'] ) ? sanitize_key( wp_unslash( $_POST['godevs_niche'] ) ) : '';
		$niches     = self::get_niches();

		if ( ! isset( $niches[ $niche_slug ] ) ) {
			wp_safe_redirect( self::page_url( array( 'godevs_error' => 'invalid_niche' ) ) );
			exit;
		}

		$confirmed = ! empty( $_POST['godevs_confirm'] );

		// Show the "another demo may already be here" warning once, before
		// actually importing anything, unless the user already confirmed
		// past it — never silently allow a second demo's import, per the
		// documented single-demo-per-site limitation
		// (demo-content/README.md, confirmed by the Phase 14 sequential-
		// import test).
		if ( ! $confirmed && self::has_existing_demo_content() ) {
			wp_safe_redirect( self::page_url( array( 'godevs_confirm_needed' => $niche_slug ) ) );
			exit;
		}

		$result = self::run_import( $niche_slug, $niches[ $niche_slug ] );

		if ( is_wp_error( $result ) ) {
			wp_safe_redirect(
				self::page_url(
					array(
						'godevs_error' => $result->get_error_code(),
						'godevs_niche' => $niche_slug,
					)
				)
			);
			exit;
		}

		$imported = get_option( self::IMPORTED_OPT, array() );
		if ( ! is_array( $imported ) ) {
			$imported = array();
		}
		$imported[] = $niche_slug;
		// Bookkeeping only — which demo(s) this dashboard has imported, so
		// the "already imported" warning can fire on a later visit. Not a
		// design/appearance value; see docs/CLAUDE.md Phase 16 notes.
		update_option( self::IMPORTED_OPT, array_values( array_unique( $imported ) ), false );

		wp_safe_redirect(
			self::page_url(
				array(
					'godevs_imported' => $niche_slug,
					'godevs_home_id'  => (int) $result,
				)
			)
		);
		exit;
	}

	/**
	 * Whether this site already looks like it has demo content on it —
	 * used only to decide whether to show the "you already have a demo
	 * imported" warning, never to block or silently skip an import.
	 *
	 * @return bool
	 */
	private static function has_existing_demo_content() {
		$imported = get_option( self::IMPORTED_OPT, array() );
		if ( ! empty( $imported ) ) {
			return true;
		}
		// Fallback signal for a site where content was imported outside
		// this dashboard (e.g. via Tools > Import directly, per
		// demo-content/README.md's own documented path): more published
		// pages than a stock WordPress install ships with (Sample Page,
		// Privacy Policy) suggests something is already here.
		$pages = get_posts(
			array(
				'post_type'      => 'page',
				'post_status'    => 'publish',
				'posts_per_page' => 5,
				'fields'         => 'ids',
			)
		);
		return count( $pages ) > 2;
	}

	/**
	 * Run the actual import for one niche.
	 *
	 * Deliberately not WXR/WP_Import-based: WordPress.org Theme Review
	 * disallows .xml files in a theme package (confirmed directly by
	 * Theme Check's "XML file found" REQUIRED flag when this feature
	 * first bundled the existing demo-content/*.xml exports — not
	 * assumed, caught by actually running Theme Check against it, per
	 * this project's own established discipline). Bundling this as a
	 * plain PHP function instead — generated once from that same,
	 * already-reviewed content — avoids that REQUIRED violation
	 * entirely and removes the WordPress Importer plugin as a dependency
	 * for this feature altogether, which is a strict improvement: no
	 * plugin needs to be installed for one-click import to work, only
	 * WordPress core APIs (wp_insert_post() etc.) are used — no custom
	 * WXR parser exists anywhere in this theme.
	 *
	 * @param string $niche_slug Niche slug (array key from get_niches()).
	 * @param array  $niche      Niche data (title/description/file/function).
	 * @return int|\WP_Error Imported Home page ID on success.
	 */
	private static function run_import( $niche_slug, $niche ) {
		unset( $niche_slug );

		$file = GODEVS_PORTFOLIO_DIR . '/demo-content/' . $niche['file'];
		if ( ! is_file( $file ) ) {
			return new \WP_Error(
				'missing_file',
				__( 'This demo\'s content file could not be found in the theme package.', 'godevs-portfolio' )
			);
		}

		if ( ! function_exists( $niche['function'] ) ) {
			// phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound -- loading a demo-content data/function file, not a theme template; get_template_part() does not apply.
			require_once $file;
		}
		if ( ! function_exists( $niche['function'] ) ) {
			return new \WP_Error(
				'invalid_demo_file',
				__( 'This demo\'s content file is not valid.', 'godevs-portfolio' )
			);
		}

		return call_user_func( $niche['function'] );
	}

	/**
	 * Render the dashboard page.
	 */
	public static function render_page() {
		if ( ! current_user_can( 'manage_options' ) ) {
			return;
		}

		$niches           = self::get_niches();
		$imported_notice  = isset( $_GET['godevs_imported'] ) ? sanitize_key( wp_unslash( $_GET['godevs_imported'] ) ) : '';
		$home_id          = isset( $_GET['godevs_home_id'] ) ? absint( $_GET['godevs_home_id'] ) : 0;
		$confirm_needed   = isset( $_GET['godevs_confirm_needed'] ) ? sanitize_key( wp_unslash( $_GET['godevs_confirm_needed'] ) ) : '';
		$error_code       = isset( $_GET['godevs_error'] ) ? sanitize_key( wp_unslash( $_GET['godevs_error'] ) ) : '';
		$error_niche      = isset( $_GET['godevs_niche'] ) ? sanitize_key( wp_unslash( $_GET['godevs_niche'] ) ) : '';
		?>
		<div class="wrap godevs-portfolio-dashboard">
			<h1><?php esc_html_e( 'GoDevs Portfolio', 'godevs-portfolio' ); ?></h1>

			<?php if ( $imported_notice && isset( $niches[ $imported_notice ] ) ) : ?>
				<div class="notice notice-success">
					<p>
						<?php
						printf(
							/* translators: %s: niche name, e.g. "Medical Practice". */
							esc_html__( '%s demo content imported.', 'godevs-portfolio' ),
							'<strong>' . esc_html( $niches[ $imported_notice ]['title'] ) . '</strong>'
						);
						?>
					</p>
					<p>
						<?php esc_html_e( 'One manual step is still needed: set this as your homepage under Settings > Reading.', 'godevs-portfolio' ); ?>
						<a href="<?php echo esc_url( admin_url( 'options-reading.php' ) ); ?>"><?php esc_html_e( 'Go to Settings > Reading', 'godevs-portfolio' ); ?></a>
						<?php if ( $home_id ) : ?>
							&nbsp;&mdash;&nbsp;
							<a href="<?php echo esc_url( get_edit_post_link( $home_id ) ); ?>"><?php esc_html_e( 'View the imported Home page', 'godevs-portfolio' ); ?></a>
						<?php endif; ?>
					</p>
					<?php if ( 'medical' === $imported_notice || 'law-firm' === $imported_notice ) : ?>
						<p>
							<strong><?php esc_html_e( 'Placeholder content notice:', 'godevs-portfolio' ); ?></strong>
							<?php esc_html_e( 'this demo\'s names, credentials, and copy are entirely fictional. Replace all of it with real, professionally-reviewed information before publishing.', 'godevs-portfolio' ); ?>
						</p>
					<?php endif; ?>
				</div>
			<?php endif; ?>

			<?php if ( $error_code ) : ?>
				<div class="notice notice-error">
					<p>
						<?php
						switch ( $error_code ) {
							case 'missing_file':
							case 'invalid_demo_file':
								esc_html_e( 'This demo\'s content file could not be found or read in the theme package.', 'godevs-portfolio' );
								break;
							case 'invalid_niche':
								esc_html_e( 'That demo could not be recognized. Please try again.', 'godevs-portfolio' );
								break;
							default:
								esc_html_e( 'The import could not be completed.', 'godevs-portfolio' );
						}
						?>
					</p>
				</div>
			<?php endif; ?>

			<div class="notice notice-info godevs-portfolio-dashboard__scope-notice">
				<p>
					<?php esc_html_e( 'This page is informational only. All design and style changes — colors, fonts, layout, header, and footer — happen in the Site Editor, not here.', 'godevs-portfolio' ); ?>
					<a href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>"><?php esc_html_e( 'Open the Site Editor', 'godevs-portfolio' ); ?></a>
				</p>
			</div>

			<h2><?php esc_html_e( 'Choose your demo', 'godevs-portfolio' ); ?></h2>
			<p>
				<?php esc_html_e( 'Import exactly one demo, matching the kind of site you\'re building. Importing more than one demo onto the same site is not supported — each demo assumes it is the only content present, and internal links between demos will not resolve correctly.', 'godevs-portfolio' ); ?>
			</p>

			<div class="godevs-portfolio-dashboard__grid">
				<?php foreach ( $niches as $slug => $niche ) : ?>
					<div class="godevs-portfolio-dashboard__card">
						<h3><?php echo esc_html( $niche['title'] ); ?></h3>
						<p><?php echo esc_html( $niche['description'] ); ?></p>

						<?php if ( $confirm_needed === $slug ) : ?>
							<div class="notice notice-warning inline">
								<p>
									<?php esc_html_e( 'It looks like this site already has demo content on it. Importing another demo\'s pages here is not supported — page links between the two demos will not resolve correctly (see the theme\'s demo-content/README.md for details). Import anyway?', 'godevs-portfolio' ); ?>
								</p>
							</div>
							<form method="post">
								<?php wp_nonce_field( self::NONCE_ACTION ); ?>
								<input type="hidden" name="godevs_portfolio_action" value="import_demo" />
								<input type="hidden" name="godevs_niche" value="<?php echo esc_attr( $slug ); ?>" />
								<input type="hidden" name="godevs_confirm" value="1" />
								<button type="submit" class="button button-secondary">
									<?php esc_html_e( 'Import Anyway', 'godevs-portfolio' ); ?>
								</button>
								<a class="button" href="<?php echo esc_url( self::page_url() ); ?>"><?php esc_html_e( 'Cancel', 'godevs-portfolio' ); ?></a>
							</form>
						<?php else : ?>
							<form method="post">
								<?php wp_nonce_field( self::NONCE_ACTION ); ?>
								<input type="hidden" name="godevs_portfolio_action" value="import_demo" />
								<input type="hidden" name="godevs_niche" value="<?php echo esc_attr( $slug ); ?>" />
								<button type="submit" class="button button-primary">
									<?php
									printf(
										/* translators: %s: niche name, e.g. "Medical Practice". */
										esc_html__( 'Import %s Demo Content', 'godevs-portfolio' ),
										esc_html( $niche['title'] )
									);
									?>
								</button>
							</form>
						<?php endif; ?>

						<?php if ( $error_niche === $slug && $error_code ) : ?>
							<p class="godevs-portfolio-dashboard__card-error"><?php esc_html_e( 'This demo could not be imported — see the notice above.', 'godevs-portfolio' ); ?></p>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>

			<h2><?php esc_html_e( 'Support & documentation', 'godevs-portfolio' ); ?></h2>
			<p>
				<?php
				printf(
					/* translators: %s: link to the theme's readme.txt. */
					esc_html__( 'Full setup notes, FAQ, and changelog live in the theme\'s %s.', 'godevs-portfolio' ),
					'<a href="' . esc_url( GODEVS_PORTFOLIO_URI . '/readme.txt' ) . '" target="_blank" rel="noopener noreferrer">readme.txt</a>'
				);
				?>
			</p>
		</div>
		<?php
	}
}

<?php
/**
 * Text String / Translatable string used in tamatebako
 * @since 0.1.0
 */
function tamatebako_string( $context ){

	/* Open Sesame ! */
	$text = array();

	/* Paged Title Tag
	 * Translators: 1 is the page title and separator. 2 is the page number.
	 * Example Output: "{post title} | Page {page number}"
	 */
	$text['paged'] = _x( '%1$s Page %2$s', 'paged title tag', 'genbu' );

	/* Skip to content (accessibility) */
	$text['skip-to-content'] = _x( 'Skip to content', 'skip to content (accessibility)', 'genbu' );

	/* Read More */
	$text['read-more'] = _x( 'Continue reading', 'content read more', 'genbu' );

	/* Entry Permalink */
	$text['permalink'] = _x( 'Permalink', 'entry permalink', 'genbu' );

	/* Next, Previous */
	$text['next'] = _x( 'Next', 'next in pagination and navigation (accessibility)', 'genbu' );
	$text['previous'] = _x( 'Previous', 'previous in pagination and navigation (accessibility)', 'genbu' );

	/* Search */
	$text['search'] = _x( 'Search&hellip;', 'search text', 'genbu' );
	$text['search-button'] = _x( 'Search', 'search button (accessibility)', 'genbu' );
	$text['expand-search-form'] = _x( 'Expand Search Form', 'expand search form button (accessibility)', 'genbu' );

	/* Comments error */
	$text['comments-closed-pings-open'] = _x( 'Comments are closed, but trackbacks and pingbacks are open.', 'comments notice', 'genbu' );
	$text['comments-closed'] = _x( 'Comments are closed.', 'comments notice', 'genbu' );

	/* Content error */
	$text['error'] = _x( '404 Not Found', '404 title', 'genbu' );
	$text['error-msg'] = _x( 'Apologies, but no entries were found.', '404 content', 'genbu' );

	/* Theme Layout */
	$text['global-layout'] = _x( 'Global Layout', 'theme layouts', 'genbu' );
	$text['layout'] = _x( 'Layout', 'theme layouts', 'genbu' );

	$text = apply_filters( 'tamatebako_string', $text );

	/* Close Sesame ! */
	if ( isset( $text[$context] ) ){
		return $text[$context];
	}
	return '';
}

 
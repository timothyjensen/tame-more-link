<?php
/**
 * Tame More Link
 *
 * @package     TimJensen\TameMoreLink
 * @author      Tim Jensen <tim@timjensen.us>
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 *
 * Plugin Name: Tame More Link
 * Plugin URI:  https://www.timjensen.us/
 * Description: Removes the page jump from the content more link.
 * Version:     1.0.0
 * Author:      Tim Jensen
 * Author URI:  https://www.timjensen.us
 * Text Domain: tame-more-link
 * License:     GPL-2.0-or-later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace TimJensen\TameMoreLink;

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

add_filter( 'the_content_more_link', __NAMESPACE__ . '\\remove_more_link_page_jump' );
/**
 * Removes the page jump from the content more link.
 *
 * @param string $more_link More link.
 * @return string
 */
function remove_more_link_page_jump( $more_link ) {
	$page_jump = sprintf( '#more-%s', get_the_ID() );

	return str_replace( $page_jump, '', $more_link );
}

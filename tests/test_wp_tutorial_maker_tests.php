<?php

/**
 * Tests to test that that testing framework is testing tests. Meta, huh?
 *
 * @package wordpress-plugins-tests
 */
class WP_Test_WPnotice_Plugin_Tests extends WP_UnitTestCase {

	/**
	 * Ensure that the plugin has been installed and activated.
	 */
	function test_plugin_activated() {
		$this->assertTrue( is_plugin_active( 'wp-tutorial-maker/wp-tutorial-maker.php' ) );
	}

    /**
     * testing the slug name
     */

    function test_plugin_shortname() {
        $plugin = WP_notice::get_instance();
        $result = $plugin->get_plugin_slug();
        $this->assertEquals('wp-tutorial-maker', $result);
    }

    //To Be continued



}
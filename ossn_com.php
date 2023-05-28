<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   OpenSpeedtest
 * @author    TheDoggyBrad <admin@gosocial.x10.bz>
 * @copyright 2023 TheDoggyBrad
 * @license   OSSN License v4
 * @link      https://www.opensource-socialnetwork.org/licence/v4.0.html
 */
define('__openspeedtest__', ossn_route()->com . 'openspeedtest/');

function openspeedtest_init() {

	  if (ossn_isLoggedin()) {       
		
		ossn_extend_view('css/ossn.default', 'css/openspeedtest');
        
                     ossn_register_page('openspeedtest', 'openspeedtest_pages');
		
				ossn_register_sections_menu('newsfeed', array(

						'name' => 'openspeedtest',

						'text' => ossn_print('com:ossn:openspeedtest'),

						'url' => ossn_site_url('openspeedtest'),

						'section' => 'links',

				));
					
    }
}
function openspeedtest_pages($pages) {
  
						$title               = ossn_print('com:ossn:openspeedtest');
						
						$contents['content'] = ossn_plugin_view('pages/openspeedtest', array(

						));

						$content             = ossn_set_page_layout('newsfeed', $contents);

						echo ossn_view_page($title, $content);

}
ossn_register_callback('ossn', 'init', 'openspeedtest_init');

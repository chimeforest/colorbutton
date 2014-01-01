<?php
/**
 * Action Plugin: Inserts a button into the toolbar to add color tags
 *
 * @author Chimeforest
 */

 
if (!defined('DOKU_INC')) die();
if (!defined('DOKU_PLUGIN')) define('DOKU_PLUGIN', DOKU_INC . 'lib/plugins/');
require_once (DOKU_PLUGIN . 'action.php');
 
class action_plugin_colorbutton extends DokuWiki_Action_Plugin {
 
    /**
     * Return some info
     */
    function getInfo() {
        return array (
            'author' => 'Chimeforest',
            'date' => '2013-12-31',
            'name' => 'Toolbar Color Button',
            'desc' => 'Inserts a button for the color plugin into the toolbar',
            'url' => 'TBA',
        );
    }
 
    /**
     * Register the eventhandlers
     */
    function register(&$controller) {
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'insert_button', array ());
    }
 
    /**
     * Inserts the toolbar button
     */
    function insert_button(& $event, $param) {
		//Color for the spoiler function
		$spoiler = $this->getConf('spoiler');
		
        $event->data[] = array (
            'type' => 'picker',
            'title' => $this->getLang('colortext'),
            'icon' => '../../plugins/colorbutton/img/color.png',
            'list' => array(
                array(
                    'type' => 'format',
                    'title' => $this->getLang('spoilertext'),
					'icon' => '../../plugins/colorbutton/img/spoiler.png',
                    'open' => "<color $spoiler/$spoiler>",
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('redtext'),
					'icon' => '../../plugins/colorbutton/img/red.png',
                    'open' => '<color red>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('orangetext'),
					'icon' => '../../plugins/colorbutton/img/orange.png',
                    'open' => '<color orange>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('yellowtext'),
					'icon' => '../../plugins/colorbutton/img/yellow.png',
                    'open' => '<color yellow>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('greentext'),
					'icon' => '../../plugins/colorbutton/img/green.png',
                    'open' => '<color green>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('bluetext'),
					'icon' => '../../plugins/colorbutton/img/blue.png',
                    'open' => '<color blue>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('indigotext'),
					'icon' => '../../plugins/colorbutton/img/indigo.png',
                    'open' => '<color indigo>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('purpletext'),
					'icon' => '../../plugins/colorbutton/img/purple.png',
                    'open' => '<color purple>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('whiteblacktext'),
					'icon' => '../../plugins/colorbutton/img/whiteblack.png',
                    'open' => '<color white/black>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('redblacktext'),
					'icon' => '../../plugins/colorbutton/img/redblack.png',
                    'open' => '<color red/black>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('orangeblacktext'),
					'icon' => '../../plugins/colorbutton/img/orangeblack.png',
                    'open' => '<color orange/black>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('yellowblacktext'),
					'icon' => '../../plugins/colorbutton/img/yellowblack.png',
                    'open' => '<color yellow/black>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('greenblacktext'),
					'icon' => '../../plugins/colorbutton/img/greenblack.png',
                    'open' => '<color green/black>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('blueblacktext'),
					'icon' => '../../plugins/colorbutton/img/blueblack.png',
                    'open' => '<color blue/black>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('indigoblacktext'),
					'icon' => '../../plugins/colorbutton/img/indigoblack.png',
                    'open' => '<color indigo/black>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('purpleblacktext'),
					'icon' => '../../plugins/colorbutton/img/purpleblack.png',
                    'open' => '<color purple/black>',
                    'close' => '</color>',
                ),
				array(
                    'type' => 'format',
                    'title' => $this->getLang('customtext'),
					'icon' => '../../plugins/colorbutton/img/custom.png',
                    'open' => '<color TEXTCOLOR/BGCOLOR>',
                    'close' => '</color>',
                )
			)
        );
    }
 
}

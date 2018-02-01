<?php

/**
 * @file plugins/blocks/carta/carta.inc.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class CartaPlugin
 * @ingroup plugins_blocks_carta
 *
 * @brief Class for "carta" block plugin
 */

import('lib.pkp.classes.plugins.BlockPlugin');

class TestPlugin extends BlockPlugin {
    /**
	 * Determine whether the plugin is enabled. Overrides parent so that
	 * the plugin will be displayed during install.
	 * @param $contextId int Context ID (journal/press)
	 */
	function getEnabled($contextId = null) {
		if (!Config::getVar('general', 'installed')) return true;
		return parent::getEnabled($contextId);
	}
	/**
	 * Install default settings on system install.
	 * @return string
	 */
	function getInstallSitePluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}
	/**
	 * Install default settings on journal creation.
	 * @return string
	 */
	function getContextSpecificPluginSettingsFile() {
		return $this->getPluginPath() . '/settings.xml';
	}
	/**
	 * Get the block context. Overrides parent so that the plugin will be
	 * displayed during install.
	 * @param $contextId int optional
	 * @return int
	 */
	function getBlockContext($contextId = null) {
		if (!Config::getVar('general', 'installed')) return BLOCK_CONTEXT_SIDEBAR;
		return parent::getBlockContext($contextId);
	}
	/**
	 * Determine the plugin sequence. Overrides parent so that
	 * the plugin will be displayed during install.
	 * @param $contextId int Context ID (journal/press)
	 */
	function getSeq($contextId = null) {
		if (!Config::getVar('general', 'installed')) return 1;
		return parent::getSeq($contextId);
	}
	/**
	 * Get the name of this plugin.
	 * @return String
	 */
	function getName() {
		return __('plugins.block.carta.name');
	}
	/**
	 * Get the display name of this plugin.
	 * @return String
	 */
	function getDisplayName() {
		return __('plugins.block.carta.displayName');
	}
	/**
	 * Get a description of the plugin.
	 */
	function getDescription() {
		return __('plugins.block.carta.description');
	}
}

 ?>

<?php
defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\HTML\HTMLHelper;

class PlgSystemCustomCssGhsvs extends CMSPlugin
{
	protected $app;

	public function onBeforeRender()
	{
		$path = JPATH_SITE . '/media/plg_system_customcssghsvs/';

		if($this->app->isClient('administrator'))
		{
			$path .= 'backend/';
		}
		elseif($this->app->isClient('site'))
		{
			$path .= 'frontend/';
		}
		else
		{
			return;
		}

		$path .= $this->app->getTemplate() . '/customcssghsvs.css';
		$version = JDEBUG ? time() : 'auto';

		HTMLHelper::_('stylesheet', $path, ['relative' => true,
			'version' => $version]);
	}
}

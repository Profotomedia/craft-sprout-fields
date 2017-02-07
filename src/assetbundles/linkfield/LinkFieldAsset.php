<?php
namespace barrelstrength\sproutfields\assetbundles\linkfield;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class LinkFieldAsset extends AssetBundle
{
	public function init()
	{
		// define the path that your publishable resources live
		$this->sourcePath = '@barrelstrength/sproutfields/resources';

		// define the dependencies
		$this->depends = [
			CpAsset::class,
		];

		// define the relative path to CSS/JS files that should be registered with the page
		// when this asset bundle is registered
		$this->js = [
			'js/sproutlinkfield.js',
		];

		$this->css = [
			'css/sproutfields.css',
		];

		parent::init();
	}
}
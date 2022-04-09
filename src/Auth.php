<?php

declare(strict_types=1);

/*
 * #logic 做事不讲究逻辑，再努力也只是重复犯错
 * ## 何为相思：不删不聊不打扰，可否具体点：曾爱过。何为遗憾：你来我往皆过客，可否具体点：再无你。
 * ## 只要思想不滑稽，方法总比苦难多！
 * @version 1.0.0
 * @author @小小只^v^ <littlezov@qq.com>  littlezov@qq.com
 * @contact  littlezov@qq.com
 * @link     https://github.com/littlezo
 * @document https://github.com/littlezo/wiki
 * @license  https://github.com/littlezo/MozillaPublicLicense/blob/main/LICENSE
 *
 */

namespace littler\user;

use littler\user\Config\Config;
use littler\user\Drive\DriveManager;

class Auth
{
	/**
	 * @var array
	 */
	protected $options;

	/**
	 * @var Config
	 */
	protected $config;

	/**
	 * @var string
	 */
	protected $store;

	/**
	 * @var DriveManager
	 */
	protected $manager;

	public function __construct(array $options)
	{
		$this->options = $options;

		$this->init();
	}

	public function __call($name, $argv)
	{
		return $this->manager->$name(...$argv);
	}

	public function store($store)
	{
		$this->store = $store;

		return $this;
	}

	protected function getDefaultApp()
	{
		return $this->options['default'];
	}

	protected function makeConfig()
	{
		$app = $this->store ?? $this->getDefaultApp();
		$this->config = new Config($this->options['stores'][$app]);
	}

	protected function getConfig()
	{
		return $this->config;
	}

	protected function makeManager()
	{
		$this->manager = new DriveManager($this->config);
	}

	private function init()
	{
		$this->makeConfig();
		$this->makeManager();
	}
}

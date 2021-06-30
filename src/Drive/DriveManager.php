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
namespace littler\user\Drive;

use littler\user\AuthorizeInterface;
use littler\user\Config\Config;
use littler\user\Exception\Unauthorized;

class DriveManager
{
	/**
	 * @var Config
	 */
	protected $config;

	/**
	 * @var DriveInterface
	 */
	protected $drive;

	public function __construct(Config $config)
	{
		$this->config = $config;

		$this->init();
	}

	public function getDrive()
	{
		return $this->drive;
	}

	public function isLogin()
	{
		$key = $this->config->getKey();

		return $this->drive->has($key);
	}

	public function user()
	{
		if ($this->isLogin() !== false) {
			return $this->makeUser();
		}
		throw new Unauthorized('未登录');
	}

	protected function init()
	{
		$class = $this->config->getDrive();
		$this->drive = new $class();
	}

	protected function makeUser()
	{
		$class = $this->config->getModel();
		$key = $this->config->getKey();
		$id = $this->drive->get($key);

		$model = new $class();
		if ($model instanceof AuthorizeInterface) {
			return $model->getUserById($id);
		}
		throw new Unauthorized('implements ' . AuthorizeInterface::class);
	}
}

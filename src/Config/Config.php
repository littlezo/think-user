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

namespace littler\user\Config;

class Config
{
	protected $drive;

	protected $key;

	protected $model;

	public function __construct($options)
	{
		foreach ($options as $key => $value) {
			$this->{$key} = $value;
		}
	}

	public function setModel($model)
	{
		$this->model = $model;

		return $this;
	}

	public function getModel()
	{
		return $this->model;
	}

	public function setDrive($name)
	{
		$this->drive = $name;

		return $this;
	}

	public function getDrive()
	{
		return $this->drive;
	}

	public function setKey($key)
	{
		$this->key = $key;

		return $this;
	}

	public function getKey()
	{
		return $this->key;
	}
}

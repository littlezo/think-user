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
namespace littler\user\Traits;

use littler\user\AuthorizeInterface;

trait User
{
	public function hasUserByName($name): bool
	{
		return $this->where('name', $name)->find() ? true : false;
	}

	public function getUserByName($name): AuthorizeInterface
	{
		return $this->where('name', $name)->find();
	}

	public function setName($name): AuthorizeInterface
	{
		$this->name = $name;

		return $this;
	}

	public function hasUserByMobile($mobile): bool
	{
		return $this->where('mobile', $mobile)->find() ? true : false;
	}

	public function getUserByMobile($mobile): AuthorizeInterface
	{
		return $this->where('mobile', $mobile)->find();
	}

	public function setMobile($mobile): AuthorizeInterface
	{
		$this->name = $mobile;

		return $this;
	}

	public function verifyPassword($password): bool
	{
		return password_verify($password, $this->password);
	}

	public function setPassword($password): AuthorizeInterface
	{
		$this->password = $password;

		return $this;
	}
}

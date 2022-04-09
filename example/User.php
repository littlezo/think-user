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
include __DIR__.'/../vendor/autoload.php';

use littler\user\AuthorizeInterface;

class User implements AuthorizeInterface
{
	public function getUserById($id): AuthorizeInterface
	{
		return $this;
	}

	public function hasUserByName($username): bool
	{
		return false;
	}

	public function getUserByName($username): AuthorizeInterface
	{
		return $this;
	}

	public function setMobile($mobile): AuthorizeInterface
	{
		return $this;
	}

	public function hasUserByMobile($mobile): bool
	{
		return false;
	}

	public function getUserByMobile($mobile): AuthorizeInterface
	{
		return $this;
	}

	public function setName($username): AuthorizeInterface
	{
		return $this;
	}

	public function setPassword($password): AuthorizeInterface
	{
		return $this;
	}

	public function verifyPassword($password): bool
	{
		return false;
	}

	public function token(): string
	{
		return '';
	}

	public function find()
	{
		return $this;
	}
}

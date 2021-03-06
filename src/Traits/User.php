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
	public function getUserById($id): AuthorizeInterface
	{
		return $this->find($id) ?? $this;
	}

	public function hasUser($where): bool
	{
		return $this->where($where)->find() ? true : false;
	}

	public function getUser($where): AuthorizeInterface
	{
		return $this->where($where)->find();
	}

	public function setPasswdAttr($password)
	{
		return password_hash($password, PASSWORD_ARGON2ID);
	}

	public function setPayPasswdAttr($password)
	{
		return password_hash($password, PASSWORD_ARGON2ID);
	}

	public function setPasswordAttr($password)
	{
		return password_hash($password, PASSWORD_ARGON2ID);
	}

	public function setPayPasswordAttr($password)
	{
		return password_hash($password, PASSWORD_ARGON2ID);
	}

	public function setPaymentAttr($password)
	{
		return password_hash($password, PASSWORD_ARGON2ID);
	}

	public function getAutoPk()
	{
		return $this->getPk($this->getTable());
	}
}

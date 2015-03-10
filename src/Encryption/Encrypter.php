<?php

namespace Wzrd\Contracts\Encryption;

interface Encrypter
{
    /**
	 * Encrypt the given value.
	 *
	 * @param  mixed  $value
	 * @return string
	 */
	public function encrypt($value);

	/**
	 * Decrypt the given value.
	 *
	 * @param  string  $payload
	 * @return mixed
	 */
	public function decrypt($payload);
}

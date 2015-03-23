<?php

namespace WZRD\Contracts\Hashing;

interface Hasher
{
	/**
	 * Hash the given value.
	 *
	 * @param  string  $value
	 * @param  array   $options
	 * @return string
	 */
	public function hash($value, array $options = array());

	/**
	 * Check the given plain value against a hash.
	 *
	 * @param  string  $value
	 * @param  string  $hash
	 * @param  array   $options
	 * @return bool
	 */
	public function verify($value, $hash, array $options = array());
}

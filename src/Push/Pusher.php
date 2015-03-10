<?php

namespace Wzrd\Contracts\Push;

interface Pusher
{
    /**
	 * Push message.
	 *
	 * @param  array  $data
	 */
	public function push(array $data);
}

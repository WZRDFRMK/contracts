<?php

namespace Wzrd\Contracts\Pusher;

interface PusherInterface
{
    /**
	 * Push message.
	 *
	 * @param  array  $data
	 */
	public function push(array $data);
}

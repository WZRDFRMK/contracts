<?php

namespace Wzrd\Contracts\Push;

interface Pusher
{
	/**
     * Push message.
     *
     * @param  Wzrd\Contracts\Push\Notification  $notification
     * @param  array  $options
     */
    public function push(Notification $notification, array $options = array());
}

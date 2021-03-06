<?php

namespace WZRD\Contracts\Push;

interface Pusher
{
    /**
     * Push message.
     *
     * @param WZRD\Contracts\Push\Notification $notification
     * @param array                            $options
     */
    public function push(Notification $notification, array $options = []);

    /**
     * Get supported platforms.
     *
     * @return array
     */
    public function getSupportedPlatforms();
}

<?php

namespace WZRD\Contracts\Messaging;

interface Bus
{
    /**
     * Dispatch a message to its appropriate handler.
     *
     * @param WZRD\Contracts\Messaging\Message $message
     */
    public function dispatch(Message $message);

    /**
     * Subscribes the handler to this bus.
     *
     * @param WZRD\Contracts\Messaging\Handler $handler
     */
    public function subscribe(Handler $handler);
}

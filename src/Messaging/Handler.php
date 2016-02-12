<?php

namespace WZRD\Contracts\Messaging;

interface Handler
{
    /**
     * Handle the message.
     *
     * @param WZRD\Contracts\Messaging\Message $message
     *
     * @return string
     */
    public function handle(Message $message);
}

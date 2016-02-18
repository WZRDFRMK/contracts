<?php

namespace WZRD\Contracts\Messaging;

use IteratorAggregate;

interface Stream extends IteratorAggregate
{
    /**
     * Push message into the stream.
     *
     * @param WZRD\Contracts\Messaging\Message $message
     *
     * @return self
     */
    public function push(Message $message);

    /**
     * Shift a message off the beginning of the stream.
     *
     * @return WZRD\Contracts\Messaging\Message
     */
    public function shift();

    /**
     * Flush stream.
     *
     * @return self
     */
    public function flush();
}

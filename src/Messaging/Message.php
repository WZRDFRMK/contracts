<?php

namespace WZRD\Contracts\Messaging;

interface Message
{
    /**
     * Get message id.
     *
     * @return string
     */
    public function getId();

    /**
     * Get payload.
     *
     * @return array
     */
    public function getPayload();

    /**
     * Get the recorded date.
     *
     * @return Datetime
     */
    public function getRecordedDate();

    /**
     * Get the message name (e.g. the type).
     *
     * @return string
     */
    public function getName();
}

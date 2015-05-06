<?php

namespace WZRD\Contracts\Mail;

interface Mailer
{
    /**
     * Send a mail.
     *
     * @param WZRD\Contracts\Mail\Message $message
     * @param array                       $data
     */
    public function send(Message $message, $options = []);
}

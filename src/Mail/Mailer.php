<?php

namespace Wzrd\Contracts\Mail;

interface Mailer
{
    /**
	 * Send a mail
	 *
	 * @param  Wzrd\Contracts\Mail\Message  $message
	 * @param  array  $data
	 */
	public function send(Message $message, $options = array());
}

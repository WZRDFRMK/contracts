<?php

namespace Wzrd\Contracts\Mailer;

interface MailerInterface
{
    /**
	 * Send a mail
	 *
	 * @param  array  $data
	 */
	public function send(array $data);
}

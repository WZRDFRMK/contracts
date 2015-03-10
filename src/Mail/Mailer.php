<?php

namespace Wzrd\Contracts\Mail;

interface Mailer
{
    /**
	 * Send a mail
	 *
	 * @param  array  $data
	 */
	public function send(array $data);
}

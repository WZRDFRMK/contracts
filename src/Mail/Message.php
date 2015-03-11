<?php

namespace Wzrd\Contracts\Mail;

interface Message
{
	/**
	 * Add a "from" address to the message.
	 *
	 * @param  string  $address
	 * @param  string  $name
	 * @return self
	 */
	public function from($address, $name = null);

	/**
	 * Add a recipient to the message.
	 *
	 * @param  string  $address
	 * @param  string  $name
	 * @return self
	 */
	public function to($address, $name = null);

	/**
	 * Add a carbon copy to the message.
	 *
	 * @param  string  $address
	 * @param  string  $name
	 * @return self
	 */
	public function cc($address, $name = null);

	/**
	 * Add a blind carbon copy to the message.
	 *
	 * @param  string  $address
	 * @param  string  $name
	 * @return self
	 */
	public function bcc($address, $name = null);

	/**
	 * Set the text of the message.
	 *
	 * @param  string  $text
	 * @return $this
	 */
	public function text($text);

	/**
	 * Set the html of the message.
	 *
	 * @param  string  $html
	 * @return $this
	 */
	public function html($html);

	/**
	 * Attach a file to the message.
	 *
	 * @param  string  $file
	 * @param  array   $options
	 * @return $this
	 */
	public function attach($file, array $options = array());

	/**
	 * Attach a file to the message with inline disposition.
	 *
	 * @param  string  $file
	 * @param  array   $options
	 * @return $this
	 */
	public function inline($file, array $options = array());
}

<?php

namespace WZRD\Contracts\Push;

interface Notification
{
	/**
	 * Set the notification's message.
	 *
	 * @param  string $message
	 * @return self
	 */
	public function setMessage($message);

	/**
	 * Get notification's message.
	 *
	 * @return string
	 */
	public function getMessage();

	/**
	 * Set the notification's data.
	 *
	 * @param  array  $data
	 * @return self
	 */
	public function setData(array $data);

	/**
	 * Get notification's data.
	 *
	 * @return array
	 */
	public function getData();

	/**
	 * Add a platform to the notification.
	 *
	 * @param  string  $platform
     * @param  array  $platform
	 * @param  array  $options Optional
	 * @return self
	 */
	public function addDevices($platform, array $devices, array $options = array());

	/**
	 * Get devices tokens.
	 *
	 * @return array
	 */
	public function getDevices();

	/**
	 * Get targeted platforms
	 *
	 * @return array
	 */
	public function getTargetedPlatforms();
}

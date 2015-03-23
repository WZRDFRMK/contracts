<?php

namespace WZRD\Contracts\Mail;

interface Message
{
    /**
     * Add a "from" address to the message.
     *
     * @param string $address
     * @param string $name
     *
     * @return self
     */
    public function addFrom($address, $name = null);

    /**
     * Get "from" addresses.
     *
     * @return array
     */
    public function getFrom();

    /**
     * Add a recipient to the message.
     *
     * @param string $address
     * @param string $name
     *
     * @return self
     */
    public function addTo($address, $name = null);

    /**
     * Get recipients addresses.
     *
     * @return array
     */
    public function getTo();

    /**
     * Add a carbon copy to the message.
     *
     * @param string $address
     * @param string $name
     *
     * @return self
     */
    public function addCc($address, $name = null);

    /**
     * Get carbon copies addresses.
     *
     * @return array
     */
    public function getCc();

    /**
     * Add a blind carbon copy to the message.
     *
     * @param string $address
     * @param string $name
     *
     * @return self
     */
    public function addBcc($address, $name = null);

    /**
     * Get blind carbon copies addresses.
     *
     * @return array
     */
    public function getBcc();

    /**
     * Set the subject of the message.
     *
     * @param string $subject
     *
     * @return self
     */
    public function setSubject($subject);

    /**
     * Get subject.
     *
     * @return string
     */
    public function getSubject();

    /**
     * Set the text of the message.
     *
     * @param string $text
     *
     * @return $this
     */
    public function setText($text);

    /**
     * Get text.
     *
     * @return string
     */
    public function getText();

    /**
     * Set the html of the message.
     *
     * @param string $html
     *
     * @return $this
     */
    public function setHtml($html);

    /**
     * Get HTML.
     *
     * @return string
     */
    public function getHtml();

    /**
     * Attach a file to the message.
     *
     * @param string $file
     * @param array  $options
     *
     * @return $this
     */
    public function attach($file, array $options = array());

    /**
     * Get attachments.
     *
     * @return array
     */
    public function getAttachments();

    /**
     * Attach a file to the message with inline disposition.
     *
     * @param string $file
     * @param array  $options
     *
     * @return $this
     */
    public function inline($file, array $options = array());

    /**
     * Get inlines attachments.
     *
     * @return array
     */
    public function getInlines();
}

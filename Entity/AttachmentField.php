<?php

namespace Creatissimo\MattermostBundle\Entity;

/**
 * Creatissimo\MattermostBundle\Entity\AttachmentField
 */

/**
 * Class AttachmentField
 * @package Creatissimo\MattermostBundle\Entity
 */
class AttachmentField
{
    /**
     * @var string $title
     */
    private $title;

    /**
     * @var string $value
     */
    private $value;

    /**
     * @var string $short
     */
    private $short;


    /**
     * AttachmentField constructor.
     *
     * @param string  $title
     * @param string  $value
     * @param boolean $short
     */
    public function __construct($title, $value, $short = false)
    {
        $this->setTitle($title);
        $this->setValue($value);
        $this->setShort($short);
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getShort(): bool
    {
        return (boolean)$this->short;
    }


    /**
     * @param boolean $short
     *
     * @return $this
     */
    public function setShort($short): self
    {
        $this->short = (boolean)$short;

        return $this;
    }
}

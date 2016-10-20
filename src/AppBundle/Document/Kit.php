<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Kit
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Id
     */
    protected $categoryId;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $name;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $description;

    /**
     * @MongoDB\Field(type="string")
     */
    protected $image;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $price;

    /**
     * @MongoDB\Field(type="float")
     */
    protected $salePrice;

    /**
     * @MongoDB\Field(type="boolean")
     */
    protected $default;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get categoryId
     *
     * @return categoryId $categoryId
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set categoryId
     *
     * @param id $categoryId
     * @return self
     */
    public function setCategoryId($categoryId)
    {
        $this->name = $categoryId;
        return $this;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return self
     */
    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     *
     * @return string $image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set salePrice
     *
     * @param float $salePrice
     * @return self
     */
    public function setSalePrice($salePrice)
    {
        $this->salePrice = $salePrice;
        return $this;
    }

    /**
     * Get salePrice
     *
     * @return float $salePrice
     */
    public function getSalePrice()
    {
        return $this->salePrice;
    }

    /**
     * Set default
     *
     * @param boolean $default
     * @return self
     */
    public function setDefault($default)
    {
        $this->default = $default;
        return $this;
    }

    /**
     * Get default
     *
     * @return boolean $default
     */
    public function getDefault()
    {
        return $this->default;
    }
}

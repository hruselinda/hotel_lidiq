<?php
/**
 * Created by PhpStorm.
 * User: Hrus
 * Date: 07-Dec-17
 * Time: 12:26 PM
 */

namespace Model;


class RoomModel extends BaseModel
{
    private $id;
    private $pic;
    private $title;
    private $priceValue;
    private $priceStamp;
    private $innerTitle;
    private $text;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * @param mixed $pic
     */
    public function setPic($pic)
    {
        $this->pic = $pic;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPriceValue()
    {
        return $this->priceValue;
    }

    /**
     * @param mixed $priceValue
     */
    public function setPriceValue($priceValue)
    {
        $this->priceValue = $priceValue;
    }

    /**
     * @return mixed
     */
    public function getPriceStamp()
    {
        return $this->priceStamp;
    }

    /**
     * @param mixed $priceStamp
     */
    public function setPriceStamp($priceStamp)
    {
        $this->priceStamp = $priceStamp;
    }

    /**
     * @return mixed
     */
    public function getInnerTitle()
    {
        return $this->innerTitle;
    }

    /**
     * @param mixed $innerTitle
     */
    public function setInnerTitle($innerTitle)
    {
        $this->innerTitle = $innerTitle;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }


}
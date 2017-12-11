<?php
/**
 * Created by PhpStorm.
 * User: Hrus
 * Date: 07-Dec-17
 * Time: 12:44 PM
 */

namespace Model;


class BlogPost extends Base
{
    protected $pic;
    protected $title;
    protected $descriptionLong;
    protected $descriptionShort;


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
    public function getDescriptionLong()
    {
        return $this->descriptionLong;
    }

    /**
     * @param mixed $descriptionLong
     */
    public function setDescriptionLong($descriptionLong)
    {
        $this->descriptionLong = $descriptionLong;
    }

    /**
     * @return mixed
     */
    public function getDescriptionShort()
    {
        return $this->descriptionShort;
    }

    /**
     * @param mixed $descriptionShort
     */
    public function setDescriptionShort($descriptionShort)
    {
        $this->descriptionShort = $descriptionShort;
    }


}
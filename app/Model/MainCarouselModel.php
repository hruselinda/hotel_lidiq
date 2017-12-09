<?php
/**
 * Created by PhpStorm.
 * User: Hrus
 * Date: 07-Dec-17
 * Time: 12:21 PM
 */

namespace Model;


class MainCarouselModel extends BaseModel
{
    private $id;
    private $pic;
    private $order;

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
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }


}
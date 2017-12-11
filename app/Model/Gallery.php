<?php
/**
 * Created by PhpStorm.
 * User: Hrus
 * Date: 07-Dec-17
 * Time: 12:51 PM
 */

namespace Model;


class Gallery extends Base
{
    protected $pic;
    protected $category;

    const CATEGORY_OUR_ROOMS = 'our_rooms';
    const CATEGORY_OUR_GARDEN = 'our_garden';
    const CATEGORY_THE_VIEW = 'the_view';

    public static function getAllCategories()
    {
        return [
            self::CATEGORY_OUR_ROOMS,
            self::CATEGORY_OUR_GARDEN,
            self::CATEGORY_THE_VIEW
        ];
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
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

}
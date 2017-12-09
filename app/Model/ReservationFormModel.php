<?php
/**
 * Created by PhpStorm.
 * User: Hrus
 * Date: 07-Dec-17
 * Time: 12:26 PM
 */

namespace Model;


class ReservationFormModel extends BaseModel
{
    private $id;
    private $email;
    private $roomType;
    private $checkIn;
    private $checkOut;
    private $guestsChildren;
    private $guestsAdults;

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getRoomType()
    {
        return $this->roomType;
    }

    /**
     * @param mixed $roomType
     */
    public function setRoomType($roomType)
    {
        $this->roomType = $roomType;
    }

    /**
     * @return mixed
     */
    public function getCheckIn()
    {
        return $this->checkIn;
    }

    /**
     * @param mixed $checkIn
     */
    public function setCheckIn($checkIn)
    {
        $this->checkIn = $checkIn;
    }

    /**
     * @return mixed
     */
    public function getCheckOut()
    {
        return $this->checkOut;
    }

    /**
     * @param mixed $checkOut
     */
    public function setCheckOut($checkOut)
    {
        $this->checkOut = $checkOut;
    }

    /**
     * @return mixed
     */
    public function getGuestsChildren()
    {
        return $this->guestsChildren;
    }

    /**
     * @param mixed $guestsChildren
     */
    public function setGuestsChildren($guestsChildren)
    {
        $this->guestsChildren = $guestsChildren;
    }

    /**
     * @return mixed
     */
    public function getGuestsAdults()
    {
        return $this->guestsAdults;
    }

    /**
     * @param mixed $guestsAdults
     */
    public function setGuestsAdults($guestsAdults)
    {
        $this->guestsAdults = $guestsAdults;
    }

}
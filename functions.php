<?php
function p($array){
    echo '<pre>'. print_r($array, true).'</pre>';
}
function pe($array){
    echo '<pre>'. print_r($array, true).'</pre>';
    exit;
}







//
//CREATE TABLE `hotel_lidiq`.`reservation_form` (
//`id` INT NOT NULL AUTO_INCREMENT,
//  `email` VARCHAR(255) NULL,
//  `roomType` VARCHAR(45) NULL,
//  `checkIn` DATE NULL,
//  `checkOut` DATE NULL,
//  `guests` INT NULL DEFAULT 1,
//  `guestsChildren` INT NULL DEFAULT NULL,
//  `guestsAdults` INT NULL DEFAULT 1,
//  PRIMARY KEY (`id`));
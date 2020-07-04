<?php
class PhoneNumber
{
    public $subNumber;
    public $number;
    function __construct($subNumber, $number)
    {
        $this->subNumber = $subNumber;
        $this->number = $number;
    }
    function getSubNumber()
    {
        return $this->subNumber;
    }
    function getNumber()
    {
        return $this->number;
    }
}

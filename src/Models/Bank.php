<?php
namespace JJCaicedo\PlaceToPay\Models;

class Bank
{
    protected $code;
    protected $name;

    public function __construct($bankCode, $bankName)
    {
        $this->code = $bankCode;
        $this->name = $bankName;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }


}
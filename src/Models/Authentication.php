<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/06/2016
 * Time: 12:17 AM
 */

namespace JJCaicedo\PlaceToPay\Models;


class Authentication
{
    private $login;
    private $tranKey;
    private $seed;
    private $additional;

    public function __construct($login, $tranKey, $additional)
    {
        $this->login = $login;
        $this->seed = date('c');
        $this->tranKey = $this->generateHashKey($tranKey);
        if ($additional)
            $this->additional = $additional;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getTranKey()
    {
        return $this->tranKey;
    }

    /**
     * @param mixed $tranKey
     */
    public function setTranKey($tranKey)
    {
        $this->tranKey = $tranKey;
    }

    /**
     * @return mixed
     */
    public function getAdditional()
    {
        return $this->additional;
    }

    /**
     * @param mixed $additional
     */
    public function setAdditional($additional)
    {
        $this->additional = $additional;
    }


    /**
     * @return string
     */
    private function generateHashKey($tranKey)
    {
        return sha1($this->seed . $tranKey, false);
    }
}
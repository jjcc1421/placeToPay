<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/06/2016
 * Time: 5:04 PM
 */

namespace JJCaicedo\PlaceToPay\Models;

use JJCaicedo\PlaceToPay\Models\Person;
use Illuminate\Http\Request;

class PSETransactionRequest
{
    protected $bankCode;
    protected $bankInterface;
    protected $returnURL;
    protected $reference;
    protected $description;
    protected $language;
    protected $currency;
    protected $totalAmount;
    protected $taxAmount;
    protected $devolutionBase;
    protected $tipAmount;
    protected $payer;
    protected $buyer;
    protected $shipping;
    protected $ipAddress;
    protected $userAgent;
    protected $additionalData;

    /**
     * PSETransactionRequest constructor.
     * @param $params
     */
    public function __construct($params)
    {
        if (is_array($params)) {
            $this->bankCode = $params['bankCode'];
            $this->bankInterface = $params['bankInterface'];
            $this->returnURL = $params['returnURL'];
            $this->reference = $params['reference'];
            $this->description = $params['description'];
            $this->language = $params['language'];
            $this->currency = $params['currency'];
            $this->totalAmount = $params['totalAmount'];
            $this->taxAmount = $params['taxAmount'];
            $this->devolutionBase = $params['devolutionBase'];
            $this->tipAmount = $params['tipAmount'];
            $this->payer = $params['payer'];
            $this->buyer = $params['buyer'];
            $this->shipping = $params['shipping'];
            $this->additionalData = $params['additionalData'];
            $this->ipAddress = $params['ipAddress'];
            $this->userAgent = $params['userAgent'];

            foreach (get_object_vars($this) as $key => $attribute) {
                if (!isset($attribute))
                    if ($key != 'additionalData')
                        throw (new \Exception("Not defined $key"));
            }

        } else {
            throw (new \Exception("Not supported params"));
        }
    }

    /**
     * @return mixed
     */
    public function getBankCode()
    {
        return $this->bankCode;
    }

    /**
     * @return mixed
     */
    public function getBankInterface()
    {
        return $this->bankInterface;
    }

    /**
     * @return mixed
     */
    public function getReturnURL()
    {
        return $this->returnURL;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * @return mixed
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * @return mixed
     */
    public function getDevolutionBase()
    {
        return $this->devolutionBase;
    }

    /**
     * @return mixed
     */
    public function getTipAmount()
    {
        return $this->tipAmount;
    }

    /**
     * @return \JJCaicedo\PlaceToPay\Models\Person
     */
    public function getPayer()
    {
        return $this->payer;
    }

    /**
     * @return \JJCaicedo\PlaceToPay\Models\Person
     */
    public function getBuyer()
    {
        return $this->buyer;
    }

    /**
     * @return \JJCaicedo\PlaceToPay\Models\Person
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @return mixed
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @return mixed
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * @return mixed
     */
    public function getAdditionalData()
    {
        return $this->additionalData;
    }

    /**
     * @param mixed $bankCode
     */
    public function setBankCode($bankCode)
    {
        $this->bankCode = $bankCode;
    }

    /**
     * @param mixed $bankInterface
     */
    public function setBankInterface($bankInterface)
    {
        $this->bankInterface = $bankInterface;
    }

    /**
     * @param string $returnURL
     */
    public function setReturnURL($returnURL)
    {
        $this->returnURL = $returnURL;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @param mixed $totalAmount
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;
    }

    /**
     * @param mixed $taxAmount
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;
    }

    /**
     * @param mixed $devolutionBase
     */
    public function setDevolutionBase($devolutionBase)
    {
        $this->devolutionBase = $devolutionBase;
    }

    /**
     * @param mixed $tipAmount
     */
    public function setTipAmount($tipAmount)
    {
        $this->tipAmount = $tipAmount;
    }

    /**
     * @param mixed $payer
     */
    public function setPayer($payer)
    {
        $this->payer = $payer;
    }

    /**
     * @param mixed $buyer
     */
    public function setBuyer($buyer)
    {
        $this->buyer = $buyer;
    }

    /**
     * @param mixed $shipping
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;
    }

    /**
     * @param mixed $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @param mixed $userAgent
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    }

    /**
     * @param mixed $additionalData
     */
    public function setAdditionalData($additionalData)
    {
        $this->additionalData = $additionalData;
    }


}
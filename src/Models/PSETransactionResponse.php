<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/06/2016
 * Time: 6:01 PM
 */

namespace JJCaicedo\PlaceToPay\Models;


class PSETransactionResponse
{
    protected $transactionID;
    protected $sessionID;
    protected $returnCode;
    protected $trazabilityCode;
    protected $transactionCycle;
    protected $bankCurrency;
    protected $bankFactor;
    protected $bankURL;
    protected $responseCode;
    protected $responseReasonCode;
    protected $responseReasonText;

    /**
     * PSETransactionResponse constructor.
     * @param $params
     */
    public function __construct($params)
    {
        if (is_array($params)) {
            $this->transactionID = $params['transactionID'];
            $this->sessionID = $params['sessionID'];
            $this->returnCode = $params['returnCode'];
            $this->trazabilityCode = $params['trazabilityCode'];
            $this->transactionCycle = $params['transactionCycle'];
            $this->bankCurrency = $params['bankCurrency'];
            $this->bankFactor = $params['bankFactor'];
            $this->bankURL = $params['bankURL'];
            $this->responseCode = $params['responseCode'];
            $this->responseReasonCode = $params['responseReasonCode'];
            $this->responseReasonText = $params['responseReasonText'];
        } else {
            throw (new \Exception("Not supported params"));
        }
    }

    /**
     * @return mixed
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * @return mixed
     */
    public function getSessionID()
    {
        return $this->sessionID;
    }

    /**
     * @return mixed
     */
    public function getReturnCode()
    {
        return $this->returnCode;
    }

    /**
     * @return mixed
     */
    public function getTrazabilityCode()
    {
        return $this->trazabilityCode;
    }

    /**
     * @return mixed
     */
    public function getTransactionCycle()
    {
        return $this->transactionCycle;
    }

    /**
     * @return mixed
     */
    public function getBankCurrency()
    {
        return $this->bankCurrency;
    }

    /**
     * @return mixed
     */
    public function getBankFactor()
    {
        return $this->bankFactor;
    }

    /**
     * @return mixed
     */
    public function getBankURL()
    {
        return $this->bankURL;
    }

    /**
     * @return mixed
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @return mixed
     */
    public function getResponseReasonCode()
    {
        return $this->responseReasonCode;
    }

    /**
     * @return mixed
     */
    public function getResponseReasonText()
    {
        return $this->responseReasonText;
    }


}
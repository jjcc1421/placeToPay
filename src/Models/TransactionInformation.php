<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/06/2016
 * Time: 6:47 PM
 */

namespace JJCaicedo\PlaceToPay\Models;


class TransactionInformation
{
    protected $transactionID;
    protected $sessionID;
    protected $reference;
    protected $requestDate;
    protected $bankProcessDate;
    protected $onTest;
    protected $returnCode;
    protected $trazabilityCode;
    protected $transactionCycle;
    protected $transactionState;
    protected $responseCode;
    protected $responseReasonCode;
    protected $responseReasonText;

    /**
     * TransactionInformation constructor.
     * @param $params
     */
    public function __construct($params)
    {
        if (is_array($params)) {
            $this->transactionID = $params['transactionID'];
            $this->sessionID = $params['sessionID'];
            $this->reference = $params['reference'];
            $this->requestDate = $params['requestDate'];
            $this->bankProcessDate = $params['bankProcessDate'];
            $this->onTest = $params['onTest'];
            $this->returnCode = $params['returnCode'];
            $this->trazabilityCode = $params['trazabilityCode'];
            $this->transactionCycle = $params['transactionCycle'];
            $this->transactionState = $params['transactionState'];
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
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * @return mixed
     */
    public function getBankProcessDate()
    {
        return $this->bankProcessDate;
    }

    /**
     * @return mixed
     */
    public function getOnTest()
    {
        return $this->onTest;
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
    public function getTransactionState()
    {
        return $this->transactionState;
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
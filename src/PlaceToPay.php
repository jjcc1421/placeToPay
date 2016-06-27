<?php

namespace JJCaicedo\PlaceToPay;

use JJCaicedo\PlaceToPay\Models\Authentication;
use JJCaicedo\PlaceToPay\Models\Bank;
use JJCaicedo\PlaceToPay\Models\Payment;
use JJCaicedo\PlaceToPay\Models\PSETransactionRequest;
use JJCaicedo\PlaceToPay\Models\PSETransactionResponse;
use JJCaicedo\PlaceToPay\Models\TransactionInformation;
use SoapClient;

class PlaceToPay
{
    private static $auth;
    private static $wsdl;

    /**
     * Connect to PlaceToPay SOAP API
     * @param Authentication $auth - place to pay auth
     * @param $wsdl - place to pay soap wsdl
     */
    public static function connect(Authentication $auth, $wsdl)
    {
        self::$auth = $auth;
        self::$wsdl = $wsdl;
    }

    /**
     * Get list of banks
     * @return array<Bank>|exception
     */
    public static function getBankList()
    {
        $params = ["auth" => self::$auth];
        $client = new SoapClient(self::$wsdl);
        $response = $client->__soapCall('getBankList', array($params));
        $banks = [];
        foreach ($response->getBankListResult->item as $bank) {
            array_push($banks, new Bank($bank->bankCode, $bank->bankName));
        }
        return $banks;
    }

    /**
     * Create transaction
     * @param PSETransactionRequest $transactionRequest
     * @return PSETransactionResponse
     */
    public static function createTransaction(PSETransactionRequest $transactionRequest)
    {
        $params = ["auth" => self::$auth,
            "transaction" => $transactionRequest];
        $client = new SoapClient(self::$wsdl);
        $response = $client->__soapCall('createTransaction', array($params));
        $pseResponse = new PSETransactionResponse(get_object_vars($response->createTransactionResult));

        try {
            $payment = new Payment;
            $payment->status = 'SENT';
            $payment->transaction_id = $pseResponse->getTransactionID();
            $payment->save();
        } catch (\Exception $e) {
            //No data base support
        }

        return $pseResponse;
    }

    /**
     * @param $transactionID
     * @return TransactionInformation
     */
    public static function getTransactionInformation($transactionID)
    {
        $params = ["auth" => self::$auth,
            "transactionID" => $transactionID];
        $client = new SoapClient(self::$wsdl);
        $response = $client->__soapCall('getTransactionInformation', array($params));
        $transactionInformation = new TransactionInformation(get_object_vars($response->getTransactionInformationResult));
        try {
            $payment = new Payment;
            $payment->status = $transactionInformation->getTransactionState();
            $payment->transaction_id = $transactionInformation->getTransactionID();
            $payment->save();
        } catch (\Exception $e) {
            //No data base support
        }
        return $transactionInformation;
    }


}
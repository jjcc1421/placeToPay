<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 26/06/2016
 * Time: 2:22 AM
 */

namespace JJCaicedo\PlaceToPay\Models;

class Person
{
    protected $document;
    protected $documentType;
    protected $firstName;
    protected $lastName;
    protected $company;
    protected $emailAddress;
    protected $city;
    protected $province;
    protected $phone;
    protected $country;
    protected $mobile;

    /**
     * Person constructor.
     * @param $params
     */
    public function __construct($params)
    {
        if (is_array($params)) {
            $this->document = $params['document'];
            $this->documentType = $params['documentType'];
            $this->firstName = $params['firstName'];
            $this->lastName = $params['lastName'];
            $this->company = $params['company'];
            $this->emailAddress = $params['emailAddress'];
            $this->city = $params['city'];
            $this->province = $params['province'];
            $this->phone = $params['phone'];
            $this->country = $params['country'];
            $this->mobile = $params['mobile'];
            foreach (get_object_vars($this) as $key => $attribute) {
                if (!isset($attribute))
                    throw (new \Exception("Not defined $key"));
            }
        } else {
            throw (new \Exception("Not supported params"));
        }
    }

    /**
     * @return null
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @return null
     */
    public function getDocumentType()
    {
        return $this->documentType;
    }

    /**
     * @return null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return null
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return null
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @return null
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return null
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @return null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return null
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return null
     */
    public function getMobile()
    {
        return $this->mobile;
    }


}
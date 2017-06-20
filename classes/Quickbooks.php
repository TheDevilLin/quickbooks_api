<?php

use QuickBooksOnline\API\DataService\DataService;

class Quickbooks
{
    private $dataServices;

    function __construct(){
        $dataService = DataService::Configure(array(
            'auth_mode' => 'oauth1',
            'consumerKey' => "Your Consumer key",
            'consumerSecret' => "Your Consumer secret",
            'accessTokenKey' => "Your Access Tokens",
            'accessTokenSecret' => "Your Access Token secrets",
            'QBORealmID' => "Your CompanyID",
            'baseUrl' => "either sandbox or Production QBO URL"
        ));
        $this->dataServices = $dataService;
    }

    /*
     * Get All Invoices return Object Data
     */
    public function getAllInvoices(){
        $result = $this->dataServices->Query("Your Query");

        return $result;
    }

    /*
     * Get All Items return Object Data
     */
    public function getAllItems(){
        $result = $this->dataServices->Query("Your Query");

        return $result;
    }

    /*
     * Get All Customers return Object Data
     */
    public function getAllCustomers(){
        $result = $this->dataServices->Query("Your Query");

        return $result;
    }

}
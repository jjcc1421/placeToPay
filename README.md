# placeToPay
Place To pay package

##Installation 
Composer:
```sh
composer require jjcaicedo/place-to-pay
```
##prerequisites 
###Data base table
Data table to register payments
```php
//using illuminate migrations
Schema::create('payments', function (Blueprint $table) {
    $table->increments('id');
    $table->string('status');
    $table->string('transaction_id');
    $table->timestamps();
});
```
##Usage 
###Connect
```php
$auth = new \JJCaicedo\PlaceToPay\Models\Authentication(<Place to pay AuthId>, <Place to pay TranKey>, <Additional Data>|null);
\JJCaicedo\PlaceToPay\PlaceToPay::connect($auth, <Soap wdsl url>);
```
###Transaction Request
Send Transaction request
Check models classes
```php
$transactionResponse = \JJCaicedo\PlaceToPay\PlaceToPay::createTransaction(<PSETransactionRequest>);//If it works Payment status Sent
```

###Get Transaction Info
Send Transaction request
Check models classes
```php
$transactionInformation = \JJCaicedo\PlaceToPay\PlaceToPay::getTransactionInformation(<transactionId>); //If it works Payment status to $transactionInformation->transactionState;
```

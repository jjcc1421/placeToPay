# placeToPay
Place To pay package

##Installation 
Composer:
```sh
composer install jjcaicedo/place-to-pay
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
###TransactionRequest
Send Transaction request
Check models classes
```php
\JJCaicedo\PlaceToPay\PlaceToPay::createTransaction(<PSETransactionRequest>);//If it works payment status Sent
```

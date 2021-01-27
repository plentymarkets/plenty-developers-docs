<?php
 
use Plenty\Modules\Account\Address\Contracts\AddressRepositoryContract;
use Plenty\Modules\Authorization\Services\AuthHelper;

/** @var \Plenty\Modules\Account\Address\Contracts\AddressRepositoryContract $addressRepo */
$addressRepo = pluginApp(AddressRepositoryContract::class);

/** @var \Plenty\Modules\Authorization\Services\AuthHelper $authHelper */
$authHelper = pluginApp(AuthHelper::class);

$address = null;

$address = $authHelper->processUnguarded( // <1>
    function () use ($addressRepo, $address) {
        return $addressRepo->findAddressById(42);
    }
);
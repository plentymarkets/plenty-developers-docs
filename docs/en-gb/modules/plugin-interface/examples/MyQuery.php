<?php
use Plenty\Modules\Module\ServiceProvider\Contracts;

$paginatedResponse = $repositoryContract -> query($columns, $page, $itemsPerPage); // <1>

$resultsCollectionForCurrentPage = $paginatedResponse -> getResult(); // <2>

$totalNumberOfResults = $paginatedResponse -> getTotalCount(); // <3>

// Manipulates the data.
$results = $paginatedResponse -> getResult(); // <4>
foreach ($results as $index => $result) {
    // <5>
}
$paginatedResponse -> setResult($results);
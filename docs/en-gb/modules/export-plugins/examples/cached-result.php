```
$exportRepository = pluginApp(CatalogExportRepositoryContract::class);
$converter = new YourResultConverter();

$collection = $exportRepository->getDevCachedResult($id);

$converter->fromCatalogLazyCollection($collection)
          ->toMarketplace();
```

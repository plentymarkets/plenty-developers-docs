```
$exportRepository = pluginApp(CatalogExportRepositoryContract::class);
$converter = pluginApp(YourResultConverter::class);

$collection = $exportRepository->getDevCachedResult($id);

$converter->fromCatalogLazyCollection($collection)
          ->toMarketplace();
```

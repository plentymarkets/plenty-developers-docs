```
$exportRepository = pluginApp(CatalogExportRepositoryContract::class);
$converter = pluginApp(YourResultConverter::class);

$result = $exportRepository->exportById($id)->getResult($id);

$converter->fromCatalogExportResult($result)
          ->toMarketplace();
```

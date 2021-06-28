```
$exportRepository = pluginApp(CatalogExportRepositoryContract::class);
$converter = new YourResultConverter();

$result = $exportRepository->exportById($id)->getResult($id);

$converter->fromCatalogExportResult($result)
          ->toMarketplace();
```

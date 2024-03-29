```
$exportRepository = pluginApp(CatalogExportRepositoryContract::class);
$converter = $template->getResultConverterContainer()->getResultConverter(YourResultConverter::KEY);

$result = $exportRepository->exportById($id)->getResult($id);

$converter->fromCatalogExportResult($result)
          ->toMarketplace();
```

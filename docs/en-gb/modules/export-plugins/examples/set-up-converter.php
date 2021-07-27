```
use Plenty\Modules\Catalog\Contracts\CatalogExportRepositoryContract;
...
$exportRepository = pluginApp(CatalogExportRepositoryContract::class);
$converter = pluginApp(YourResultConverter::class);

$collection = $exportRepository->getDevCachedResult($catalogUUID);

$converter->fromCatalogLazyCollection($collection)
          ->toMarketplace();
```

```
use Plenty\Modules\Catalog\Contracts\CatalogExportRepositoryContract;
...
/** @var CatalogExportRepositoryContract $repository */
$repository = pluginApp(CatalogExportRepositoryContract::class);
$collection = $repository->getDevCachedResult($catalogUUID, 86400); // 24 hours

$collection->chunk(500)
    ->each(function ($chunk) {
        foreach ($chunk as $row) {
            // Do something with the chunk or row
        }
    });
```

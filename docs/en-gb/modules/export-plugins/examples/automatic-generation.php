```
use Plenty\Modules\Catalog\Contracts\CatalogRepositoryContract;
...
/** @var CatalogRepositoryContract $repository */
$repository = pluginApp(CatalogRepositoryContract::class);
$repository->enableDevcache($id);
```

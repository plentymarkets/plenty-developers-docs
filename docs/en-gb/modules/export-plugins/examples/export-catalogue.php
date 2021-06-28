/** @var CatalogRepositoryContract $catalogRepository */
$catalogRepository = pluginApp(CatalogRepositoryContract::class);
$catalogRepository->setFilters(
   [
       'type' => BasicCatalogExportServiceProvider::PLUGIN_NAME,
       'active' => true
   ]
);

$page = 1;

do {
   $paginatedResult = $catalogRepository->all($page);
   foreach ($paginatedResult->getResult() as $catalog) {

   }
} while (!$paginatedResult->isLastPage());

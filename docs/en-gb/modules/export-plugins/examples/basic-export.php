$page = 1;
$resultArray = [];

/** @var CatalogExportRepositoryContract $catalogExportRepository */
$catalogExportRepository = pluginApp(CatalogExportRepositoryContract::class);

do {
   $paginatedResult = $catalogRepository->all($page);
   foreach ($paginatedResult->getResult() as $catalog) {
       $exportService = $catalogExportRepository->exportById($catalog->id);

       //$exportService->applyDynamicConfig(); Will run the dynamic config logic. This should be used in most scenarios

       // These can be used to only trigger a partial export of a catalogue. A good example is a stock export,
       // which does not need the item-specific data apart from stock and sku
       //$exportService->allowExportKeys();
       //$exportService->forbidExportKeys();

       $catalogExportResult = $exportService->getResult();

       foreach ($catalogExportResult as $page) {
           $resultArray = array_merge($resultArray, $page);
       }

       return $resultArray;
   }
} while (!$paginatedResult->isLastPage());

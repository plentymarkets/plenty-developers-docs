public function getCustomFilterContainer(): CatalogFilterBuilderContainer
{
   /** @var CatalogFilterBuilderContainer $container */
   $container = pluginApp(CatalogFilterBuilderContainer::class);
   /** @var VariationFilterBuilderFactory $filterBuilderFactory */
   $filterBuilderFactory = pluginApp(VariationFilterBuilderFactory::class);

   $itemHasIdsFilter = $filterBuilderFactory->itemHasIds();
   $container->addFilterBuilder($itemHasIdsFilter);

   return $container;
}

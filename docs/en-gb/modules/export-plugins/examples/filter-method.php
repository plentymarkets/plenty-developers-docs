public function getFilterContainer(): CatalogFilterBuilderContainer
{
   /** @var CatalogFilterBuilderContainer $container */
   $container = pluginApp(CatalogFilterBuilderContainer::class);
   /** @var VariationFilterBuilderFactory $filterBuilderFactory */
   $filterBuilderFactory = pluginApp(VariationFilterBuilderFactory::class);

   $variationIsActiveFilter = $filterBuilderFactory->variationIsActive();
   $variationIsActiveFilter->setShouldBeActive(true);
   $container->addFilterBuilder($variationIsActiveFilter);

   return $container;
}

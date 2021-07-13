```
class MarketplaceTemplateDataProvider extends AbstractGroupedTemplateProvider
{
    ...

    /**
     * @return ResultConverterContainer
     */
    public function getResultConverterContainer(): ResultConverterContainer
    {
        /** @var ResultConverterContainer $container */
        $container = pluginApp(ResultConverterContainer::class);
        /** @var CSVResultConverter $csvConverter */
        $csvConverter = pluginApp(CSVResultConverter::class);
        $container->addResultConverter($csvConverter);

        return $container;
    }
}

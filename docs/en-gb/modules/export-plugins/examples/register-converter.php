```
class MarketplaceTemplateDataProvider extends AbstractGroupedTemplateProvider
{
    ...

    public function getResultConverterClass(): string
    {
        return YourResultConverter::class;
    }
}

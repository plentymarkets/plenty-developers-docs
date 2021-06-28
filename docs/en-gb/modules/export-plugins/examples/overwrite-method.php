public function getDynamicConfig(): CatalogDynamicConfigContract
{
   return pluginApp(ExampleDynamicConfig::class);
}

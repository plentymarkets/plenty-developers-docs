public function getPostMutator(): CatalogMutatorContract
{
   return pluginApp(ExamplePostMutator::class);
}

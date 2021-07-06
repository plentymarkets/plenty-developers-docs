/** @var SimpleTemplateField $sku */
$sku = pluginApp(SimpleTemplateField::class, [
   'sku',
   'sku',
   'SKU', // In a productive plugin this should be translated
   true
]);
$sku->setCallable(pluginApp(ExampleSkuCallback::class));

// Combined field

/** @var TemplateGroup $combinedGroup */
$combinedGroup = pluginApp(TemplateGroup::class,
   [
       "identifier" => "groupThree",
       "label" => "Combined fields" // In a productive plugin this should be translated
   ]);

/** @var CatalogTemplateFieldContainer $simpleContainer */
$simpleContainer = pluginApp(CatalogTemplateFieldContainer::class);

/** @var SimpleTemplateField $name */
$barcode = pluginApp(SimpleTemplateField::class, [
   'barcode',
   'barcode',
   'Barcode',
   true
]);

$simpleContainer->addField($barcode);

/** @var CombinedTemplateField $name */
$barcodeType = pluginApp(CombinedTemplateField::class, [
   'barcodeType',
   'barcodeType',
   'Barcode type', // In a productive plugin this should be translated
   pluginApp(ExampleBarcodeTypeMappingValueProvider::class),
   $simpleContainer
]);

$combinedGroup->addGroupField($barcodeType);
$templateGroupContainer->addGroup($combinedGroup);

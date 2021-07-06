public function getTemplateGroupContainer(): TemplateGroupContainer
{
   /** @var TemplateGroupContainer $templateGroupContainer */
   $templateGroupContainer = pluginApp(TemplateGroupContainer::class);

   /** @var TemplateGroup $templateGroup */
   $templateGroup = pluginApp(TemplateGroup::class,
       [
           "identifier" => "groupOne",
           "label" => "fields" // In a productive plugin this should be translated
       ]);

   /** @var SimpleTemplateField $name */
   $name = pluginApp(SimpleTemplateField::class, [
       'variationName',
       'name',
       'Variation name', // In a productive plugin this should be translated
       true
   ]);

   /** @var SimpleTemplateField $price */
   $price = pluginApp(SimpleTemplateField::class, [
       'price',
       'price',
       'Sales price', // In a productive plugin this should be translated
       true
   ]);

   /** @var SimpleTemplateField $sku */
   $sku = pluginApp(SimpleTemplateField::class, [
       'sku',
       'sku',
       'SKU', // In a productive plugin this should be translated
       true
   ]);

   /** @var SimpleTemplateField $stock */
   $stock = pluginApp(SimpleTemplateField::class, [
       'stock',
       'stock',
       'Stock', // In a productive plugin this should be translated
       true
   ]);

   $templateGroup->addGroupField($name);
   $templateGroup->addGroupField($price);
   $templateGroup->addGroupField($sku);
   $templateGroup->addGroupField($stock);

   $templateGroupContainer->addGroup($templateGroup);

   return $templateGroupContainer;
}

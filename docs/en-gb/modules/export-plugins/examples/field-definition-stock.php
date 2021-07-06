/** @var SimpleTemplateField $stock */
$stock = pluginApp(SimpleTemplateField::class, [
   'stock',
   'stock',
   'Stock', // In a productive plugin this should be translated
   true,
   false,
   false,
   [],
   [
       [
           'fieldId' => 'stock-0',
           'id' => 0,
           'isCombined' => false,
           'key' => null,
           'type' => "stock",
           'value' => null
       ]
   ]
]);

// Complex field

/** @var TemplateGroup $complexGroup */
$complexGroup = pluginApp(TemplateGroup::class,
   [
       "identifier" => "groupTwo",
       "label" => "Complex fields" // In a productive plugin this should be translated
   ]);

/** @var ComplexTemplateField $name */
$category = pluginApp(ComplexTemplateField::class, [
   'category',
   'category',
   'Category', // In a productive plugin this should be translated
   pluginApp(ExampleCategoryMappingValueProvider::class),
   true
]);

$complexGroup->addGroupField($category);
$templateGroupContainer->addGroup($complexGroup);

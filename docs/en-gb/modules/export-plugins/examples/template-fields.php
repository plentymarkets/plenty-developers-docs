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

   /** @var SimpleTemplateField $templateField */
   $templateField = pluginApp(SimpleTemplateField::class, [
       'uniqueIdentifier',
       'theResultKey',
       'First example field' // In a productive plugin this should be translated
   ]);

   $templateGroup->addGroupField($templateField);

   $templateGroupContainer->addGroup($templateGroup);

   return $templateGroupContainer;
}

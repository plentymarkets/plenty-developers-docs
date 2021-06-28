<?php

namespace BasicCatalogExport\Providers;

use Plenty\Modules\Catalog\Containers\Filters\CatalogFilterBuilderContainer;
use Plenty\Modules\Catalog\Containers\TemplateGroupContainer;
use Plenty\Modules\Catalog\Models\SimpleTemplateField;
use Plenty\Modules\Catalog\Models\TemplateGroup;
use Plenty\Modules\Catalog\Templates\Providers\AbstractGroupedTemplateProvider;

/**
* Class ExampleTemplateProvider
* @package BasicCatalogExport\Providers
*/
class ExampleTemplateProvider extends AbstractGroupedTemplateProvider
{
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

   public function getFilterContainer(): CatalogFilterBuilderContainer
   {
       return pluginApp(CatalogFilterBuilderContainer::class);
   }

   public function getCustomFilterContainer(): CatalogFilterBuilderContainer
   {
       return pluginApp(CatalogFilterBuilderContainer::class);
   }

   public function isPreviewable(): bool
{
   // If you are not sure what this does, check the guide for DynamicConfig before setting this to true
   // In your productive plugin
   return true;
}

}

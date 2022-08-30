<?php

use Plenty\Modules\Catalog\Services\UI\Sections\Sections;
use Plenty\Modules\Catalog\Services\UI\Sections\Section\Section;
use Plenty\Modules\Catalog\Services\UI\Options\Elements\CheckboxUIOption;
...
public function getSections()
{
    // Prepare the Sections container
    $sections = pluginApp(Sections::class);


    // Prepare the Section
    $processesSection = pluginApp(Section::class);
    $processesSection
        ->setKey('processes')
        ->setLabel('Processes');

    // Prepare the Option
    $checkboxOption = pluginApp(CheckboxUIOption::class);
    $checkboxOption
        ->setKey('itemExport')
        ->setLabel('Item export')
        ->setDefaultValue(false);
    

    // Add the option to the section
    $processesSection->add($checkboxOption);
    
    // Add the section to the sections container
    $sections->add($processesSection);
    

    return $sections;
}
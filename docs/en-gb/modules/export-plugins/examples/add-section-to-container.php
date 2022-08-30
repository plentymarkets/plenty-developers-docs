<?php

public function getSections()
{
    // Prepare the Sections container
    $sections = pluginApp(Sections::class);
    
    // Add the sections to the sections container
    $sections->add( pluginApp(ProcessesSection::class) )
             ->add( pluginApp(AnotherSection::class) )
             ->add( pluginApp(YetAnotherSection::class) );
    
    return $sections;
}
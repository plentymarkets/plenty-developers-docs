<?php

public function getSettings(): array
{
    $options = pluginApp(UIOptions::class);

    $options
        ->add( pluginApp(YourNewOptionHere::class) ) // this is the previously created class which extends an already provided example like SelectUIOption
        ->add( pluginApp(YourSecondNewOptionHere::class) );

    return $options->toArray();
}
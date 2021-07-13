<?php

Namespace
Plenty\Modules\YourModule\TemplateProviderExample;

use Plenty\Modules\Catalog\Template\Providers\AbstractGroupedTemplateProvider;

/**
* Class TemplateProviderExample
*/

Class TemplateProviderExample extends AbstractGroupedTemplateProvider
{
...
	public function hasExtendedMappings(): bool
	{
		return true;
}
}

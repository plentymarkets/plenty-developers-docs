<?php

namespace Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\Options;

use Plenty\Modules\Catalog\Services\UI\Options\Elements\TextUIOption;

/**
 * Class XMLElementName
 * @package Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\Options
 */
class XMLElementName extends TextUIOption
{
    protected $key = 'elementName';
    protected $defaultValue = 'entity';

    public function getLabel(): string
    {
        return trans('catalog::converters/options.elementName');
    }
}


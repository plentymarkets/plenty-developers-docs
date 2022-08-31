<?php

namespace Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\Options;

use Plenty\Modules\Catalog\Contracts\UI\UIValuesContract;
use Plenty\Modules\Catalog\Services\UI\Options\Elements\SelectUIOption;
use Plenty\Modules\Catalog\Services\UI\Options\Elements\Values\Elements\SelectValue;
use Plenty\Modules\Catalog\Services\UI\Options\Elements\Values\Values;

/**
 * Class DelimiterOption
 * @package Plenty\Modules\Catalog\Services\Converter\ResultConverters\Defaults\Options
 */
class DelimiterOption extends SelectUIOption
{

    protected $key = 'delimiter';
    protected $defaultValue = 'comma';

    /**
     * @inheritDoc
     */
    public function getLabel(): string
    {
        return trans('catalog::converters/options.delimiter');
    }

    /**
     * @inheritDoc
     */
    public function getValues(): UIValuesContract
    {
        $values = pluginApp(Values::class);

        $values
            ->add( (pluginApp(SelectValue::class) )->setCaption(trans('catalog::converters/options.comma'))->setValue('comma') )
            ->add( (pluginApp(SelectValue::class) )->setCaption(trans('catalog::converters/options.semicolon'))->setValue('semicolon') )
            ->add( (pluginApp(SelectValue::class) )->setCaption(trans('catalog::converters/options.pipe'))->setValue('pipe') )
            ->add( (pluginApp(SelectValue::class) )->setCaption(trans('catalog::converters/options.tab'))->setValue('tab') );

        return $values;
    }
}
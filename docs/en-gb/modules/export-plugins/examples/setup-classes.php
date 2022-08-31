<?php

use Plenty\Modules\You\Will\Never\Read\This\ItemExportProcessOption;
use Plenty\Modules\You\Will\Never\Read\This\StockUpdateProcessOption;

class ProcessesSection extends Section
{

    protected $key = "processes";

    public function getLabel():string
    {
        return trans("module_catalog::examples/section.processes");
    }

    protected function registerOptions()
    {
        $this->add( pluginApp(ItemExportProcessOption::class) );
        $this->add( pluginApp(StockUpdateProcessOption::class) );
    }
}
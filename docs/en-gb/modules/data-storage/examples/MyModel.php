<?php
namespace PluginNameSpace\Migrations;

use PluginNameSpace\Models\MyModel;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

/**
* Class CreateNewTable
*/
class CreateNewTable
{
    /**
    * @param Migrate $migrate
    */
    public function run(Migrate $migrate)
    {
        $migrate->createTable(MyModel::class);
    }
}
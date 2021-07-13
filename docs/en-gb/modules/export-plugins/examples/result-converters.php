```
<?php

namespace Your\Namespace\Here;

use Plenty\Modules\Catalog\Services\Collections\CatalogLazyCollection;
use Plenty\Modules\Catalog\Services\Converter\ResultConverters\BaseResultConverter;
use Plenty\Modules\Catalog\Services\FileHandlers\ResourceHandler;

/**
* Class CSVResultConverter
*/
class CSVResultConverter extends BaseResultConverter
{
   const CHUNK_SIZE = 50;
   const MIME_TYPE = 'text/csv';
   const FILE_EXTENSION = 'csv';

   /**
    * Converts to the user's download file
    *
    * @param CatalogLazyCollection $collection
    * @param ResourceHandler $resourceHandler
    */
   protected function convertToDownload(CatalogLazyCollection $collection, ResourceHandler $resourceHandler)
   {
       // Add each row
       $collection->each(function ($chunk) use ($resourceHandler) {
           foreach ($chunk as $row) {
               $resourceHandler->writeCSV($row, ',', '"');
           }
       });

   }


   /**
    * Converts to the marketplace export
    *
    * @param CatalogLazyCollection $collection
    * @return mixed
    */
   protected function convertToMarketplace(CatalogLazyCollection $collection)
   {
       $collection->each(function ($chunk) {
           // Send each chunk to the marketplace
       });

       return true;
   }

   /**
     * Will be used to identify the requested converter. Therefore it has to be unique in a specific template.
     *
     * @return string
     */
    public function getKey(): string
    {
        return 'csv';
    }

    /**
     * The string that will be visible to the user.
     *
     * @return string
     */
    public function getLabel(): string
    {
        return 'CSV';
    }
}
```

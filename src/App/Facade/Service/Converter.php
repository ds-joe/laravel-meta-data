<?php

namespace Joe\MetaData\App\Facade\Service;

use Illuminate\Support\Facades\Facade;



/**
 * Meta data converter service facade
 *
 * @method static Collection decode(mixed $data) Decode undot data.
 * @method static Collection resolveAndDecodeItem(mixed $item) Resolve and decode item
 * @method static Collection resolveAndDecodeItems(mixed $items) Resolve and decode items
 * @method static Collection encode(mixed $data) Encode dot data.
 * @method static Collection resolveAndEncodeItem(mixed $item) Resolve and encode item
 * @method static Collection resolveAndEncodeItems(mixed $items) Resolve and encode items
 * @method static Collection resolveMetadataItem(mixed $item) Resolve database item.
 * @method static Collection resolveMetadataItems(mixed $items) Resolve database items.
 * @method static Collection convertItemToMetadata(mixed $item) Convert to key & value.
 * @method static Collection convertItemsToMetadata(mixed $items) Convert to metadata items.
 */
class Converter extends Facade
{
  protected static function getFacadeAccessor()
  {
    return 'metadata.service.converter';
  }
}

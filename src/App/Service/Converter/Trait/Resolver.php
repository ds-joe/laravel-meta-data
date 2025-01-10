<?php

namespace Joe\MetaData\App\Service\Converter\Trait;

use Illuminate\Support\Collection;

use InvalidArgumentException;
use Exception;

trait Resolver
{
  use Validation;

  /**
   * Resolve database item.
   * Because the database will return item of collection [key => name, value => value]
   * This method will return key_name => value direct
   *
   * @param mixed $item
   * @return Collection
   * @throws InvalidArgumentException
   * @throws Exception
   */
  public function resolveMetadataItem(mixed $item): Collection
  {
    # Validate & Convert data
    $this->validateDataType($item);
    $item = collect($item);
    $itemKeys = $this->validateItemKeys($item);

    return collect([
      $item->get($itemKeys['database_key']) => $item->get($itemKeys['database_value'])
    ]);
  }

  /**
   * Resolve database items.
   * Because the database will return collection of [key => name, value => value]
   * This method will return key_name => value direct
   *
   * @param mixed $items
   * @return Collection
   * @throws InvalidArgumentException
   * @throws Exception
   */
  public function resolveMetadataItems(mixed $items): Collection
  {
    return collect($items)
      ->map(fn($item) => $this->resolveMetadataItem($item))->collapse();
  }

  /**
   * Convert to key & value.
   * This method is reverse of resolveDatabaseItem method
   *
   * @param mixed $item
   * @return Collection
   * @throws InvalidArgumentException
   */
  public function convertItemToMetadata(mixed $item): Collection
  {
    # Validate & Convert data
    $this->validateDataType($item);
    $item = collect($item);

    return $item->map(fn($value, $key) => [
      $this->META_DATA_KEY => $key,
      $this->META_DATA_VALUE => $value
    ])->values();
  }

  /**
   * Convert to metadata items.
   * This method is reverse of resolveMetadataItems method
   *
   * @param mixed $items
   * @return Collection
   * @throws InvalidArgumentException
   */
  public function convertItemsToMetadata(mixed $items): Collection
  {
    return collect($items)
      ->map(fn($item) => $this->convertItemToMetadata($item))->values();
  }
}

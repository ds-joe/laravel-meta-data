<?php

namespace Joe\MetaData\App\Service\Converter\Trait;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as ECollection;
use Illuminate\Database\Eloquent\Model;
use Exception;
use InvalidArgumentException;

trait Validation
{

  /**
   * This method check if provided data is valid data.
   *
   * @param mixed $data
   * @return void
   * @throws InvalidArgumentException
   */
  protected function validateDataType(mixed $data): void
  {
    if (!$data instanceof ECollection && !$data instanceof Collection && !$data instanceof Model && !is_array($data)) {
      throw new InvalidArgumentException('The provided data must be an instance of Eloquent Collection, Collection, or an array.');
    }
  }

  /**
   * Validate item database key &  database value (keys)
   *
   * @param Collection $item
   * @return Collection Return the database key and database value (keys)
   * @throws Exception
   */
  protected function validateItemKeys(Collection $item): Collection
  {
    $databaseConfigKey = $this->META_DATA_KEY;
    $databaseConfigValueKey = $this->META_DATA_VALUE;

    if (!$item->has($databaseConfigKey) || !$item->has($databaseConfigValueKey)) {
      throw new Exception('The provided item does not have the required keys, or config data does not exists.');
    }

    return collect([
      'database_key' => $databaseConfigKey,
      'database_value' => $databaseConfigValueKey
    ]);
  }
}

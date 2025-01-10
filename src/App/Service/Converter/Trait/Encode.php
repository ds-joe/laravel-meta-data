<?php

namespace Joe\MetaData\App\Service\Converter\Trait;

use Illuminate\Support\Collection;
use Exception;
use InvalidArgumentException;

trait Encode
{
  use Validation, Resolver;

  /**
   * Encode dot data.
   *
   * @param mixed $data
   * @return Collection
   * @throws InvalidArgumentException
   * @throws Exception
   */
  public function encode(mixed $data): Collection
  {
    $this->validateDataType($data);
    return collect($data)
      ->dot();
  }

  /**
   * Resolve and encode item
   *
   * @param mixed $item
   * @return Collection
   * @throws InvalidArgumentException
   * @throws Exception
   */
  public function resolveAndEncodeItem(mixed $item): Collection
  {
    $resolved = $this->resolveMetadataItem($item);
    return $this->encode($resolved);
  }

  /**
   * Resolve and encode items
   *
   * @param mixed $item
   * @return Collection
   * @throws InvalidArgumentException
   * @throws Exception
   */
  public function resolveAndEncodeItems(mixed $items): Collection
  {
    return collect($items)
      ->map(fn($item) => $this->resolveAndEncodeItem($item));
  }
}

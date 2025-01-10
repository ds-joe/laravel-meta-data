<?php

namespace Joe\MetaData\App\Service\Converter\Trait;

use Illuminate\Support\Collection;
use Exception;
use InvalidArgumentException;

trait Decode
{
  use Resolver, Validation;

  /**
   * Decode undot data.
   *
   * @param mixed $data
   * @return Collection
   * @throws InvalidArgumentException
   */
  public function decode(mixed $data): Collection
  {
    $this->validateDataType($data);
    return collect($data)
      ->undot();
  }

  /**
   * Resolve and decode item
   *
   * @param mixed $item
   * @return Collection
   * @throws InvalidArgumentException
   * @throws Exception
   */
  public function resolveAndDecodeItem(mixed $item): Collection
  {
    $resolved = $this->resolveMetadataItem($item);
    return $this->decode($resolved);
  }

  /**
   * Resolve and decode items
   *
   * @param mixed $item
   * @return Collection
   * @throws InvalidArgumentException
   * @throws Exception
   */
  public function resolveAndDecodeItems(mixed $items): Collection
  {
    return collect($items)
      ->map(fn($item) => $this->resolveAndDecodeItem($item));
  }
}

<?php

namespace Joe\MetaData\App\Service\Converter\Interface;

use Illuminate\Support\Collection;

interface ResolverInterface
{
  public function resolveMetadataItem(mixed $item): Collection;
  public function resolveMetadataItems(mixed $items): Collection;
  public function convertItemToMetadata(mixed $item): Collection;
  public function convertItemsToMetadata(mixed $items): Collection;
}

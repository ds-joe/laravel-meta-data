<?php

namespace Joe\MetaData\App\Service\Converter\Interface;

use Illuminate\Support\Collection;

interface EncodeInterface
{
  public function encode(mixed $data): Collection;
  public function resolveAndEncodeItem(mixed $item): Collection;
  public function resolveAndEncodeItems(mixed $items): Collection;
}

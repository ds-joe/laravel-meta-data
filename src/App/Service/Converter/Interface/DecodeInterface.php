<?php

namespace Joe\MetaData\App\Service\Converter\Interface;

use Illuminate\Support\Collection;

interface DecodeInterface
{
  public function decode(mixed $data): Collection;
  public function resolveAndDecodeItem(mixed $item): Collection;
  public function resolveAndDecodeItems(mixed $items): Collection;
}

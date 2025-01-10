<?php

namespace Joe\MetaData\App\Service\Converter;

use Joe\MetaData\App\Core;
use Joe\MetaData\App\Service\Converter\Trait\Decode;
use Joe\MetaData\App\Service\Converter\Trait\Encode;
use Joe\MetaData\App\Service\Converter\Trait\Resolver;
use Joe\MetaData\App\Service\Converter\Interface\DecodeInterface;
use Joe\MetaData\App\Service\Converter\Interface\EncodeInterface;
use Joe\MetaData\App\Service\Converter\Interface\ResolverInterface;

class Converter extends Core implements DecodeInterface, EncodeInterface, ResolverInterface
{
  use Resolver, Encode, Decode;
}

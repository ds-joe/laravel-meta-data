<?php

namespace Joe\MetaData\App;

/**
 * This class contains all required data for this package.
 * We're creating this class to avoid repeating some keys/code.
 *
 */
class Core
{

  /**
   * meta data key.
   *
   * @var string
   */
  protected string $META_DATA_KEY;

  /**
   * meta data value.
   *
   * @var string
   */
  protected string $META_DATA_VALUE;


  public function __construct()
  {
    $this->META_DATA_KEY = config('meta-data.key_name');
    $this->META_DATA_VALUE = config('meta-data.value_name');
  }

  /**
   * Get meta data key
   *
   * @return string
   */
  public function getMetaDataKey(): string
  {
    return $this->META_DATA_KEY;
  }

  /**
   * Set meta data key
   *
   * @param string $key
   * @return Core
   */
  public function setMetaDataKey(string $key): Core
  {
    $this->META_DATA_KEY = $key;
    return $this;
  }
}

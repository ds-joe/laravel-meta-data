# Metadata Converter Methods Documentation

This document describes the methods provided in the `Joe\MetaData\App\Service\Converter` namespace. Each method includes a description, parameters, return type, possible exceptions, and a usage example.

---

### `decode(mixed $data): Collection`
**Description:**
Decodes undotted data into a Laravel collection.

**Parameters:**
- `$data` (mixed): The data to decode.

**Returns:**
- `Collection`: The decoded data.

**Throws:**
- `InvalidArgumentException`

**Example:**
```php
use Joe\MetaData\App\Facade\Service\Converter;
$data = ['key1.key2' => 'value'];
$decoded = Converter::decode($data);
// Result: ['key1' => ['key2' => 'value']]
```

---

### `resolveAndDecodeItem(mixed $item): Collection`
**Description:**
Resolves and decodes a single metadata item.

**Parameters:**
- `$item` (mixed): The item to resolve and decode.

**Returns:**
- `Collection`: The resolved and decoded data.

**Throws:**
- `InvalidArgumentException`
- `Exception`

**Example:**
```php
use Joe\MetaData\App\Facade\Service\Converter;
$item = ['database_key' => 'key', 'database_value' => 'value'];
$decodedItem = Converter::resolveAndDecodeItem($item);
// Result: ['key' => 'value']
```

---

### `resolveAndDecodeItems(mixed $items): Collection`
**Description:**
Resolves and decodes multiple metadata items.

**Parameters:**
- `$items` (mixed): The items to resolve and decode.

**Returns:**
- `Collection`: The resolved and decoded data.

**Throws:**
- `InvalidArgumentException`
- `Exception`

**Example:**
```php
use Joe\MetaData\App\Facade\Service\Converter;
$items = [
  ['database_key' => 'key1', 'database_value' => 'value1'],
  ['database_key' => 'key2', 'database_value' => 'value2']
];
$decodedItems = Converter::resolveAndDecodeItems($items);
// Result: ['key1' => 'value1', 'key2' => 'value2']
```

---

### `encode(mixed $data): Collection`
**Description:**
Encodes data into dotted notation.

**Parameters:**
- `$data` (mixed): The data to encode.

**Returns:**
- `Collection`: The encoded data.

**Throws:**
- `InvalidArgumentException`
- `Exception`

**Example:**
```php
use Joe\MetaData\App\Facade\Service\Converter;
$data = ['key1' => ['key2' => 'value']];
$encoded = Converter::encode($data);
// Result: ['key1.key2' => 'value']
```

---

### `resolveAndEncodeItem(mixed $item): Collection`
**Description:**
Resolves and encodes a single metadata item.

**Parameters:**
- `$item` (mixed): The item to resolve and encode.

**Returns:**
- `Collection`: The resolved and encoded data.

**Throws:**
- `InvalidArgumentException`
- `Exception`

**Example:**
```php
use Joe\MetaData\App\Facade\Service\Converter;
$item = ['database_key' => 'key', 'database_value' => 'value'];
$encodedItem = Converter::resolveAndEncodeItem($item);
// Result: ['key' => 'value']
```

---

### `resolveAndEncodeItems(mixed $items): Collection`
**Description:**
Resolves and encodes multiple metadata items.

**Parameters:**
- `$items` (mixed): The items to resolve and encode.

**Returns:**
- `Collection`: The resolved and encoded data.

**Throws:**
- `InvalidArgumentException`
- `Exception`

**Example:**
```php
use Joe\MetaData\App\Facade\Service\Converter;
$items = [
  ['database_key' => 'key1', 'database_value' => 'value1'],
  ['database_key' => 'key2', 'database_value' => 'value2']
];
$encodedItems = Converter::resolveAndEncodeItems($items);
// Result: ['key1' => 'value1', 'key2' => 'value2']
```

---

### `resolveMetadataItem(mixed $item): Collection`
**Description:**
Resolves a database item into a metadata key-value pair.

**Parameters:**
- `$item` (mixed): The item to resolve.

**Returns:**
- `Collection`: The resolved metadata.

**Throws:**
- `InvalidArgumentException`
- `Exception`

**Example:**
```php
use Joe\MetaData\App\Facade\Service\Converter;
$item = ['database_key' => 'key', 'database_value' => 'value'];
$resolved = Converter::resolveMetadataItem($item);
// Result: ['key' => 'value']
```

---

### `resolveMetadataItems(mixed $items): Collection`
**Description:**
Resolves multiple database items into metadata key-value pairs.

**Parameters:**
- `$items` (mixed): The items to resolve.

**Returns:**
- `Collection`: The resolved metadata.

**Throws:**
- `InvalidArgumentException`
- `Exception`

**Example:**
```php
use Joe\MetaData\App\Facade\Service\Converter;
$items = [
  ['database_key' => 'key1', 'database_value' => 'value1'],
  ['database_key' => 'key2', 'database_value' => 'value2']
];
$resolvedItems = Converter::resolveMetadataItems($items);
// Result: ['key1' => 'value1', 'key2' => 'value2']
```

---

### `convertItemToMetadata(mixed $item): Collection`
**Description:**
Converts a metadata item back into key-value format.

**Parameters:**
- `$item` (mixed): The item to convert.

**Returns:**
- `Collection`: The converted item.

**Throws:**
- `InvalidArgumentException`

**Example:**
```php
use Joe\MetaData\App\Facade\Service\Converter;
$item = ['key' => 'value'];
$converted = Converter::convertItemToMetadata($item);
// Result: [['key' => 'key', 'value' => 'value']]
```

---

### `convertItemsToMetadata(mixed $items): Collection`
**Description:**
Converts multiple metadata items back into key-value format.

**Parameters:**
- `$items` (mixed): The items to convert.

**Returns:**
- `Collection`: The converted items.

**Throws:**
- `InvalidArgumentException`

**Example:**
```php
use Joe\MetaData\App\Facade\Service\Converter;
$items = [
  ['key1' => 'value1'],
  ['key2' => 'value2']
];
$convertedItems = Converter::convertItemsToMetadata($items);
// Result: [[['key' => 'key1', 'value' => 'value1']], [['key' => 'key2', 'value' => 'value2']]]
```
---

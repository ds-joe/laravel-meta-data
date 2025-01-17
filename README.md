# ISolution/MetaData
This package provides a dynamic and flexible way to manage key-value structured data, allowing developers to seamlessly handle unknown or loosely defined attributes in their Laravel applications. By leveraging Laravel's powerful Collections and Eloquent ORM, the service introduces a structured approach to store, retrieve, and manipulate data stored as key-value pairs.

### Setup
- Add meta provider to providers in `app/providers.php`
```php
Joe\MetaData\Providers\MetaDataProvider::class
```
- Publish provider and configs
```php
php artisan vendor:publish --provider="Joe\MetaData\Providers\MetaDataProvider" --tag="config"
```

### Services Docs
- [Converter](./src/App/Service/Converter/DOC.md)

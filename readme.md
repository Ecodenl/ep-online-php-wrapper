# EP Online PHP Api Wrapper

A simple PHP wrapper for EP Online API.

## Version Information

To keep versioning simple, the package version is aligned with the EP-Online API version.

| Package version | API Version | Status                  | PHP Version    |
|:----------------|:------------|:------------------------|:---------------|
| 5.x.x           | 5.x.x       | Active support :rocket: | ^8.0           |
| 3.x.x           | 3.x.x       | No active support :x:   | ^7.4.0 \| ^8.0 |


## Installing

```
composer require ecodenl/ep-online-php-wrapper
```

***

# Using the API

## Read the official API docs

To get a basic understanding of what is possible and what isn't, you should
read [the official api docs](https://public.ep-online.nl/swagger/index.html).

## Setting up the connection

```php
use Ecodenl\EpOnlinePhpWrapper\Client;
use Ecodenl\EpOnlinePhpWrapper\EpOnline;

$secret = 'asecretcodeyouneedtoobtain';

// Establish the connection
$client = Client::init($secret);

// To get extensive logging from each request
// the client accepts any logger that follows the (PSR-3 standard)[https://github.com/php-fig/log]
// This example uses the logger from laravel, but feel free to pass any logger that implements the \Psr\Log\LoggerInterface
$logger = \Illuminate\Support\Facades\Log::getLogger();
$client = Client::init($secret, $logger);

$epOnline = EpOnline::init($client);
```

## Resources
### PandEnergielabel

```php
// Get the available energy label for the given address (see
// the official api docs (https://public.ep-online.nl/swagger/index.html) for all possible parameters  
$label = $epOnline->pandEnergielabel()
  ->byAddress([
    'postcode' => '3255MC',
    'huisnummer' => 13,
  ]);

// Search on a ID from the BAG ("adresseerbaarObjectId") 
$address = $epOnline->pandEnergielabel()
    ->byId('1924010000030064');
```

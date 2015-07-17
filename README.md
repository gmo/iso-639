## Installation

Install with composer:
```
composer require "gmo/iso-639:^1.0"
```

## Usage

Initialize the `Languages` class, then find a `Language` by one of its properties.

```php
use Gmo\Iso639\Languages;

$languages = new Languages();

$english = $languages->findByName('English');

echo $english->code1();  // en
echo $english->code2t(); // eng
echo $english->code2b(); // eng
echo $english->code3();  // eng
echo $english->name();   // English
```

Converting ISO 639-3 codes to ISO 639-1 codes:

```php
$languages->findByCode3('eng')->code1(); // en

```

Or reverse:

```php
$languages->findByCode1('en')->code3(); // eng

```

`Languages` can be iterated:
```php
foreach ($languages as $language) {
    echo $language->name();
}
```

Or a list can be retrieved:

```php
$languages->getLanguages();
```

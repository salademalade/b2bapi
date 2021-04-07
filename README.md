# PHP BytesToBits Wrapper

Welcome to the repository for the PHP BytesToBits Wrapper.

## Installation

Write:

```
composer require ichbinderwooj/b2bapi
```

in your command line to install this package.

## Use

To use this wrapper, declare a variable with the `BytesToBits` class and your token. For example:

```php
$btb = new BytesToBits($myToken);
```

Then you can use the methods of this class to access each endpoint.

For example:

```php
$btb = new BytesToBits($myToken);
echo $btb->text();
```

## methods

`word() : string`

returns a random word from the BytesToBits API.

`text() : string`

returns a random text from the BytesToBits API.

`madlibs() : array("title", "variables", "text", "questions")`

returns a madlib array from the BtesToBits API.

# PHP BytesToBits Wrapper

**This library is now defunct due to breaking changes in the BytesToBits API.**

Welcome to the repository for the PHP BytesToBits Wrapper.

## Getting started

To use the BytesToBits API, you need a token. You can acquire one at https://api.bytestobits.dev by making an account.

## Installation

Write:

```
composer require ichbinderwooj/b2bapi
```

in your command line to install this package.

## Use

To use this wrapper, declare a variable with the `BytesToBits` class and your token. For example:

```php
require "vendor/autoload.php";

$btb = new BytesToBits\BytesToBits($myToken);
```

Then you can use the methods of this class to access each endpoint.

For example:

```php
require "vendor/autoload.php";

$btb = new BytesToBits\BytesToBits($myToken);
echo $btb->text();
```

## Methods

`word() : string`

returns a random word from the BytesToBits API.

`text() : string`

returns a random text from the BytesToBits API.

`madlibs() : array("title", "variables", "text", "questions")`

returns a madlib array from the BtesToBits API.

`meme() : array("title", "url", "link", "subreddit", "upvotes", "downvotes", "comments")`

returns a meme from r/memes, r/dankmemes, r/me_irl or r/meirl.

`reddit($subreddit : string, $limit = 0 : int) : array()`

returns a list of fetched reddit posts.

`lyrics($song : string, $artist : string) : array("title", "artist", "lyrics")`

returns the lyrics of a song.

`info() : array("uses", "limit", "next_reset")`

returns information regarding your token.

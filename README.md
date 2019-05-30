# PHPHighlight

PHPHighlight is a PHP library for highlighting syntax that can be easily configured and extended.

The library parses the text, finds the tag \<pre>, read attributes (data-lang, data-file, data-theme), and for this reason decides how to highlight the syntax of this block. 
Supports style customization.

## Installation
You can install package via composer
```bash
$ composer require demyanovs/php-highlight
```

## Usage
See examples here [index.php](../master/examples/index.php)
```php
<?php

require_once '../vendor/autoload.php';

use Demyanovs\PHPHighlight\Highlighter;

$highlighter = new Highlighter($text, 'railscasts');
// Configuration
$highlighter->setShowLineNumbers(false);
$highlighter->setShowActionPanel(true);
echo $highlighter->parse();
```
### Language syntax support
* PHP
* JavaScript
* XML
* HTML
* Bash

### Themes
* default - light theme
* drakula - dark theme
* railscasts - dark theme

### Customization
```php
// Show line numbers
$highlighter->setShowLineNumbers(true);
// Show action panel (copy button)
$highlighter->setShowActionPanel(true);
```

You can set following attributes in \<pre> tag
\<pre data-lang="php" data-file="example.php" data-theme="drakuala">
* lang - a language of the text. This affects how the parser will highlight the syntax.
* file - show file name in action panel.
* theme - allows to overwrite the global theme.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE.md)

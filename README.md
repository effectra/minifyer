# Minifyer

The `Minify` class provides methods to minify HTML, JSON, and CSS content.

## Usage

```php
<?php

use Effectra\Minifyer\Minify;

// Minify HTML
$htmlContent = '<html>...</html>';
$minifiedHtml = Minify::html($htmlContent);

// Minify JSON
$jsonContent = '{"key": "value"}';
$minifiedJson = Minify::json($jsonContent);

// Minify CSS
$cssContent = 'body { color: red; }';
$minifiedCss = Minify::css($cssContent);
```

## Methods

### `html(string $content): string`

Minify HTML content by removing unnecessary whitespace and comments.

Parameters:
- `$content` (string): The HTML content to be minified.

Returns:
- (string): The minified HTML content.

### `json(string $content): string`

Minify JSON content by decoding and then encoding it.

Parameters:
- `$content` (string): The JSON content to be minified.

Returns:
- (string): The minified JSON content.

### `css(string $content): string`

Minify CSS content by removing unnecessary whitespace and line breaks.

Parameters:
- `$content` (string): The CSS content to be minified.

Returns:
- (string): The minified CSS content.
```
```

Please make sure to adjust the code and descriptions as needed for your specific use case. Let me know if you need any further assistance!
"# minifyer" 

<?php

declare(strict_types=1);

namespace Effectra\Minifyer;

use Effectra\Fs\Type\Json;

/**
 * Class Minify
 *
 * Provides methods to minify HTML, JSON, and CSS content.
 */
class Minify
{
    /**
     * Minify HTML content by removing unnecessary whitespace and comments.
     *
     * @param string $content The HTML content to be minified.
     * @return string The minified HTML content.
     */
    public static function html(string $content): string
    {
        $search = array(
            '/\>[^\S ]+/s',     // strip white spaces after tags, except space
            '/[^\S ]+\</s',     // strip white spaces before tags, except space
            '/(\s)+/s',         // shorten multiple whitespace sequences
            '/<!--(.|\s)*?-->/' // Remove css comments
        );
        $replace = array('>', '<', '\\1', '');
        $content = preg_replace($search, $replace, $content);
        return $content;
    }
    /**
     * Minify JSON content by decoding and then encoding it.
     *
     * @param string $content The JSON content to be minified.
     * @return string The minified JSON content.
     */
    public static function json(string $content): string
    {
        $json = json_decode($content);

        return json_encode($json);
    }
    /**
     * Minify CSS content by removing unnecessary whitespace and line breaks.
     *
     * @param string $content The CSS content to be minified.
     * @return string The minified CSS content.
     */
    public function css(string $content): string
    {
        // Remove line breaks and carriage returns
        $content = str_replace(array("\r\n", "\r", "\n"), '', $content);

        // Remove whitespace before and after each declaration
        $content = preg_replace('/\s*({|}|:|;)\s*/', '$1', $content);

        // Remove whitespace between multiple declarations
        $content = preg_replace('/;\s*/', ';', $content);

        // Remove whitespace between multiple selectors
        $content = preg_replace('/}\s*/', '}', $content);

        return $content;
    }
}

<?php
/**
 * Dump helper. Functions to dump variables to the screen, in a nicley formatted manner.
 * @author Joost van Veen
 * @version 1.0
 */
if (!function_exists('image')) {
    function image($image, $class = 'img-responsive')
    {
        return "<img class='" . $class . "' src='" . base_url('assets/images/' . $image) . "' onerror='this.src=\"" . base_url('assets/images/no-image.png') . "\";'>";
    }
}
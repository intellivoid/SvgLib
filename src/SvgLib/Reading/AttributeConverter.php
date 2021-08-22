<?php

namespace SvgLib\Reading;

/**
 * Base interface for SvgLib presentation attribute => CSS property converters.
 */
interface AttributeConverter
{
    /**
     * Convert the given attribute value into a valid CSS property value.
     *
     * @param string $value The attribute.
     *
     * @return string The converted value that can be used in CSS.
     */
    public function convert($value);
}

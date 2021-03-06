<?php

namespace SvgLib\Nodes\Structures;

use SvgLib\Nodes\CDataContainer;
use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'style'.
 * Has the attribute 'type' and the CSS content.
 */
class SVGStyle extends SVGNodeContainer implements CDataContainer
{
    const TAG_NAME = 'style';

    /**
     * @param string $css   The CSS data rules.
     * @param string $type  The style type attribute.
     */
    public function __construct($css = '', $type = 'text/css')
    {
        parent::__construct();

        $this->setValue($css);
        $this->setType($type);
    }

    /**
     * @return string The type attribute.
     */
    public function getType()
    {
        return $this->getAttribute('type');
    }

    /**
     * @param $type string The type attribute.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setType($type)
    {
        return $this->setAttribute('type', $type);
    }

    /**
     * @inheritdoc
     */
    public function rasterize(SVGRasterizer $rasterizer)
    {
    }
}

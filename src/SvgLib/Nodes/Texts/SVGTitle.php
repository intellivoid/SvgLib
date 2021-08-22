<?php

namespace SvgLib\Nodes\Texts;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'title'.
 */
class SVGTitle extends SVGNodeContainer
{
    const TAG_NAME = 'title';

    public function __construct($text = '')
    {
        parent::__construct();
        $this->setValue($text);
    }

    /**
     * Dummy implementation
     *
     * @inheritdoc
     */
    public function rasterize(SVGRasterizer $rasterizer)
    {
        // nothing to rasterize
    }
}

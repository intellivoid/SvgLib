<?php

namespace SvgLib\Nodes\Embedded;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'foreignObject'.
 */
class SVGForeignObject extends SVGNodeContainer
{
    const TAG_NAME = 'foreignObject';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @inheritdoc
     */
    public function rasterize(SVGRasterizer $rasterizer)
    {
        // Nothing to rasterize.
    }
}

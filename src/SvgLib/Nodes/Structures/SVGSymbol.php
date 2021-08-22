<?php

namespace SvgLib\Nodes\Structures;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'symbol'.
 */
class SVGSymbol extends SVGNodeContainer
{
    const TAG_NAME = 'symbol';

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

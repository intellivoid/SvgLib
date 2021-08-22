<?php

namespace SvgLib\Nodes\Structures;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'pattern'.
 */
class SVGPattern extends SVGNodeContainer
{
    const TAG_NAME = 'pattern';

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

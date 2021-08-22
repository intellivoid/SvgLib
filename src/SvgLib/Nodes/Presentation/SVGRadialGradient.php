<?php

namespace SvgLib\Nodes\Presentation;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'radialGradient'.
 */
class SVGRadialGradient extends SVGNodeContainer
{
    const TAG_NAME = 'radialGradient';

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

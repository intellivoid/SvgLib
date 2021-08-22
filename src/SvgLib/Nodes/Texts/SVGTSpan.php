<?php

namespace SvgLib\Nodes\Texts;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Nodes\Structures\SVGFont;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'tspan'.
 */
class SVGTSpan extends SVGNodeContainer
{
    const TAG_NAME = 'tspan';

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

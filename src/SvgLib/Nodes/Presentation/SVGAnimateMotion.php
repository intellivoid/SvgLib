<?php

namespace SvgLib\Nodes\Presentation;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'animateMotion'.
 */
class SVGAnimateMotion extends SVGNodeContainer
{
    const TAG_NAME = 'animateMotion';

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

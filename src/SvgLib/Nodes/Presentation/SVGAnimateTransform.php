<?php

namespace SvgLib\Nodes\Presentation;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'animateTransform'.
 */
class SVGAnimateTransform extends SVGNodeContainer
{
    const TAG_NAME = 'animateTransform';

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

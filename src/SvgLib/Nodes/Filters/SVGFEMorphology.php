<?php

namespace SvgLib\Nodes\Filters;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'feMorphology'.
 */
class SVGFEMorphology extends SVGNodeContainer
{
    const TAG_NAME = 'feMorphology';

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

<?php

namespace SvgLib\Nodes\Filters;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'feFuncG'.
 */
class SVGFEFuncG extends SVGNodeContainer
{
    const TAG_NAME = 'feFuncG';

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

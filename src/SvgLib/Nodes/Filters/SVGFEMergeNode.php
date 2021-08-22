<?php

namespace SvgLib\Nodes\Filters;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'feMergeNode'.
 */
class SVGFEMergeNode extends SVGNodeContainer
{
    const TAG_NAME = 'feMergeNode';

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

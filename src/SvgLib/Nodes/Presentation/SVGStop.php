<?php

namespace SvgLib\Nodes\Presentation;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'stop'.
 */
class SVGStop extends SVGNodeContainer
{
    const TAG_NAME = 'stop';

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

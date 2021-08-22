<?php

namespace SvgLib\Nodes\Texts;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'textPath'.
 */
class SVGTextPath extends SVGNodeContainer
{
    const TAG_NAME = 'textPath';

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

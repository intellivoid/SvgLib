<?php

namespace SvgLib\Nodes\Structures;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'clipPath'.
 */
class SVGClipPath extends SVGNodeContainer
{
    const TAG_NAME = 'clipPath';

    public function __construct($id = null)
    {
        parent::__construct();

        $this->setAttribute('id', $id);
    }

    /**
     * @inheritdoc
     */
    public function rasterize(SVGRasterizer $rasterizer)
    {
        // TODO How do we rasterize this? The clipPath in and of itself wont get rasterized, but usages of it will be!
    }
}

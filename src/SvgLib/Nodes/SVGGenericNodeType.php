<?php

namespace SvgLib\Nodes;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * NOT INTENDED FOR USER ACCESS. This is the class that gets instantiated for
 * unknown nodes in input SvgLib.
 */
class SVGGenericNodeType extends SVGNodeContainer
{
    private $tagName;

    public function __construct($tagName)
    {
        parent::__construct();
        $this->tagName = $tagName;
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return $this->tagName;
    }

    /**
     * @inheritdoc
     */
    public function rasterize(SVGRasterizer $rasterizer)
    {
        // do nothing
    }
}

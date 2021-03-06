<?php

namespace SvgLib\Nodes\Shapes;

use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'polygon'.
 * Offers methods for manipulating the list of points.
 */
class SVGPolygon extends SVGPolygonalShape
{
    const TAG_NAME = 'polygon';

    /**
     * @param array[] $points Array of points (float 2-tuples).
     */
    public function __construct($points = array())
    {
        parent::__construct($points);
    }

    /**
     * @inheritdoc
     */
    public function rasterize(SVGRasterizer $rasterizer)
    {
        if ($this->getComputedStyle('display') === 'none') {
            return;
        }

        $visibility = $this->getComputedStyle('visibility');
        if ($visibility === 'hidden' || $visibility === 'collapse') {
            return;
        }

        $rasterizer->render('polygon', array(
            'open'      => false,
            'points'    => $this->getPoints(),
        ), $this);
    }
}

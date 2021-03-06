<?php

namespace SvgLib\Nodes\Shapes;

use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'polyline'.
 * Offers methods for manipulating the list of points.
 */
class SVGPolyline extends SVGPolygonalShape
{
    const TAG_NAME = 'polyline';

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
            'open'      => true,
            'points'    => $this->getPoints(),
        ), $this);
    }
}

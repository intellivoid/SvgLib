<?php

namespace SvgLib\Nodes\Shapes;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'path'.
 */
class SVGPath extends SVGNodeContainer
{
    const TAG_NAME = 'path';

    /**
     * @param string|null $d The path description.
     */
    public function __construct($d = null)
    {
        parent::__construct();

        $this->setAttribute('d', $d);
    }

    /**
     * @return string The path description string.
     */
    public function getDescription()
    {
        return $this->getAttribute('d');
    }

    /**
     * Sets the path description string.
     *
     * @param string $d The new description.
     *
     * @return $this This node instance, for call chaining.
     */
    public function setDescription($d)
    {
        return $this->setAttribute('d', $d);
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

        $d = $this->getDescription();
        if (!isset($d)) {
            return;
        }

        $commands = $rasterizer->getPathParser()->parse($d);
        $subpaths = $rasterizer->getPathApproximator()->approximate($commands);

        foreach ($subpaths as $subpath) {
            $rasterizer->render('polygon', array(
                'open'      => true,
                'points'    => $subpath,
            ), $this);
        }
    }
}

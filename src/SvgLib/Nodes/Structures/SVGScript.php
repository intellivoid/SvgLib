<?php

namespace SvgLib\Nodes\Structures;

use SvgLib\Nodes\CDataContainer;
use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'script'.
 */
class SVGScript extends SVGNodeContainer implements CDataContainer
{
    const TAG_NAME = 'script';

    /**
     * @param string $content The script content.
     */
    public function __construct($content = '')
    {
        parent::__construct();

        $this->setValue($content);
    }

    /**
     * @inheritdoc
     */
    public function rasterize(SVGRasterizer $rasterizer)
    {
    }
}

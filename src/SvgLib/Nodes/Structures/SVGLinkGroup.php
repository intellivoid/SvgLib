<?php

namespace SvgLib\Nodes\Structures;

use SvgLib\Nodes\SVGNodeContainer;

/**
 * Represents the SvgLib tag 'a'.
 */
class SVGLinkGroup extends SVGNodeContainer
{
    const TAG_NAME = 'a';

    public function __construct()
    {
        parent::__construct();
    }
}

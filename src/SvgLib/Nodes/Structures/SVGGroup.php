<?php

namespace SvgLib\Nodes\Structures;

use SvgLib\Nodes\SVGNodeContainer;

/**
 * Represents the SvgLib tag 'g'.
 */
class SVGGroup extends SVGNodeContainer
{
    const TAG_NAME = 'g';

    public function __construct()
    {
        parent::__construct();
    }
}

<?php

namespace SvgLib\Nodes\Texts;

use SvgLib\Nodes\SVGNodeContainer;
use SvgLib\Nodes\Structures\SVGFont;
use SvgLib\Rasterization\SVGRasterizer;

/**
 * Represents the SvgLib tag 'text'.
 *
 * Usage:
 *
 * $svg = new \SvgLib\SvgLib(600, 400);
 *
 * $font = new \SvgLib\Nodes\Structures\SVGFont('openGost', 'OpenGostTypeA-Regular.ttf');
 * $svg->getDocument()->addChild($font);
 *
 * $svg->getDocument()->addChild(
 *   (new \SvgLib\Nodes\Texts\SVGText('hello', 50, 50))
 *     ->setFont($font)
 *     ->setSize(15)
 *     ->setStyle('stroke', '#f00')
 *     ->setStyle('stroke-width', 1)
 * );
 *
 */
class SVGText extends SVGNodeContainer
{
    const TAG_NAME = 'text';

    /**
     * @var SVGFont
     */
    private $font;

    public function __construct($text = '', $x = 0, $y = 0)
    {
        parent::__construct();
        $this->setValue($text);

        $this->setAttribute('x', $x);
        $this->setAttribute('y', $y);
    }

    /**
     * Set font
     *
     * @param SVGFont $font
     * @return $this
     */
    public function setFont(SVGFont $font)
    {
        $this->font = $font;
        $this->setStyle('font-family', $font->getFontName());
        return $this;
    }

    /**
     * Set font size
     *
     * @param $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->setStyle('font-size', $size);
        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getComputedStyle($name)
    {
        // force stroke before fill
        if ($name === 'paint-order') {
            // TODO remove this workaround
            return 'stroke fill';
        }

        return parent::getComputedStyle($name);
    }

    /**
     * @inheritdoc
     */
    public function rasterize(SVGRasterizer $rasterizer)
    {
        if (empty($this->font)) {
            return;
        }

        $rasterizer->render('text', array(
            'x'         => $this->getAttribute('x'),
            'y'         => $this->getAttribute('y'),
            'size'      => $this->getComputedStyle('font-size'),
            'anchor'    => $this->getComputedStyle('text-anchor'),
            'text'      => $this->getValue(),
            'font_path' => $this->font->getFontPath(),
        ), $this);
    }
}

<?php

namespace SvgLib\Rasterization\Renderers;

use SvgLib\Rasterization\SVGRasterizer;

/**
 * This renderer can draw ellipses (and circles).
 *
 * Options:
 * - float cx: x coordinate of center point
 * - float cy: y coordinate of center point
 * - float rx: radius along x-axis
 * - float ry: radius along y-axis
 */
class EllipseRenderer extends MultiPassRenderer
{
    /**
     * @inheritdoc
     */
    protected function prepareRenderParams(SVGRasterizer $rasterizer, array $options)
    {
        return array(
            'cx'        => self::prepareLengthX($options['cx'], $rasterizer) + $rasterizer->getOffsetX(),
            'cy'        => self::prepareLengthY($options['cy'], $rasterizer) + $rasterizer->getOffsetY(),
            'width'     => self::prepareLengthX($options['rx'], $rasterizer) * 2,
            'height'    => self::prepareLengthY($options['ry'], $rasterizer) * 2,
        );
    }

    /**
     * @inheritdoc
     */
    protected function renderFill($image, array $params, $color)
    {
        imagefilledellipse($image, $params['cx'], $params['cy'], $params['width'], $params['height'], $color);
    }

    /**
     * @inheritdoc
     */
    protected function renderStroke($image, array $params, $color, $strokeWidth)
    {
        imagesetthickness($image, $strokeWidth);

        $width = $params['width'];
        if ($width % 2 === 0) {
            $width += 1;
        }
        $height = $params['height'];
        if ($height % 2 === 0) {
            $height += 1;
        }

        // imageellipse ignores imagesetthickness; draw arc instead
        imagearc($image, $params['cx'], $params['cy'], $width, $height, 0, 360, $color);
    }
}

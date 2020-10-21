<?php

namespace Leuverink\BladeShapeDivider;

use Illuminate\View\Component;

class ShapeDivider extends Component
{
    public string $shape;

    public string $fill;
    public bool $flip;
    public bool $invert;
    public string $position;
    public string $height;
    public string $width;

    public function __construct(
        string $shape,
        string $fill = 'currentColor',
        bool $flip = false,
        bool $invert = false,
        string $position = 'top',
        string $height = '150px',
        string $width = '100%'
    ) {
        $this->shape = $shape;
        $this->fill = $fill;
        $this->flip = $flip;
        $this->invert = $invert;
        $this->position = $position;
        $this->height = $height;
        $this->width = $width;
    }

    public function render()
    {
        return view('shape-divider::component');
    }
}

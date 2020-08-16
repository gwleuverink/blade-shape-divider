<div style="
    position: absolute; top: 0; left: 0; width: 100%; overflow: hidden; line-height: 0;
    {{ $invert && $position === 'top' ? 'transform: rotate(180deg);' : null }}
    {{ !$invert && $position === 'bottom' ? 'transform: rotate(180deg);' : null }}
    {{ $position === 'bottom' ? 'bottom: 0;' : 'top: 0;' }}"
    {{ $attributes->get('class')}} >
    <svg style="
            position: relative; display: block;
            {{ $flip ? 'transform: rotateY(180deg);' : null }}
            {{ "width: calc($width + 1.3px);" }}
            {{ "height: $height;" }}
        "
        fill="{{ $fill }}"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" >

        @yield('svg-content')

    </svg>
</div>

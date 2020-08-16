<div style="position: absolute; top: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; top: 0; opacity: .4;">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(158% + 1.3px); height: 130px;" fill="#F55523">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"></path>
    </svg>
</div>
<br /><br/><br />

# Blade shape divider

[![Latest Version on Packagist](https://img.shields.io/packagist/v/leuverink/blade-shape-divider.svg?style=flat-square)](https://packagist.org/packages/leuverink/blade-shape-divider)
[![Total Downloads](https://img.shields.io/packagist/dt/leuverink/blade-shape-divider.svg?style=flat-square)](https://packagist.org/packages/leuverink/blade-shape-divider)

A port of [shapedivider.app](shapedivider.app) for Laravel Blade

## Installation
Laravel 7.0 or higher is required.
You can install the package via composer:

``` bash
composer require leuverink/blade-shape-divider
```

## Usage

``` html
<x-shape-divider shape="waves" />
```
*Just like the original, this component needs to be in a container with `position: relative` in order to work properly.*

### Customization
You may use any of these divider shapes:

`waves`, `waves-opacity`, `curve`, `curve-asymmetrical`, `triangle`, `triangle-asymmetrical`, `tilt`, `arrow`, `split` & `book`

Head over to [shapedivider.app](shapedivider.app) and create a shape you like. Settings can be passed as props. When you're happy with the shape divider you created, simply copy over it's settings like the example below.

``` html
<x-shape-divider
    shape="waves-opacity"
    fill="#EEE"
    :flip="true"
    :invert="true"
    position="bottom"
    height="200px"
    width="150%"
/>
```

### Changing divider color
You may pass any valid color code as the `fill` prop. By default the fill is set to `currentColor`, which means the divider inherits the current font color by default. If you want to use a css class to provide the fill color you may do so:

``` html
<!-- Use the text color text-blue-600 to fill the divider -->
<x-shape-divider shape="waves" class="text-blue-600" />

<!-- Setting the fill color overrides the text color inheritance -->
<x-shape-divider shape="waves" fill="#3182CE" />
```

### Prop defaults
Component props have the following defaults. If your shape uses any of the defaults they don't have to be passed as props.
| name | type | default | available options | example value |
|---|---|---|---|---|
| shape | string | `null` (required) | waves, waves-opacity, curve, curve-asymmetrical, triangle, triangle-asymmetrical, tilt, arrow, split & book | `"shape='waves"` |
| fill | `string` | `currentColor` | Accepts any valid color code. Inherits font color by default | `fill="rgba(255, 138, 0, 0.7)"` |
| flip | boolean | `false` | `true|false` | `:flip="true"` |
| invert | boolean | `false` | `true|false` | `:invert="true"` |
| position | string | `top` | `top|bottom` | `position="bottom"` |
| height | string | `150px` | - | `height="200px"` |
| width | string | `100%` | - | `width="260%"` |

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

This port should be pretty much complete. Any new features not available in the original [shapedivider.app](shapedivider.app) fall outside the scope of this project and will not be merged.
Improvements to the API will be considered.
Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email willem@leuver.ink instead of using the issue tracker.

## Credits
- [True Style Design (creators of shapedivider.app)](https://truestyledesign.co.uk)
- [Willem Leuverink](https://github.com/gwleuverink)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

<?php

/**
 * Plugin Name: Wilson Language Custom Elements
 * Plugin URI: https://creens.com/
 * Description: Custom elements created for Wilson Language Training.
 * Author: creens
 * Author URI: https://creens.com/
 * License: GPLv2
 * Text Domain: breakdance
 * Domain Path: /languages/
 * Version: 1.0.0
 */

namespace WilsonLanguageCustomElements;

use function Breakdance\Util\getDirectoryPathRelativeToPluginFolder;

add_action('breakdance_loaded', function () {
    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/elements',
        'WilsonLanguageCustomElements',
        'element',
        'Wilson Custom Elements',
        false
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/macros',
        'WilsonLanguageCustomElements',
        'macro',
        'Wilson Custom Macros',
        false,
    );

    \Breakdance\ElementStudio\registerSaveLocation(
        getDirectoryPathRelativeToPluginFolder(__DIR__) . '/presets',
        'WilsonLanguageCustomElements',
        'preset',
        'Wilson Custom Presets',
        false,
    );
},
    // register elements before loading them
    9
);

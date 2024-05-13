<?php

namespace WilsonLanguageCustomElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "WilsonLanguageCustomElements\\HeroBlock",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class HeroBlock extends \Breakdance\Elements\Element
{
    static function uiIcon()
    {
        return 'SquareIcon';
    }

    static function tag()
    {
        return 'div';
    }

    static function tagOptions()
    {
        return [];
    }

    static function tagControlPath()
    {
        return false;
    }

    static function name()
    {
        return 'Hero Block';
    }

    static function className()
    {
        return 'autogenerated-wlce-heroblock';
    }

    static function category()
    {
        return 'other';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return get_class();
    }

    static function template()
    {
        return file_get_contents(__DIR__ . '/html.twig');
    }

    static function defaultCss()
    {
        return file_get_contents(__DIR__ . '/default.css');
    }

    static function defaultProperties()
    {
        return false;
    }

    static function defaultChildren()
    {
        return false;
    }

    static function cssTemplate()
    {
        $template = file_get_contents(__DIR__ . '/css.twig');
        return $template;
    }

    static function designControls()
    {
        return [c(
        "background",
        "Background",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => ['0' => ['value' => 'blue', 'text' => 'Blue'], '1' => ['text' => 'Gold', 'value' => 'gold'], '2' => ['text' => 'Teal', 'value' => 'teal']]],
        false,
        false,
        [],
      )],
        ['type' => 'section'],
        false,
        false,
        [],
      )];
    }

    static function contentControls()
    {
        return [c(
        "hero_text",
        "Hero Text",
        [c(
        "headline",
        "Headline",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "subhead",
        "Subhead",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "body_copy",
        "Body Copy",
        [],
        ['type' => 'richtext', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "hero_media",
        "Hero Media",
        [c(
        "media_type",
        "Media Type",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => ['0' => ['value' => 'image', 'text' => 'Image'], '1' => ['text' => 'Video', 'value' => 'video']]],
        false,
        false,
        [],
      ), c(
        "image",
        "Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'condition' => ['0' => ['0' => ['path' => 'content.hero_media.media_type', 'operand' => 'equals', 'value' => 'image']]]],
        false,
        false,
        [],
      ), c(
        "video",
        "Video",
        [],
        ['type' => 'video', 'layout' => 'vertical', 'condition' => ['0' => ['0' => ['path' => 'content.hero_media.media_type', 'operand' => 'equals', 'value' => 'video']]]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      )];
    }

    static function settingsControls()
    {
        return [];
    }

    static function dependencies()
    {
        return false;
    }

    static function settings()
    {
        return false;
    }

    static function addPanelRules()
    {
        return false;
    }

    static public function actions()
    {
        return false;
    }

    static function nestingRule()
    {
        return ["type" => "final",   ];
    }

    static function spacingBars()
    {
        return false;
    }

    static function attributes()
    {
        return false;
    }

    static function experimental()
    {
        return false;
    }

    static function order()
    {
        return 0;
    }

    static function dynamicPropertyPaths()
    {
        return ['0' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string'], '1' => ['path' => 'settings.advanced.attributes[].value', 'accepts' => 'string']];
    }

    static function additionalClasses()
    {
        return false;
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return false;
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}
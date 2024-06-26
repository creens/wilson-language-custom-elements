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
        return 'blocks';
    }

    static function badge()
    {
        return false;
    }

    static function slug()
    {
        return __CLASS__;
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
        "media",
        "Media",
        [c(
        "media_type",
        "Media Type",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => [['value' => 'image', 'text' => 'Image'], ['text' => 'Video', 'value' => 'video']]],
        false,
        false,
        [],
      ), c(
        "image",
        "Image",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'condition' => [[['path' => 'design.media.media_type', 'operand' => 'equals', 'value' => 'image']]]],
        false,
        false,
        [],
      ), c(
        "shape",
        "Shape",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['value' => 'circle', 'text' => 'Circle'], ['text' => 'Rectangle', 'value' => 'rectangle']], 'condition' => [[['path' => 'design.media.media_type', 'operand' => 'equals', 'value' => 'image']]]],
        false,
        false,
        [],
      ), c(
        "video",
        "Video",
        [],
        ['type' => 'video', 'layout' => 'vertical', 'videoOptions' => ['providers' => ['youtube', 'vimeo', 'dailymotion']], 'condition' => [[['path' => 'design.media.media_type', 'operand' => 'equals', 'value' => 'video']]]],
        false,
        false,
        [],
      ), c(
        "remove_control_bar_",
        "Remove control bar?",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'condition' => [[['path' => 'design.media.media_type', 'operand' => 'equals', 'value' => 'video']]]],
        false,
        false,
        [],
      ), c(
        "alignment",
        "Alignment",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['value' => 'media-left', 'text' => 'Left'], ['text' => 'Right', 'value' => 'media-right']]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "spacing",
        "Spacing",
        [c(
        "padding_top",
        "Padding Top",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "padding_bottom",
        "Padding Bottom",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
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
        "theme_color",
        "Theme Color",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => [['value' => 'blue', 'text' => 'Wilson Blue'], ['text' => 'Implementation Teal', 'value' => 'teal'], ['text' => 'Fun Gold', 'value' => 'gold']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default']],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "eyebrow",
        "Eyebrow",
        [c(
        "eyebrow",
        "Eyebrow",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "headline_s_",
        "Headline(s)",
        [c(
        "headline",
        "Headline",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "headline_tags",
        "Headline Tags",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'h1', 'value' => 'h1'], ['text' => 'h2', 'value' => 'h2'], ['text' => 'h3', 'value' => 'h3'], ['text' => 'h4', 'value' => 'h4'], ['text' => 'h5', 'value' => 'h5'], ['text' => 'h6', 'value' => 'h6']], 'condition' => [[['path' => 'content.headline_s_.headline', 'operand' => 'is set', 'value' => '']]]],
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
        "subhead_tags",
        "Subhead Tags",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'h1', 'value' => 'h1'], ['text' => 'h2', 'value' => 'h2'], ['text' => 'h3', 'value' => 'h3'], ['text' => 'h4', 'value' => 'h4'], ['text' => 'h5', 'value' => 'h5'], ['text' => 'h6', 'value' => 'h6']], 'condition' => [[['path' => 'content.headline_s_.subhead', 'operand' => 'is set', 'value' => '']]]],
        false,
        false,
        [],
      ), c(
        "add_a_link_",
        "Add a link?",
        [],
        ['type' => 'toggle', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "link",
        "Link",
        [],
        ['type' => 'link', 'layout' => 'vertical', 'condition' => [[['path' => 'content.headline_s_.add_a_link_', 'operand' => 'is set', 'value' => '']]]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "body_copy",
        "Body Copy",
        [c(
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
        "button_s_",
        "Button(s)",
        [c(
        "quantity",
        "Quantity",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => [['value' => 'one', 'text' => 'One'], ['text' => 'Two', 'value' => 'two']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default']],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\AtomV1ButtonContent",
      "Button 1",
      "button_1",
       ['condition' => [[['path' => 'content.button_s_.quantity', 'operand' => 'equals', 'value' => 'one']], [['path' => 'content.button_s_.quantity', 'operand' => 'equals', 'value' => 'two']]], 'type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\AtomV1ButtonContent",
      "Button 2",
      "button_2",
       ['condition' => [[['path' => 'content.button_s_.quantity', 'operand' => 'equals', 'value' => 'two']]], 'type' => 'popout']
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
        return [['accepts' => 'string', 'path' => 'content.content.text'], ['accepts' => 'string', 'path' => 'content.content.link.url'], ['accepts' => 'string', 'path' => 'content.button_s_.button_2.text'], ['accepts' => 'string', 'path' => 'content.button_s_.button_2.link.url'], ['accepts' => 'string', 'path' => 'content.headline_s_.subhead']];
    }

    static function additionalClasses()
    {
        return [['name' => 'with-media', 'template' => '{% if design.media is defined and design.media.media_type in [\'image\', \'video\'] %}
  with-media
{% endif %}
'], ['name' => 'with-video', 'template' => '{% if design.media is defined and design.media.media_type in [\'video\'] %}
  with-video
{% endif %}'], ['name' => 'image-rectangle', 'template' => '{% if design.media is defined and (design.media.shape == \'rectangle\') %}
  image-rectangle
{% endif %}']];
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

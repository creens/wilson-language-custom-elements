<?php

namespace WilsonLanguageCustomElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "WilsonLanguageCustomElements\\ContentBlock",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class ContentBlock extends \Breakdance\Elements\Element
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
        return 'Content Block';
    }

    static function className()
    {
        return 'autogenerated-wlce-contentblock';
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
        "alignment",
        "Alignment",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['value' => 'media-left', 'text' => 'Left'], ['text' => 'Right', 'value' => 'media-right']]],
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
        "zoom",
        "Zoom",
        [],
        ['type' => 'unit', 'layout' => 'inline', 'unitOptions' => ['defaultType' => '%', 'types' => ['%']], 'rangeOptions' => ['min' => 0, 'max' => 100, 'step' => 1], 'condition' => [[['path' => 'design.media.media_type', 'operand' => 'equals', 'value' => 'image']]]],
        false,
        true,
        [],
      ), c(
        "focus_point",
        "Focus Point",
        [],
        ['type' => 'focus_point', 'layout' => 'vertical', 'focusPointOptions' => ['imagePropertyPath' => 'content.content.image'], 'condition' => [[['path' => 'design.media.media_type', 'operand' => 'equals', 'value' => 'image'], ['path' => 'design.media.zoom', 'operand' => 'is set', 'value' => '']]]],
        false,
        true,
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
        "round_corners",
        "Round Corners",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['text' => 'Top', 'value' => 'round-top'], ['text' => 'Bottom', 'value' => 'round-bottom'], ['text' => 'Both', 'value' => 'round-both']], 'condition' => [[['path' => 'design.media.media_type', 'operand' => 'equals', 'value' => 'video']]]],
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
        "margin_top",
        "Margin Top",
        [],
        ['type' => 'unit', 'layout' => 'inline'],
        true,
        false,
        [],
      ), c(
        "margin_bottom",
        "Margin Bottom",
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
      ), c(
        "overlap",
        "Overlap",
        [c(
        "overlap_section_below_",
        "Overlap section below?",
        [],
        ['type' => 'toggle', 'layout' => 'inline', 'items' => [['text' => 'Above', 'value' => 'wlt-above'], ['text' => 'Below', 'value' => 'wlt-below'], ['text' => 'Both', 'value' => 'wlt-both']]],
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
        "eyebrow",
        "Eyebrow",
        [c(
        "eyebrow_header_color",
        "Eyebrow Header Color",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => [['value' => 'blue', 'text' => 'Blue'], ['text' => 'Gold', 'value' => 'gold'], ['text' => 'Teal', 'value' => 'teal']]],
        false,
        false,
        [],
      ), c(
        "eyebrow_header_text",
        "Eyebrow Header text",
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
        "headline",
        "Headline",
        [c(
        "headline",
        "Headline",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "tags",
        "Tags",
        [],
        ['type' => 'dropdown', 'layout' => 'inline', 'items' => [['text' => 'h1', 'value' => 'h1'], ['text' => 'h2', 'value' => 'h2'], ['text' => 'h3', 'value' => 'h3'], ['text' => 'h4', 'value' => 'h4'], ['text' => 'h5', 'value' => 'h5'], ['text' => 'h6', 'value' => 'h6']]],
        false,
        false,
        [],
      ), c(
        "include_icon_",
        "Include icon?",
        [],
        ['type' => 'toggle', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "icon",
        "Icon",
        [],
        ['type' => 'wpmedia', 'layout' => 'vertical', 'condition' => [[['path' => 'content.headline.include_icon_', 'operand' => 'is set', 'value' => '']]]],
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
        "text",
        "Text",
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
        "type",
        "Type",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => [['value' => 'pill', 'text' => 'Pill'], ['text' => 'Simple Text', 'value' => 'simple-text']]],
        false,
        false,
        [],
      ), c(
        "links",
        "Links",
        [getPresetSection(
      "EssentialElements\\AtomV1ButtonContent",
      "Link",
      "link",
       ['type' => 'popout']
     )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '', 'defaultTitle' => '', 'buttonName' => 'Add Link'], 'condition' => [[['path' => 'content.button_s_.type', 'operand' => 'equals', 'value' => 'simple-text']]]],
        false,
        false,
        [],
      ), c(
        "quantity",
        "Quantity",
        [],
        ['type' => 'button_bar', 'layout' => 'vertical', 'items' => [['value' => 'one', 'text' => 'One'], ['text' => 'Two', 'value' => 'two']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default'], 'condition' => [[['path' => 'content.button_s_.type', 'operand' => 'equals', 'value' => 'pill']]]],
        false,
        false,
        [],
      ), getPresetSection(
      "EssentialElements\\AtomV1ButtonContent",
      "Button 1",
      "button_1",
       ['condition' => [[['path' => 'content.button_s_.type', 'operand' => 'equals', 'value' => 'pill'], ['path' => 'content.button_s_.quantity', 'operand' => 'equals', 'value' => 'one']], [['path' => 'content.button_s_.quantity', 'operand' => 'equals', 'value' => 'two']]], 'type' => 'popout']
     ), getPresetSection(
      "EssentialElements\\AtomV1ButtonContent",
      "Button 2",
      "button_2",
       ['condition' => [[['path' => 'content.button_s_.quantity', 'operand' => 'equals', 'value' => 'two'], ['path' => 'content.button_s_.type', 'operand' => 'equals', 'value' => 'pill']]], 'type' => 'popout']
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
        return [['accepts' => 'string', 'path' => 'content.button_s_.button_3.text'], ['accepts' => 'string', 'path' => 'content.button_s_.button_3.link.url'], ['accepts' => 'string', 'path' => 'content.button_s_.button_2.text'], ['accepts' => 'string', 'path' => 'content.button_s_.button_2.link.url'], ['accepts' => 'string', 'path' => 'content.button_s_.button_1.text'], ['accepts' => 'string', 'path' => 'content.button_s_.button_1.link.url'], ['accepts' => 'string', 'path' => 'content.button_s_.links.link.text'], ['accepts' => 'string', 'path' => 'content.button_s_.links.link.link.url']];
    }

    static function additionalClasses()
    {
        return [['name' => 'with-media', 'template' => '{% if design.media is defined and design.media.media_type in [\'image\', \'video\'] %}
  with-media
{% endif %}
'], ['name' => 'with-video', 'template' => '{% if design.media is defined and design.media.media_type in [\'video\'] %}
  with-video
{% endif %}
']];
    }

    static function projectManagement()
    {
        return false;
    }

    static function propertyPathsToWhitelistInFlatProps()
    {
        return ['content.button_s_.links.button.custom.size.full_width_at', 'content.button_s_.links.button.styles'];
    }

    static function propertyPathsToSsrElementWhenValueChanges()
    {
        return false;
    }
}

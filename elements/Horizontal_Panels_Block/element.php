<?php

namespace WilsonLanguageCustomElements;

use function Breakdance\Elements\c;
use function Breakdance\Elements\PresetSections\getPresetSection;


\Breakdance\ElementStudio\registerElementForEditing(
    "WilsonLanguageCustomElements\\HorizontalPanelsBlock",
    \Breakdance\Util\getdirectoryPathRelativeToPluginFolder(__DIR__)
);

class HorizontalPanelsBlock extends \Breakdance\Elements\Element
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
        return 'Horizontal Panels Block';
    }

    static function className()
    {
        return 'autogenerated-wlce-horizontalpanelsblock';
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
        "design",
        "Design",
        [c(
        "alignment",
        "Alignment",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['value' => 'panels-left', 'text' => 'Panels Left'], ['text' => 'Panels Right', 'value' => 'panels-right']]],
        false,
        false,
        [],
      ), c(
        "round_corners",
        "Round Corners",
        [],
        ['type' => 'button_bar', 'layout' => 'inline', 'items' => [['text' => 'Top', 'value' => 'round-top'], ['text' => 'Bottom', 'value' => 'round-bottom'], ['text' => 'Both', 'value' => 'round-both']]],
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
        "horizontal_panels",
        "Horizontal Panels",
        [c(
        "panels",
        "Panels",
        [c(
        "color",
        "Color",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => [['value' => 'wilson-blue', 'text' => 'Wilson Blue'], ['text' => 'Implementation Teal', 'value' => 'implementation-teal'], ['text' => 'Fun Gold', 'value' => 'fun-gold'], ['text' => 'Fundations Salmon', 'value' => 'fundations-salmon'], ['text' => 'Fundations Purple', 'value' => 'fundations-purple'], ['text' => 'Fundations Blue', 'value' => 'fundations-blue'], ['text' => 'Fundations Teal', 'value' => 'fundations-teal']], 'buttonBarOptions' => ['size' => 'small', 'layout' => 'default']],
        false,
        false,
        [],
      ), c(
        "graphic",
        "Graphic",
        [],
        ['type' => 'dropdown', 'layout' => 'vertical', 'items' => [['value' => 'abc-paper', 'text' => 'ABC Paper'], ['text' => 'Open Book', 'value' => 'open-book'], ['text' => 'Bundles', 'value' => 'bundles'], ['text' => 'Digital', 'value' => 'digital'], ['text' => 'Graded Paper', 'value' => 'graded-paper'], ['text' => 'Interactive', 'value' => 'interactive'], ['text' => 'Tiers of Instruction', 'value' => 'tiers'], ['text' => 'Fundations', 'value' => 'fundations']]],
        false,
        false,
        [],
      ), c(
        "title",
        "Title",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "description",
        "Description",
        [],
        ['type' => 'text', 'layout' => 'vertical', 'textOptions' => ['multiline' => true]],
        false,
        false,
        [],
      ), c(
        "link",
        "Link",
        [],
        ['type' => 'link', 'layout' => 'vertical'],
        false,
        false,
        [],
      )],
        ['type' => 'repeater', 'layout' => 'vertical', 'repeaterOptions' => ['titleTemplate' => '', 'defaultTitle' => '', 'buttonName' => 'Add Panel', 'galleryMode' => false]],
        false,
        false,
        [],
      )],
        ['type' => 'section', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "content_area",
        "Content Area",
        [c(
        "eyebrow_header_text",
        "Eyebrow Header text",
        [],
        ['type' => 'text', 'layout' => 'vertical'],
        false,
        false,
        [],
      ), c(
        "headline",
        "Headline",
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
        return ['0' =>  ['inlineScripts' => ['function t(e, t) {
  let n = document.getElementById(e);
  if (!n) {
    console.warn("Target element not found for ID:", e);
    return;
  }

  if (isBuilder()) {
    // Skip fetching and replacing in builder
    return;
  }

  fetch(t)
    .then((e) => e.text())
    .then((t) => (n.outerHTML = t))
    .catch((e) => console.error("Error fetching SVG:", e));
}

// Assuming you have a function to detect the builder environment (replace with your actual implementation)
function isBuilder() {
  // Replace this with the actual logic to check if it\'s the builder environment
  return window.location.href.includes("?breakdance=builder"); // Hypothetical check for URL containing "builder"
}

let n = document.querySelectorAll(".wlt-horiz-panel");
for (let l of n) {
  let o = l.querySelector(".icon");
  if (o) {
    let r = l.querySelector(\'.icon\').classList[1],
      a = o.id;
    a && t(a, "https://wilsonlanguage.local/wp-content/uploads/2024/05/icon-" + r + ".svg");
  }
}','const bounceAnimation = (element) => {
  element.classList.add(\'bounce\');
};

const sections = document.querySelectorAll(\'.wlt-horiz-panel\');
const delay = 500; // Adjust delay in milliseconds
const rootMargin = \'100px 0px\'; // Margin for top and bottom observation

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      if (entry.target === sections[sections.length - 1]) {
        // The last section is in the viewport
        sections.forEach((section, index) => {
          const iconBkgd = section.querySelector(\'.icon-bkgd\');
          setTimeout(() => {
            bounceAnimation(iconBkgd);
          }, index * delay); // Apply delay based on element index
        });
      }
    } else {
      // Element no longer intersecting, reset animation
      const iconBkgd = entry.target.querySelector(\'.icon-bkgd\');
      iconBkgd.classList.remove(\'bounce\');
    }
  });
}, {
  threshold: 0.65, // Observe when 65% of element is visible
  rootMargin, // Observe with margin for scrolling past
});

sections.forEach(section => observer.observe(section));
'],'title' => 'Icons & Animation',],];
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
        return [];
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

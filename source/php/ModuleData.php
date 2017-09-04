<?php

namespace ModularitySections;

class ModuleData
{

    public $module;
    public $data = array();
    public $imageSize = array(
        'mod-section-split' => array(650, 365),
        'mod-section-full' => array(1300, 731),
        'mod-section-featured' => array(1300, 731),
    );

    public function __construct($module)
    {
        if (!is_subclass_of($module, "Modularity\Module")) {
            wp_die("Could not implement class as module" . get_parent_class($module));
        }

        $this->module = $module;

        //Create data structure
        $data = array('classes' => array());

        //Get data
        $this->data = $this->init($this->data);

        //Format data
        $this->data = $this->createEffectProperties($this->data);
        $this->data = $this->createLayoutProperties($this->data);
        $this->data = $this->createBackgroundProperties($this->data);
        $this->data = $this->createTextLayoutProperties($this->data);
        $this->data = $this->createImageProperties($this->data);
        $this->data = $this->renderShortCodes($this->data);

        //Add animation class
        $this->data['classes']['animate'] = "animate";
    }

    /**
     * Init data
     * @return array
     */
    public function init($data) : array
    {
        //Mapping table
        $metaMapper = array(
            'mod_section_content' => 'content',

            'mod_section_justify_text' => 'justifyText',
            'mod_section_fontsize' => 'fontSize',
            'mod_section_fontcolor' => 'fontColor',

            'mod_section_image' => 'foregroundImage',
            'mod_section_image_frame' => 'foregroundImageFrame',
            'mod_section_image_frame_width' => 'foregroundImageFrameWidth',
            'mod_section_image_frame_color' => 'foregroundImageFrameColor',

            'mod_section_height' => 'height',
            'mod_section_padding' => 'padding',

            'mod_section_image_position' => 'imagePosition',
            'mod_section_content_position' => 'contentPosition',
            'mod_section_columns' => 'numberOfColumns',

            'mod_section_bg_position_vertical' => 'backgroundVertical',
            'mod_section_bg_position_horizontal' => 'backgroundHorizontal',

            'mod_section_effect_parallax' => 'effectParallax',
            'mod_section_effect_blur' => 'effectBlur',
            'mod_section_effect_inset' => 'effectInsetShadow',

            'mod_section_effect_overlay' => 'effectOverlay',
            'mod_section_effect_overlay_opacity' => 'effectOverlayOpcaity',
            'mod_section_effect_overlay_color' => 'effectOverlayColor',

            'mod_section_background_image' => 'backgroundImage',
            'mod_section_background_color' => 'backgroundColor',

            'mod_section_submodules' => 'submodules',
        );

        //Id
        $data['sectionID'] = sanitize_title($this->module->post_title);

        //Get meta fields & remap
        foreach ($metaMapper as $meta => $variable) {
            $data[$variable] = get_field($meta, $this->module->ID, true);
        }

        return $data;
    }

    /**
     * Create foreground image classes
     * @return array
     */
    public function createImageProperties($data) : array
    {
        //Add parallax effect
        if ($data['foregroundImage'] && $data['foregroundImageFrame']) {
            $data['classes']['section-foreground-frame-width'] = "image-frame-width-" . $data['foregroundImageFrameWidth'];
        }

        return $data;
    }

    /**
     * Create effect classes
     * @return array
     */
    public function createEffectProperties($data) : array
    {
        //Add parallax effect
        if ($data['effectParallax']) {
            $data['classes']['section-parallax'] = "effect-parallax";
        }

        //Add overlay effect
        if ($data['effectOverlay']) {
            $data['classes']['section-overlay'] = "effect-overlay";
            $data['classes']['section-overlay-opacity'] = "effect-overlay-opacity-" . $data['effectOverlayOpcaity'];
        }

        //Add blur effect
        if ($data['effectBlur']) {
            $data['classes']['section-blur'] = "effect-blur";
        }

        //Add inset shadow effect
        if ($data['effectInsetShadow']) {
            $data['classes']['section-shadow'] = "effect-inner-shadow";
        }

        return $data;
    }

    /**
     * Create layout classes
     * @return array
     */
    public function createLayoutProperties($data) : array
    {

        //Create section size
        $data['classes']['section-height'] = "section-" . $data['height'];

        //Create section padding class
        $data['classes']['section-padding'] = "padding-" . $data['padding'];

        //Create section disposition class
        $data['classes']['section-image'] = "image-" . $data['imagePosition'];

        //Create section vertical-position class
        $data['classes']['section-content'] = "text-" . $data['contentPosition'];

        return $data;
    }

    /**
     * Create background classes
     * @return array
     */
    public function createBackgroundProperties($data) : array
    {

        //Create background position
        $data['backgroundHorizontal'] = empty($data['backgroundHorizontal']) ? "center" : $data['backgroundHorizontal'];
        $data['backgroundVertical'] = empty($data['backgroundVertical']) ? "center" : $data['backgroundVertical'];

        $data['classes']['image-focus'] = "image-focus-". $data['backgroundHorizontal'] . "-" . $data['backgroundVertical'];

        //Get background image
        if (is_numeric($data['backgroundImage'])) {
            $data['backgroundImage'] = wp_get_attachment_image_src($data['backgroundImage'], $this->calculateBackgroundSize($this->module, $data), false);
            $data['backgroundImage'] = $data['backgroundImage'][0];
        }

        return $data;
    }

    /**
     * Create text classes
     * @return array
     */
    public function createTextLayoutProperties($data) : array
    {
        //Add justify text
        if ($data['justifyText']) {
            $data['classes']['section-justify'] = "justify-text";
        }

        //Add font size
        $data['classes']['section-fontsize'] = "fontsize-" . $data['fontSize'];

        //Create section text columns
        $data['classes']['section-columns'] = !empty($data['numberOfColumns']) ? "columnize-" .$data['numberOfColumns'] : "";

        //Add font color
        $data['classes']['section-text-color'] = $data['fontColor'];


        return $data;
    }

    /**
     * Render shortcodes
     * @return array
     */
    public function renderShortCodes($data) : array
    {

        //Run shortcodes
        $data['submoduleRendered'] = "";
        if (is_array($data['submodules']) && !empty($data['submodules'])) {
            foreach ($data['submodules'] as $submodule) {
                $data['submoduleRendered'] .= do_shortcode('[modularity id="' . $submodule . '"]');
            }
        }

        return $data;
    }

    /**
     * Calulate the size of the background image
     * @return array
     */
    public function calculateBackgroundSize($module, $data) : array
    {
        $imageSize = $this->imageSize[$this->module->post_type];

        //Make image "tall"
        if ($this->module->post_type == "mod-section-split" && ($data['height'] == "lg"||strlen($data['content']) > 1000)) {
            $imageSize[1] = $imageSize[1]*2;
        }

        //Make image "wide" on small section sizes
        if (in_array($this->module->post_type, array('mod-section-full', 'mod-section-featured')) && $data['height'] == "sm" && !$data['effectParallax']) {
            $imageSize[1] = $imageSize[1]/2;
        }

        //Normalize
        if (is_array($imageSize) && !empty($imageSize)) {
            foreach ($imageSize as $key => $value) {
                $imageSize[$key] = floor($value);
            }
        }

        return $imageSize;
    }
}

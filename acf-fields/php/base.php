<?php 



    'key' => 'group_599eaa60c0e79',
    'title' => __('Section base fields', 'modularity-form-builder'),
    'fields' => array(
        0 => array(
            'key' => 'field_599eaa6a6c354',
            'label' => __('Content', 'modularity-form-builder'),
            'name' => 'mod_section_content',
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'tabs' => 'all',
            'toolbar' => 'full',
            'media_upload' => 1,
            'delay' => 0,
        ),
        1 => array(
            'key' => 'field_599eab01559ea',
            'label' => __('Section Height', 'modularity-form-builder'),
            'name' => 'mod_section_height',
            'type' => 'radio',
            'instructions' => __('Select the amount of space that the section should take up vertically', 'modularity-form-builder'),
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'sm' => __('Small (Adapt to content)', 'modularity-form-builder'),
                'md' => __('Medium (Minimum 40 % height)', 'modularity-form-builder'),
                'lg' => __('Large (Minimum 100% height)', 'modularity-form-builder'),
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => '',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        2 => array(
            'key' => 'field_599eabaeaad08',
            'label' => __('Background focus (vertical)', 'modularity-form-builder'),
            'name' => 'mod_section_bg_position_vertical',
            'type' => 'radio',
            'instructions' => __('If the image has to be cropped to fit the view, where is the background focal point vertically?', 'modularity-form-builder'),
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'top' => __('Top', 'modularity-form-builder'),
                'center' => __('Middle', 'modularity-form-builder'),
                'bottom' => __('Bottom', 'modularity-form-builder'),
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => 'center',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        3 => array(
            'key' => 'field_599eac93ead36',
            'label' => __('Background focus (horizontal)', 'modularity-form-builder'),
            'name' => 'mod_section_bg_position_horizontal',
            'type' => 'radio',
            'instructions' => __('If the image has to be cropped to fit the view, where is the background focal point horizontally?', 'modularity-form-builder'),
            'required' => 1,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'left' => __('Left', 'modularity-form-builder'),
                'center' => __('Center', 'modularity-form-builder'),
                'bottom' => __('Right', 'modularity-form-builder'),
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => 'center',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        4 => array(
            'key' => 'field_599eaf20c6db6',
            'label' => __('Parallax effect', 'modularity-form-builder'),
            'name' => 'mod_section_effect_parallax',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => __('Yes, use parallax to create some depth with a fixed background in the section. This option creates a illusion that indicates that the content floats on-top of the background.', 'modularity-form-builder'),
            'default_value' => 0,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        5 => array(
            'key' => 'field_599ed4d2dc77b',
            'label' => __('Multiply effect', 'modularity-form-builder'),
            'name' => 'mod_section_effect_multiply',
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'message' => __('Yes, blend the background image with the background color to make the background image more coherence to your overall profile.', 'modularity-form-builder'),
            'default_value' => 1,
            'ui' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
        ),
        6 => array(
            'key' => 'field_599ec93c4b4b7',
            'label' => __('Image position', 'modularity-form-builder'),
            'name' => 'mod_section_image_position',
            'type' => 'radio',
            'instructions' => __('Select on what side of the screen that the image should be placed.', 'modularity-form-builder'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'left' => __('Left', 'modularity-form-builder'),
                'right' => __('Right', 'modularity-form-builder'),
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => 'left',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        7 => array(
            'key' => 'field_599ed8d854523',
            'label' => __('Background image', 'modularity-form-builder'),
            'name' => 'mod_section_background_image',
            'type' => 'image',
            'instructions' => __('Select a good background image for this section. Choose one that is large enough to cover the whole screen.', 'modularity-form-builder'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'thumbnail',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => 'png, jpg, jpeg',
        ),
        8 => array(
            'key' => 'field_599fce6fc2c2c',
            'label' => __('Background color', 'modularity-form-builder'),
            'name' => 'mod_section_background_color',
            'type' => 'color_picker',
            'instructions' => __('Select a background coolor for this section. This is important to choose eaven if you are using a background image as this will show during rendering and in combination with some effects.', 'modularity-form-builder'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '50',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
        ),
        9 => array(
            'key' => 'field_599ecb18ef407',
            'label' => __('Content position', 'modularity-form-builder'),
            'name' => 'mod_section_content_position',
            'type' => 'radio',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'top' => __('Top', 'modularity-form-builder'),
                'middle' => __('Middle', 'modularity-form-builder'),
                'bottom' => __('Bottom', 'modularity-form-builder'),
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => '',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        10 => array(
            'key' => 'field_599ecc223a4f6',
            'label' => __('Section margin', 'modularity-form-builder'),
            'name' => 'mod_section_padding',
            'type' => 'radio',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'choices' => array(
                'sm' => __('Small', 'modularity-form-builder'),
                'md' => __('Medium', 'modularity-form-builder'),
                'lg' => __('Large', 'modularity-form-builder'),
            ),
            'allow_null' => 0,
            'other_choice' => 0,
            'save_other_choice' => 0,
            'default_value' => '',
            'layout' => 'horizontal',
            'return_format' => 'value',
        ),
        11 => array(
            'key' => 'field_599edec7a0587',
            'label' => __('Submodules', 'modularity-form-builder'),
            'name' => 'mod_section_submodules',
            'type' => 'post_object',
            'instructions' => __('Select modules that you like to display below the content of this section. A limited types are compatible with this function. For now, you cannot create new ones from this UI or edit them (you have to go trough the modularity tab to the left).', 'modularity-form-builder'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'post_type' => array(
                0 => 'mod-posts',
                1 => 'mod-gallery',
                2 => 'mod-image',
                3 => 'mod-iframe',
                4 => 'mod-contacts',
            ),
            'taxonomy' => array(
            ),
            'allow_null' => 1,
            'multiple' => 1,
            'return_format' => 'id',
            'ui' => 1,
        ),
        12 => array(
            'key' => 'field_599fd58984f01',
            'label' => __('Foreground image', 'modularity-form-builder'),
            'name' => 'mod_section_image',
            'type' => 'image',
            'instructions' => __('Add an image to this section, placed in the foreground. Often svg images or transparent png images looks best.', 'modularity-form-builder'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'return_format' => 'id',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => 'png, jpg, jpeg, svg',
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
            ),
        ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => 1,
    'description' => '',
));

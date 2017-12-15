<?php 

if (function_exists('acf_add_local_field_group')) {
    acf_add_local_field_group(array(
    'key' => 'group_599fdc072e961',
    'title' => __('Full section', 'modularity-sections'),
    'fields' => array(
        0 => array(
            'key' => 'field_599fdc073244a',
            'label' => __('General', 'modularity-sections'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        1 => array(
            'key' => 'field_599fdc07324cb',
            'label' => '',
            'name' => '',
            'type' => 'clone',
            'value' => NULL,
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'clone' => array(
                0 => 'field_599eaa6a6c354',
            ),
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_label' => 0,
            'prefix_name' => 0,
        ),
        2 => array(
            'key' => 'field_59aeadad99a45',
            'label' => __('Antal textkolumner', 'modularity-sections'),
            'name' => 'tcol',
            'type' => 'group',
            'value' => NULL,
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => 'modularity-ui-header modularity-ui-highlight',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_59aeadce99a46',
                    'label' => '',
                    'name' => '',
                    'type' => 'clone',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'clone' => array(
                        0 => 'field_59a0236d0a74e',
                    ),
                    'display' => 'seamless',
                    'layout' => 'block',
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                ),
            ),
        ),
        3 => array(
            'key' => 'field_59aea095dee91',
            'label' => __('Typsnittsinställningar', 'modularity-sections'),
            'name' => 'font',
            'type' => 'group',
            'value' => NULL,
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => 'modularity-ui-header modularity-ui-highlight',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_59aea0afdee92',
                    'label' => '',
                    'name' => '',
                    'type' => 'clone',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'clone' => array(
                        0 => 'field_59a6861f61302',
                        1 => 'field_59a955123431a',
                    ),
                    'display' => 'seamless',
                    'layout' => 'block',
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                ),
            ),
        ),
        4 => array(
            'key' => 'field_5a329024319d4',
            'label' => '',
            'name' => '',
            'type' => 'clone',
            'value' => NULL,
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'clone' => array(
                0 => 'field_5a328e3688880',
            ),
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_label' => 0,
            'prefix_name' => 0,
        ),
        5 => array(
            'key' => 'field_599fdc073260a',
            'label' => __('Background', 'modularity-sections'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        6 => array(
            'key' => 'field_59ae9cbbe44bb',
            'label' => __('Grundläggande inställningar för bakgrund', 'modularity-sections'),
            'name' => 'bgimg',
            'type' => 'group',
            'value' => NULL,
            'instructions' => __('Välj en bakgrundsbild och/eller färg för den här sektionen.', 'modularity-sections'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => 'modularity-ui-header modularity-ui-highlight',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_59ae9cc9e44bc',
                    'label' => '',
                    'name' => '',
                    'type' => 'clone',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'clone' => array(
                        0 => 'field_599fce6fc2c2c',
                        1 => 'field_599ed8d854523',
                    ),
                    'display' => 'seamless',
                    'layout' => 'block',
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                ),
            ),
        ),
        7 => array(
            'key' => 'field_59ae9b8cfd57d',
            'label' => __('Bakgrundens fokuspunkt', 'modularity-sections'),
            'name' => 'bgfoc',
            'type' => 'group',
            'value' => NULL,
            'instructions' => __('Vissa delar av en bild är viktigare än andra. Ställ in en fokuspunkt i bilden som matchar en person eller objekt i förgrunden.', 'modularity-sections'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => 'modularity-ui-header modularity-ui-highlight',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_59ae9bd5fd57e',
                    'label' => '',
                    'name' => '',
                    'type' => 'clone',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'clone' => array(
                        0 => 'field_599eabaeaad08',
                        1 => 'field_599eac93ead36',
                    ),
                    'display' => 'seamless',
                    'layout' => 'block',
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                ),
            ),
        ),
        8 => array(
            'key' => 'field_59ae87b6b6aec',
            'label' => __('Effekter', 'modularity-sections'),
            'name' => 'efx',
            'type' => 'group',
            'value' => NULL,
            'instructions' => __('Du kan lägga till en eller flera effekter för den här modulen. Kombinera dem varsamt.', 'modularity-sections'),
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => 'modularity-ui-additional modularity-ui-header modularity-ui-highlight',
                'id' => '',
            ),
            'layout' => 'block',
            'sub_fields' => array(
                0 => array(
                    'key' => 'field_59ae87bfb6aed',
                    'label' => '',
                    'name' => '',
                    'type' => 'clone',
                    'value' => NULL,
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'clone' => array(
                        0 => 'field_599eaf20c6db6',
                        1 => 'field_59a00dad5a07f',
                        2 => 'field_599fed3fec804',
                        3 => 'field_599ed4d2dc77b',
                        4 => 'field_59a93c8131933',
                        5 => 'field_59a93ca631934',
                        6 => 'field_59afc2b4a0b9f',
                        7 => 'field_59afc4a5a0ba0',
                    ),
                    'display' => 'seamless',
                    'layout' => 'block',
                    'prefix_label' => 0,
                    'prefix_name' => 0,
                ),
            ),
        ),
        9 => array(
            'key' => 'field_599fdc07327d0',
            'label' => __('Margins', 'modularity-sections'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        10 => array(
            'key' => 'field_599fdc0732863',
            'label' => '',
            'name' => '',
            'type' => 'clone',
            'value' => NULL,
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'clone' => array(
                0 => 'field_599eab01559ea',
            ),
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_label' => 0,
            'prefix_name' => 0,
        ),
        11 => array(
            'key' => 'field_599fdc07329fc',
            'label' => '',
            'name' => '',
            'type' => 'clone',
            'value' => NULL,
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'clone' => array(
                0 => 'field_599ecc223a4f6',
            ),
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_label' => 0,
            'prefix_name' => 0,
        ),
        12 => array(
            'key' => 'field_599fdc0732987',
            'label' => '',
            'name' => '',
            'type' => 'clone',
            'value' => NULL,
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'clone' => array(
                0 => 'field_599ecb18ef407',
            ),
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_label' => 0,
            'prefix_name' => 0,
        ),
        13 => array(
            'key' => 'field_599fdc0732bc5',
            'label' => __('Submodules', 'modularity-sections'),
            'name' => '',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'placement' => 'top',
            'endpoint' => 0,
        ),
        14 => array(
            'key' => 'field_599fdc0732c47',
            'label' => '',
            'name' => '',
            'type' => 'clone',
            'value' => NULL,
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'clone' => array(
                0 => 'field_599edec7a0587',
            ),
            'display' => 'seamless',
            'layout' => 'block',
            'prefix_label' => 0,
            'prefix_name' => 0,
        ),
    ),
    'location' => array(
        0 => array(
            0 => array(
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'mod-section-full',
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
}
<?php
/**
 * Template part for displaying header social icons
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bizness
 */
$network_list = bizness_social_network_list();
$social_lists = get_theme_mod(
    'social_network_lists',
    [
        [
            'social_type'   => 'fa-facebook',
            'social_link'   => '#',
            'social_icon'   => '',
            'social_label'  => '',
        ],
        [
            'social_type'   => 'fa-twitter',
            'social_link'   => '#',
            'social_icon'   => '',
            'social_label'  => '',
        ],
        [
            'social_type'   => 'fa-instagram',
            'social_link'   => '#',
            'social_icon'   => '',
            'social_label'  => '',
        ]
    ]
);
if ( $social_lists ) :
    $link_target        = get_theme_mod('social_network_link_open','_self');
    $inner_wrapper_class = ['d-flex flex-wrap social-list header-social-inner social-icons'];
    ?>
    <div class="d-flex align-items-center site-header-item">
        <ul class="<?php echo esc_attr( implode( ' ', $inner_wrapper_class ) ); ?>">
            <?php foreach ( $social_lists as $index => $values ) : ?>
                <?php if (!empty($values['social_type'])) :
                    $icon_class = !empty($values['social_icon']) ? $values['social_icon'] : 'fab '.$values['social_type'];
                    $label_text = !empty($values['social_label'])
                        ? $values['social_label']
                        : (array_key_exists($values['social_type'],$network_list)
                            ? $network_list[$values['social_type']]
                            : esc_html__('Network Label','bizness')
                        );
                    $link_url               = !empty($values['social_link']) ? $values['social_link'] : '#';
                    $social_icon_class      = ['btn social-icon'];
                    $social_icon_class[]    = 'social-'.strtolower($label_text);
                    ?>
                    <li>
                        <a class="<?php echo esc_attr( implode(' ', $social_icon_class ) );?>" href="<?php echo esc_url($link_url);?>" target="<?php echo esc_attr($link_target);?>" rel="nofollow">
                            <i class="<?php echo esc_attr( $icon_class ); ?>"></i>
                        </a>
                    </li>
                <?php endif; ?>

            <?php endforeach; ?>
        </ul>
    </div>
<?php endif;

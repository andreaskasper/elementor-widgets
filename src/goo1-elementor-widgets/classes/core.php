<?php

namespace plugins\goo1\elementorwidgets;

class core {

    public static function init() {

        add_action( 'elementor/elements/categories_registered', function( $elements_manager ) {
            $elements_manager->add_category(
                'goo1eew',
                [
                    'title' => esc_html__( 'Essentials', 'plugin-name' ),
                    'icon' => 'eicon-gallery-grid',
                ]
            );
        });

        add_action( 'elementor/widgets/widgets_registered', function() {
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \plugins\goo1\elementorwidgets\elementor\widgets\Breadcrumbs() );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \plugins\goo1\elementorwidgets\elementor\widgets\Heading() );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \plugins\goo1\elementorwidgets\elementor\widgets\Jitsi() );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \plugins\goo1\elementorwidgets\elementor\widgets\Calendly() );
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \plugins\goo1\elementorwidgets\elementor\widgets\ToggleButton() );
            
          });
    }
}

<?php

namespace plugins\goo1\elementorwidgets;

class core {

    public static function init() {

        add_action( 'elementor/widgets/widgets_registered', function() {
            \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new \plugins\goo1\elementorwidgets\elementor\widgets\Jitsi() );
          });
    }
}
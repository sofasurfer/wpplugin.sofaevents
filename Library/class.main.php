<?php
namespace SofaEvents;
defined( 'ABSPATH' ) or die( 'Cheatin&#8217; uh?' );

class Main {



    private $userid = false;
    private $dirname = false;


    /**
    *  Constructor
    */
    public function __construct() {


        add_shortcode( 'sofa_events_list', [$this, 'sofa_events_list'] );

       
    }


    public function sofa_events_list($args){

        return 'List-2';
    
    }

    public function onMailError( $wp_error ) {
        error_log("MAILERROR: " . print_r($wp_error,true));
    }
}
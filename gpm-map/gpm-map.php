<?php

class GPMMapClass extends FLBuilderModule {

    public function __construct()
    {
      parent::__construct(array(
        'name'            => __( 'GPM Map Module', 'fl-builder' ),
        'description'     => __( 'A custom map plugin module', 'fl-builder' ),
        'group'           => __( 'Custom Map Group', 'fl-builder' ),
        'category'        => __( 'Custom Map Category', 'fl-builder' ),
        'dir'             => GPM_MODULES_DIR . 'gpm-map-module/',
        'url'             => GPM_MODULES_URL . 'gpm-map-module/',
        'icon'            => 'location.svg',
        'editor_export'   => true, // Defaults to true and can be omitted.
        'enabled'         => true, // Defaults to true and can be omitted.
        'partial_refresh' => true, // Defaults to false and can be omitted.
      ));
    }
  }

  FLBuilder::register_module( 'GPMMapClass', array( // Same as the class at top of page
    'content-tab'      => array(
        'title'         => __( 'Content', 'fl-builder' ),
    ),
    'style-tab'      => array(
        'title'         => __( 'Style', 'fl-builder' ),
    ),
  ) );
  
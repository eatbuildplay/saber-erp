<?php

/*
 *
 * https://www.advancedcustomfields.com/resources/acf_register_block_type/
 *
 */

namespace SaberErp;

abstract class RegisterBlockType {


  public function register() {

    acf_register_block_type(array(
      'name'              => $this->name,
      'title'             => $this->title,
      'description'       => 'A restricted content block.',
      'category'          => 'formatting',
      'mode'              => 'preview',
      'supports'          => array(
          'align' => true,
          'mode' => false,
      ),
      'render_template' => SABER_ERP_PATH . 'templates/block_billable_hours_report.php',
    ));

  }

  public function setName( $name ) {
    $this->name = $name;
  }

  public function setTitle( $title ) {
    $this->title = $title;
  }


}

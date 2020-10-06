<?php

/*
 *
 * Block for billable hours report
 *
 */

namespace SaberErp;

class BlockBillableHoursReport extends RegisterBlockType {

  public function __construct() {
    $this->setName('billable_hours_report');
    $this->setTitle('Billable Hours Report');
    $this->register();
  }

}

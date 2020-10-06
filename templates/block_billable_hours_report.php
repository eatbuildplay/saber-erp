<?php

global $post;

$endDate = get_field('end_date', $post->ID);
$period = get_field('period', $post->ID);
$billableHours = get_field('billable_hours', $post->ID);

?>

<table>
  <tr>
    <td>Period</td>
    <td><?php print $period; ?></td>
  </tr>
  <tr>
    <td>End Date</td>
    <td><?php print $endDate; ?></td>
  </tr>
  <tr>
    <td>Billable Hours</td>
    <td><?php print $billableHours; ?></td>
  </tr>
</table>

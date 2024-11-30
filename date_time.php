<h3>Date and Time</h3>

<div>Date: <?php date_default_timezone_set('Asia/Seoul'); echo date('Y-m-d H:i:s') . ' (' . date('h:i:s A') . ')'; ?></div>
<div>Time: <?php echo time(); ?></div>
<div>Timestamp: <?php echo mktime(0, 0, 0, 1, 1, 2024); ?></div>
<div>Date: <?php echo date('Y-m-d', mktime(0, 0, 0, 5, 15, 2024)); ?></div>
<div>Total Days in This Month: <?php echo date('t'); ?></div>
<div>Week Number: <?php echo date('W'); ?></div>



<?php
if($_SESSION['type'] == 'Administrator'){
?>
<a href="#" class="list-group-item">House Management</a>
<a href="#" class="list-group-item">User Management</a>
<a href="#" class="list-group-item">Report</a>

<?php
} else{ 
?>
<a href="#" class="list-group-item">House Management</a>
<?php
} 
?>
<a href="#" class="list-group-item">Configuration</a>

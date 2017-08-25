<?php
$page = isset($_GET['page'])? $_GET['page'] : 'sural';
?>
<a href="statements.php?page=sural">sural</a>
<a href="statements.php?page=killar">killar</a>
<a href="statements.php?page=sach pass">sach pass</a>


<?php
if($page =='sural')
{
?>
<div>
<h1>Sural Data</h1>
</div>

<?php } ?>


<?php if($page == 'killar'){?>
<div>
<h1>Killar Data</h1>
</div>
<?php }?>

<?php

if($page == 'sach pass')
{
?>
<div>
  <h1>beautifull valley</h1>
</div>
<?php }?>

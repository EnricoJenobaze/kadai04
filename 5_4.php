<?php

echo date('Y/m/d', time());
 
echo 'です';

?>

<?php

  $time = mktime(9);
  
  var_dump(date('Y/m/d/h時i分s秒', $time));
  
?>
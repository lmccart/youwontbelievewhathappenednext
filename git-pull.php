<?php
echo system('git reset --hard');
echo system('git checkout -- .');
echo system('git pull git://github.com/lmccart/youwontbelievewhathappensnext.git master');
?>

<?php

// Use in the “Post-Receive URLs” section of your GitHub repo.
//hellofff


if($_POST['payload']){


echo shell_exec('cd /var/www/woo && /usr/bin/git pull origin main 2>&1');

}

//boftffghhh
?>

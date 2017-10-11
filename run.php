<?php
$file = fopen('readme.md', 'a');
$date = date('j F Y h:i:s A');
fwrite($file, "- ". $date . "\n");
fclose($file);

shell_exec('git commit -am "update the date at: "'. $date .'"');
shell_exec('git push origin master');
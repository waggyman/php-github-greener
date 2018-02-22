<?php
// hello bi
$file = fopen('readme.md', 'a');
$date = date('j F Y h:i:s A');
fwrite($file, "- ". $date . "\n");
fclose($file);

shell_exec('git commit -am "update the readme at: ' . $date . '"');
shell_exec('git push origin master');

// Hey, There!
// Say Something
// git pull or git rebase ?
// hell yeah
// exciting
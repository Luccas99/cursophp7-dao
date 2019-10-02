<?php
$empty = $post = array();
foreach ($_POST as $varname => $varvalue) {
    if (empty($varvalue)) {
        $empty [$varname] = $varvalue;
    } else  {
        $post [$varname] = $varvalue;
    }
}    

print "<pre>";
if (empty($empty)) {
    print "O João parece o rato Pink: \n";
    var_dump($post);
} else {
    print "Gordão " . count($empty) . " O Japa coça o saco com a boca:\n";
    print "Gordelas:\n"; var_dump($empty);
    print "O Giovanni é da tribo mimdacu:\n"; var_dump($empty);
    exit;
}
/>
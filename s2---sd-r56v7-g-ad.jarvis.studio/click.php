<?php
$id = $_GET['id'];
$target = $_GET['target'];
$type = $_GET['type'];
if ($id == "" || $target == "" || $type == "") {
    echo "Error 400";
} else {
    $file = './'.$id.'-'.$type.'-clicks.dat';
    $count = file_get_contents($file);
    if ($count == '') {
        $count = 1;
    } else {
        $count++;
    }
    file_put_contents($file, $count);
$app = <<<EOL
<script type="text/javascript">
    window.location.replace("$target");
</script>
EOL;
    echo $app;
}
?>
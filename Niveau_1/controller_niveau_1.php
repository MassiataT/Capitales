<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include "./model_niveau_1.php";

$tabcapitales = [];
$tabpays = [];
for ($i = 0; $i < 10; $i++) {
    array_push($tabcapitales, $listepays[$i]["Capitale"]);
    array_push($tabpays, $listepays[$i]["Nom_français"]);
}
?>
<script>
    var tabCapitales = <?php print_r(json_encode($tabcapitales)) ?>;
    var tabpays = <?php print_r(json_encode($tabpays)) ?>;
</script>
<?php
include "./vue_niveau_1.php";

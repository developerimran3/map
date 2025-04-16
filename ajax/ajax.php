<?php
if (file_exists(__DIR__ . "/../autoload.php")) {
    require_once __DIR__ . "/../autoload.php";
}


if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case "new_enty";
        $importer_name = $_POST['importer_name'];
        $goods_name = $_POST['goods_name'];
        // $quantity = $_POST['quantity'];
        // $pkg_code = $_POST['pkg_code'];
        // $vessel = $_POST['vessel'];
        // $bl_no = $_POST['bl_no'];
        // $container_no = $_POST['container_no'];
        // $container_size = $_POST['container_size'];
        // $container_location = $_POST['container_location'];
        // $lc_no = $_POST['lc_no'];
        // $lc_date = $_POST['lc_date'];
        // $gross_weight = $_POST['gross_weight'];
        // $arivel_date = $_POST['arivel_date'];


        store('office_enty', [
            'importer_name'         => $importer_name,
            'goods_name'            => $goods_name,
            // 'quantity'              => $quantity,
            // 'pkg_code'              => $pkg_code,
            // 'vessel'                => $vessel,
            // 'bl_no'                 => $bl_no,
            // 'container_no'          => $container_no,
            // 'container_size'        => $container_size,
            // 'container_location'    => $container_location,
            // 'lc_no'                 => $lc_no,
            // 'lc_date'               => $lc_date,
            // 'gross_weight'          => $gross_weight,
            // 'arivel_date'           => $arivel_date,
        ]);

        break;

    case "document_received";
        echo "hi";
        break;

    case "register_enty";
        echo "hi";
        break;

    case "assessment";
        echo "hi";
        break;

    case "delivery";
        echo "hi";
        break;
};

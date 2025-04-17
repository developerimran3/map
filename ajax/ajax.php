<?php
if (file_exists(__DIR__ . "/../autoload.php")) {
    require_once __DIR__ . "/../autoload.php";
}


if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

switch ($action) {
    case "entydata";
        $importer_name      = $_POST['importer_name'];
        $goods_name         = $_POST['goods_name'];
        $quantity           = $_POST['quantity'];
        $pkg_code           = $_POST['pkg_code'];
        $vessel             = $_POST['vassel_name'];
        $bl_no              = $_POST['bl_no'];
        $container_no       = $_POST['container_no'];
        $container_size     = $_POST['container_size'];
        $container_location = $_POST['container_location'];
        $lc_no              = $_POST['lc_no'];
        $lc_date            = $_POST['lc_date'];
        $gross_weight       = $_POST['gross_weight'];
        $arivel_date        = $_POST['arivel_date'];

        store('enty', [
            'importer_name'         => $importer_name,
            'goods_name'            => $goods_name,
            'quantity'              => $quantity,
            'pkg_code'              => $pkg_code,
            'vassel_name'           => $vessel,
            'bl_no'                 => $bl_no,
            'container_no'          => $container_no,
            'container_size'        => $container_size,
            'container_location'    => $container_location,
            'lc_no'                 => $lc_no,
            'lc_date'               => $lc_date,
            'gross_weight'          => $gross_weight,
            'arivel_date'           => $arivel_date,
        ]);

        break;

    case "received";
        $document_received  = $_POST['document_received'];
        $invoice_value      = $_POST['invoice_value'];
        $invoice_no         = $_POST['invoice_no'];
        $invoice_date       = $_POST['invoice_date'];
        $net_weight         = $_POST['net_weight'];

        update('enty', 24, [
            " document_received"    => $document_received,
            " invoice_value"        => $invoice_value,
            " invoice_no"           => $invoice_no,
            " invoice_date"         => $invoice_date,
            " net_weight"           => $net_weight,
        ]);
        break;

    case "register";
        $be_no      = $_POST['be_no'];
        $be_date    = $_POST['be_date'];
        $be_lane    = $_POST['be_lane'];

        update('enty', 24, [
            " be_no"        => $be_no,
            " be_date"      => $be_date,
            " be_lane"      => $be_lane,
        ]);
        break;

    case "assessment";
        $assessment_date    = $_POST['assessment_date'];
        $r_no               = $_POST['r_no'];
        $x_no               = $_POST['x_no'];
        $scann_document     = $_POST['scann_document'];

        update('enty', 24, [
            " assessment_date"     => $assessment_date,
            " r_no"                => $r_no,
            " x_no"                => $x_no,
            " scann_document"      => $scann_document,
        ]);
        break;

    case "delivery";
        echo "hi";
        break;
};

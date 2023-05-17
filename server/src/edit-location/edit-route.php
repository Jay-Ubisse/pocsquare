<?php
session_start();

switch ($_POST["region"]) {
    case 'district':
        $_SESSION["id_number"] = $_POST["id"];
        $_SESSION["district_name"] = $_POST["district"];
        $_SESSION["region"] = $_POST["region"];
        break;
    case 'admin_post':
        $_SESSION["id_number"] = $_POST["id"];
        $_SESSION["district_name"] = $_POST["district"];
        $_SESSION["admin_post_name"] = $_POST["adminPost"];
        $_SESSION["region"] = $_POST["region"];
        break;
    case 'neighborhood_locality':
        $_SESSION["id_number"] = $_POST["id"];
        $_SESSION["district_name"] = $_POST["district"];
        $_SESSION["admin_post_name"] = $_POST["adminPost"];
        $_SESSION["neighborhood_name"] = $_POST["neighborhood"];
        $_SESSION["region"] = $_POST["region"];
        break;
    case 'cell':
        $_SESSION["id_number"] = $_POST["id"];
        $_SESSION["district_name"] = $_POST["district"];
        $_SESSION["admin_post_name"] = $_POST["adminPost"];
        $_SESSION["neighborhood_name"] = $_POST["neighborhood"];
        $_SESSION["cell_name"] = $_POST["cell"];
        $_SESSION["region"] = $_POST["region"];
        break;
    case 'circle':
        $_SESSION["id_number"] = $_POST["id"];
        $_SESSION["district_name"] = $_POST["district"];
        $_SESSION["admin_post_name"] = $_POST["adminPost"];
        $_SESSION["neighborhood_name"] = $_POST["neighborhood"];
        $_SESSION["circle_name"] = $_POST["circle"];
        $_SESSION["region"] = $_POST["region"];
        break;
    case 'village':
        $_SESSION["id_number"] = $_POST["id"];
        $_SESSION["district_name"] = $_POST["district"];
        $_SESSION["admin_post_name"] = $_POST["adminPost"];
        $_SESSION["neighborhood_name"] = $_POST["neighborhood"];
        $_SESSION["village_name"] = $_POST["village"];
        $_SESSION["region"] = $_POST["region"];
        break;
    case 'township':
        $_SESSION["id_number"] = $_POST["id"];
        $_SESSION["district_name"] = $_POST["district"];
        $_SESSION["admin_post_name"] = $_POST["adminPost"];
        $_SESSION["neighborhood_name"] = $_POST["neighborhood"];
        $_SESSION["township_name"] = $_POST["township"];
        $_SESSION["region"] = $_POST["region"];
        break;
    case 'zone':
        $_SESSION["id_number"] = $_POST["id"];
        $_SESSION["district_name"] = $_POST["district"];
        $_SESSION["admin_post_name"] = $_POST["adminPost"];
        $_SESSION["neighborhood_name"] = $_POST["neighborhood"];
        $_SESSION["zone_name"] = $_POST["zone"];
        $_SESSION["region"] = $_POST["region"];
        break;
    default:
        # code...
        break;
}

?>
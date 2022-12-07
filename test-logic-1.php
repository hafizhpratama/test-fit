<!DOCTYPE html>
<html>

<body>

    <?php
    $array = ['10', '20', '20', '10', '10', '30', '50', '10', '20'];
    $data = array_count_values($array);
    $kaos_merk = '';
    $total = 0;
    foreach ($data as $key => $item) {

        if ($item > 1) {
            $kaos[$key] = $item;
            $kaos_merk .= $key . ",";
            $total += floor($item / 2);
        }
    }
    $total_kaos = $total;
    $implode = implode(' ', $array);
    print_r('Input: [' . $implode . "] </br>");
    print_r('Output: ' . $total_kaos . "</br>");
    print_r('Keterangan: Hanya ' . $total_kaos . ' pasang kaos kaki yang dapat dijual (' . $kaos_merk . ')' . "</br></br>");

    $array = ['6', '5', '2', '3', '5', '2', '2', '1', '1', '5', '1', '3', '3', '3', '5'];
    $data = array_count_values($array);
    $kaos_merk = '';
    $total = 0;
    foreach ($data as $key => $item) {

        if ($item > 1) {
            $kaos[$key] = $item;
            $kaos_merk .= $key . ",";
            $total += floor($item / 2);
        }
    }
    print_r($kaos);
    $total_kaos = $total;
    $implode = implode(' ', $array);
    print_r('Input: [' . $implode . "] </br>");
    print_r('Output: ' . $total_kaos . "</br>");
    print_r('Keterangan: Hanya ' . $total_kaos . ' pasang kaos kaki yang dapat dijual (' . $kaos_merk . ')' . "</br></br>");

    $array = ['1', '1', '3', '1', '2', '1', '3', '3', '3', '3'];
    $data = array_count_values($array);
    $kaos_merk = '';
    $total = 0;
    foreach ($data as $key => $item) {

        if ($item > 1) {
            $kaos[$key] = $item;
            $kaos_merk .= $key . ",";
            $total += floor($item / 2);
        }
    }
    $total_kaos = $total;
    $implode = implode(' ', $array);
    print_r('Input: [' . $implode . "] </br>");
    print_r('Output: ' . $total_kaos . "</br>");
    print_r('Keterangan: Hanya ' . $total_kaos . ' pasang kaos kaki yang dapat dijual (' . $kaos_merk . ')' . "</br></br>");
    ?>

</body>

</html>
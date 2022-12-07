<!DOCTYPE html>
<html>

<body>

    <?php
    $txt = 'Saat meng*ecat tembok, Agung dib_antu oleh Raihan.';
    $array = explode(' ', $txt);
    $count = 0;
    foreach ($array as $item) {
        if (!preg_match('/[^A-Za-z0-9]/', $item) || strpos($item, ',')  || strpos($item, '.')  || strpos($item, '-')   || strpos($item, '?')) {
            $count += 1;
        }
    }
    echo 'Input: ' . $txt . '</br>';
    echo 'Output: ' . $count . '</br></br>';

    $txt = 'Berapa u(mur minimal[ untuk !mengurus ktp?';
    $array = explode(' ', $txt);
    $count = 0;
    foreach ($array as $item) {
        if (!preg_match('/[^A-Za-z0-9]/', $item) || strpos($item, ',')  || strpos($item, '.')  || strpos($item, '-')   || strpos($item, '?')) {
            $count += 1;
        }
    }
    echo 'Input: ' . $txt . '</br>';
    echo 'Output: ' . $count . '</br></br>';

    $txt = 'Masing-masing anak mendap(atkan uang jajan ya=ng be&rbeda.';
    $array = explode(' ', $txt);
    $count = 0;
    foreach ($array as $item) {
        if (!preg_match('/[^A-Za-z0-9]/', $item) || strpos($item, ',')  || strpos($item, '.')  || strpos($item, '-')   || strpos($item, '?')) {
            $count += 1;
        }
    }
    echo 'Input: ' . $txt . '</br>';
    echo 'Output: ' . $count . '</br></br>';
    ?>

</body>

</html>
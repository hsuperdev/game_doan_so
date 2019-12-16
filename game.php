<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $guess = (int)$_POST['number'];
        $numbers = range(1, 100);
        $result = binarySearch($numbers, $guess);
        if ($result == "low") {
            echo "So nhap vao nho hon";
        } elseif ($result == "hight") {
            echo "So nhap vao lon hon";
        } else {
            echo "Dung roi!";
        }

    }

    function binarySearch(array $numbers, $input)
    {
        $start = 0;
        $end = count($numbers) - 1;
        while ($start <= $end) {
            $mid = (int)(($start + $end) / 2);
            if ($numbers[$mid] > $input) {
                $end = $mid - 1;
                return 'low';
            } else if ($numbers[$mid] < $input) {
                $start = $mid + 1;
                return 'hight';
            } else {
                return 'equal';
            }
        }
        return FALSE;
    }
?>
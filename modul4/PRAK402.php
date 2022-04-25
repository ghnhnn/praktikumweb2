<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2</title>
    <style>
        table, th, td {
            padding: 5px;
            border: solid 0.1px black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php 
    $data = array (
            array('nama' => 'Andi' ,'nim' => '2101001', 'uts' => '87', 'uas' => '65' ),
            array('nama' => 'Budi' ,'nim' => '2101002', 'uts' => '95', 'uas' => '79' ),
            array('nama' => 'Tono' ,'nim' => '2101003', 'uts' => '76', 'uas' => '41' ),
            array('nama' => 'Jessica' ,'nim' => '2101004', 'uts' => '0', 'uas' => '0' )
        );

    for ($i=0; $i < count($data); $i++) { 
        //nilai akhir 40% UTS + 60% UAS
        $data[$i]["nilaiAkhir"] = $data[$i]["uts"]*0.4 + $data[$i]["uas"]*0.6;
        if ($data[$i]["nilaiAkhir"]>=80) {
            $data[$i]["huruf"] = "A";
        }
        elseif ($data[$i]["nilaiAkhir"]>=70) {
            $data[$i]["huruf"] = "B";
        }
        elseif ($data[$i]["nilaiAkhir"]>=60) {
            $data[$i]["huruf"] = "C";
        }
        elseif ($data[$i]["nilaiAkhir"]>=50) {
            $data[$i]["huruf"] = "D";
        }
        else {
            $data[$i]["huruf"] = "E";
        }
        
    }
    ?>

    <table>
        <tr style="background-color: #B7B7B7;">
            <td>Nama</td>
            <td>NIM</td>
            <td>Nilai UTS</td>
            <td>Nilai UAS</td>
            <td>Nilai Akhir</td>
            <td>Huruf</td>
        </tr>

        <?php
            for ($i=0; $i < count($data); $i++) { 
                echo "<tr>";
                echo "<td>".$data[$i]["nama"]."</td>";
                echo "<td>".$data[$i]["nim"]."</td>";
                echo "<td>".$data[$i]["uts"]."</td>";
                echo "<td>".$data[$i]["uas"]."</td>";
                echo "<td>".$data[$i]["nilaiAkhir"]."</td>";
                echo "<td>".$data[$i]["huruf"]."</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
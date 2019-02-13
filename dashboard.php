

<?php
/**
 * Created by PhpStorm.
 * User: kanapos
 * Date: 2019-02-12
 * Time: 15:14
 */

include 'navbar.php';

function readCSV($csvFile){
    $file_handle = fopen($csvFile, 'r');
    while (!feof($file_handle) ) {
        $line_of_text[] = fgetcsv($file_handle, 1024);
    }
    fclose($file_handle);
    return $line_of_text;
}

$id = $_POST['setid'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$redcsv = $_FILES['file'];

//if ($_FILES["file"]["error"] > 0)
//{
//    echo "Error: " . $_FILES["file"]["error"] . "<br />";
//}
//else
//{
//    echo "Type: " . $_FILES["file"]["type"] . "<br />";
//    $csvFile  = $_FILES["file"]["tmp_name"];
//}
//
$csvFile  = $_FILES["file"]["tmp_name"];
//print_r($_FILES["file"]);
$data = readCSV($csvFile);
//foreach ($data as $output){
//    echo $output[0];
//    echo "<p>";
//}

if ($_FILES["file"]["type"] != "text/csv") {
    echo "<script type='text/javascript'>";
    echo "window.location = 'checking.php'";
    echo "</script>";

}
?>

<head>
    <meta charset="UTF-8">
    <title>Validate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/csslogin.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div >
    <div class="container mt-3" style="font-size: 50px">
        Summary Grade
        <h1 style="border-bottom: lightpink solid 2px"></h1>
    </div>

    <div class="container">
        <p>ID : <span style="font-weight: bold"><?php echo $id?></span></p>
        <p>First name : <span style="font-weight: bold"><?php echo $firstname?></span></p>
        <p>Last name : <span style="font-weight: bold"><?php echo $lastname?></span></p>
        <p>GPA : <span style="font-weight: bold" id="csstext">
                <?php
                $sum = 0;
                foreach ($data as $output){
                    $sum += $output[2];
                }
                echo $sum/sizeof($data);
                if ($sum/sizeof($data) >= 3) {
                    echo "<style> #csstext { color: lightgreen }</style>";
                }
                else{
                    echo "<style> #csstext { color: darkred }</style>";
                }
                ?>
            </span></p>
    </div>

    <div class="container mt-5 card pt-3">


        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>Year</th>
                <th>Term</th>
                <th>GPAX</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $data = readCSV($csvFile);

            foreach ($data as $output){
                echo "<tr>";
                for ($i=0 ; $i<sizeof($data)-1 ; $i++) {
                    echo "<th>$output[$i]</th>";
//                        echo $output[$i];
                }
                echo "</tr>";
            }

            ?>

            </tbody>
        </table>
    </div>

</div>


</body>

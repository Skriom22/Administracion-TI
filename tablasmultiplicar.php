<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tablas de multiplicar</title>
    <style>
        body{
            max-width: 1000px;
            margin:auto;
            background-color: teal;
        }
        h2{
            text-align: center;
            background-color: cyan;
            padding: 25px;
        }
        table{
            border-collapse: collapse;
            width: 400px;
            margin: auto;
            text-align: center;
        }
        th {
            background-color: cyan;
            padding: 10px;
        }
        td {
            background-color:navy blue; 
        }
        </style>
</head>

<body>
    <h2>tablas de multiplicar</h2>
    <?php
for($i = 1; $i <6; $i++){
    print("<table>\n");
    print("\t\t<tr>\n");
    print("\t\t\t<th>tabla del $i</th>\n");
    print("\t\t<tr>\n");

    for($j = 1; $j < 11; $j++){
        $a = $i * $j;
        print("\t\t<tr>\n");
        print("\t\t\t<td>$i x $j = $a</td>\t\n");
        print("\t\t<tr>\n");
    }
    print("\t</table>\n\t");
    print("<br>\n\t");
}
?>
</body>
</html>
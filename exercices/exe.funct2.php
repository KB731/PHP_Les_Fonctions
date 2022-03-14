<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

        tr{
            background: gray;
            border: 1px solid black;
        }

        th {
            border: 1px solid black;
        }
    </style>
    <?php
        function Tableau () {
            $tableau = array(
                'kevin' => 'kevin@gmail.com',
                'pseudo1' => 'pseudo1@gmail.com',
                'pseudo2' => 'pseudo2@gmail.com',
                'pseudo3' => 'pseudo3@gmail.com'
            );

            foreach ($tableau as $clef => $valeur){
            ?>
                <table>
                    <tr>
                    <th>Pseudo</th>
                    <th>Email</th>
                    </tr>
                    <tr>
                        <td><?php echo $tableau['$clef'] ?></td>
                        <td><?php echo $tableau['$valeur'] ?></td>
                    </tr>
                </table>
            <?php
            }
        }

        var_dump($tableau);
            Tableau($tableau);
            ?>
   
</body>
</html>





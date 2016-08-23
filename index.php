<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="new.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <br>
            <input type="text" name="username" placeholder="username"><br>
            <input type="text" name="place" placeholder="place"><br>
            <input type="file" name="sekil">
            <br>
            <br>
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <div class="col-md-12">
            <table border="2">
                <thead>
                    <tr>
                        <th>Ad</th>
                        <th>Yer</th>
                        <th>Sekil</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $file = fopen('list.txt', 'r');
                        $list = fread($file, filesize('list.txt'));
                        $list = explode("@", $list);
                        echo "<pre>";
                        print_r($list);
                        echo "<pre>";
                        echo sizeof($list);
                        for ($i = 0; $i < sizeof($list)-1; $i++) {
                            $list[$i] = explode('|', $list[$i]);
                        }
                        echo "<pre>";
                        print_r($list);
                        echo "<pre>";
                        echo sizeof($list);
                        for ($i = 0; $i < sizeof($list)-1; $i++) {
                            echo "<tr><td>".$list[$i][0]."</td><td>".$list[$i][1]."</td><td><img src=".$list[$i][2]."><td></tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </body>
</html>

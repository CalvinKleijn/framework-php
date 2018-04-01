<?php
        $Maanden = array(' ', 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus','september', 'oktober', 'november', 'december');
        $CurMaand = 0;
        $CurDag = 0;
            foreach ($birthdays as $birthday) {
                if ($birthday['month'] != $CurMaand) {
                $CurMaand = $birthday['month'];
                echo '<h1>'.$Maanden[$CurMaand].'</h1>';
            }
                if ($birthday['day'] != $CurDag) {
                $CurDag = $birthday['day'];
                echo '<h2>'.$CurDag.'</h2>';
            }

                        echo "<a href='birthday/edit/".$birthday['id']."'><p>".$birthday['person']."(". $birthday['year'].")";  
                        echo "<a href='birthday/delete/".$birthday['id']."'>x</a>";
                        echo "</p>";  
             }
?>

<p><a href="<?= URL ?>birthday/create">+ Toevoegen</a></p>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="form.php">
            <table>
                <?php
                    $array = array('name'=>'Nombre','lastName'=>'Apellido','adress'=>'Dirección','phone'=>'Telefono');
                    foreach($array as $key=>$value):
                ?>

                <tr>
                    <td><?php echo $value?></td>
                    <td><input type="text" name=<?php echo $key?>></td>
                </tr>

                <?php endforeach; ?>

                <tr>
                    <td>Sexo</td>
                    <td>
                    <input type="radio" name="sex" value='Hombre'> Hombre
                    <input type="radio" name="sex" value='Mujer'> Mujer
                    </td>
                </tr>

                <tr>
                    <td>
                    <input type="submit" name="submit" value='guardar'>
                    </td> 
                </tr>
            </table>
        </form>
    </body>
    <h1><?php echo "!!!!! {$_GET['answer']} gracias {$_GET['name']}";?></h1>
</html>
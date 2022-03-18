<form action="/" method="get"> <input type="text" name="firstname" placeholder="First Name" />
    <input type="text" name="lastname" placeholder="Last Name" /> <input type="submit" name="submit" />
    <input type="checkbox"  name="extends">
    <label for="horns">Включить наследование класса</label>
    </form>



<?php

    include('myApps/ClassLearn.php');
    include('myApps/extendsClass.php');

$app2 = new extendsClass();
$app = new ClassLearn;
$app::writeFile($_GET['firstname'],$_GET['lastname']);

$extendOption = $_GET['extends'];
    if($extendOption == 'on')
    {
        echo $app2::outInfos();
    }
    else
    {
    echo $app::outInfos();
    }
?>

<?

    include_once("./system/settings.php");
    include_once("./system/database.php");
    include_once("./system/function.php");

    if(!isset($_POST['type'])) {
        getMessage('No post type', 'ERROR');
    } else {

        $type = $_POST['type'];

        include_once("./post/extra/welcome.php");
        include_once("./post/affiliate/register.php");
        include_once("./post/affiliate/add.php");

    }

?>

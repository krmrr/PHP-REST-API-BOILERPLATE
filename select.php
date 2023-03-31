<?

    include_once("./system/settings.php");
    include_once("./system/database.php");
    include_once("./system/function.php");

    if(!isset($_GET['type'])) {
        getMessage('No get type', 'ERROR');
    } else {

        $type = $_GET['type'];

        include_once("./post/affiliate/result.php");
        
    }

?>
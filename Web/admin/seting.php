<?php  
require_once '../main/theam/dbconn.php';


require_once 'theam/mobile/head.php';


require_once 'theam/pc/head.php';
require_once 'theam/pc/siderbar.php';



require_once 'seting/se1.php';
require_once 'seting/se2.php';





if(isset($_GET['done'])){
    require_once 'seting/pchedone.php';
}









require_once 'theam/pc/footer.php';








?>

<style>
.mobilehead{
    display:none;
}


.setmd{
    color:#000080;
}


@media screen and (max-width: 867px) {



.nonepc{
        display:none;
    }

.mobilehead{
    display:flex;
}



}


</style>

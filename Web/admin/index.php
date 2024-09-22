<?php  
require_once '../main/theam/dbconn.php';


require_once 'theam/mobile/head.php';


require_once 'theam/pc/head.php';
require_once 'theam/pc/siderbar.php';





require_once 'dash/index.php';













require_once 'theam/pc/footer.php';








?>

<style>
.mdash{
    color:#000080;
}

.sidebar .dash {
    color:#92CAF6;
}



.mobilehead{
    display:none;
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

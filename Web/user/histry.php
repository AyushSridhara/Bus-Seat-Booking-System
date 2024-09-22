<?php  
require_once '../main/theam/dbconn.php';


require_once 'theam/mobile/head.php';


require_once 'theam/pc/head.php';
require_once 'theam/pc/siderbar.php';







require_once 'histry/index.php';




require_once 'theam/pc/footer.php';


?>







<style>

.hismd{
    color:#000080;
}



.mobilehead{
    display:none;
}

.sidebar .hsid {
    color:#92CAF6;
}




.mobilehd{
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




@media screen and (max-width: 601px) {


.disn{
    display:none;
}


.mobilehd{
    display:block;
}



}









</style>

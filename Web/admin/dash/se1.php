

<script src="https://cdnjs.cloudflare.com/ajax/libs/html5-qrcode/2.3.4/html5-qrcode.min.js" integrity="sha512-k/KAe4Yff9EUdYI5/IAHlwUswqeipP+Cp5qnrsUjTPCgl51La2/JhyyjNciztD7mWNKLSXci48m7cctATKfLlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<main>
<!--
<div id="reader"></div>
-->
<div id="result" class ="dispnon"></div>

</main>
<script>


function oncemara(){
        const scanner = new Html5QrcodeScanner('reader', {
        qrbox: {
        width: 250,
        height: 250,
        },
        fps: 20,
        });
        scanner.render(success, error);
        function success(result) {
        document.getElementById('result').innerHTML = `
        <h2>Success!</h2>
        <p><a href="${result}">${result}</a></p>
        `;

        
        save(result);
        //scanner.clear();
        //document.getElementById('reader').remove();
        }
        function error(err) {
            console.error(err);
        }


       




        function save(result){

                        
                     //alert (result);                      
                        var uid = "<?php Print($UID); ?>";
         
                       // alert (uid); 

                        $.post("dash/checkid.php",
                        {
                            result : result,
                            uid : uid                         

                        },
                        function(result){
                        $("#chekmod").html(result);
                        
                        //alert (result); 
                        });
                        }

        }
    

function openmodeltchek(){
    $("#myModal2").modal();
}
</script>



<style>

.dispnon{
    display:none;
}

main {
display: flex;
justify-content: center;
align-items: center;
}
#reader {
width: 350px;
}
#result {
text-align: center;
font-size: 1.5rem;
}

@media (max-width:500px){
#reader {
    width: 250px;
}

}



</style>
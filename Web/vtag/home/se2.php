<section class = "frist fw lap" id = "section1" >

<div class = "imgf pimg phone2" data-aos="fade-down" data-aos-duration="2000">
        <img class = "imghfp" src="vtag/img/1imgsen.png" alt="img"  class="right">
</div>

    <div class = "disf bgc" data-aos="fade-right" data-aos-duration="2000">
        <h1>BOOK<br>SEATS USING<br>BOOKIN HUB</h1>
        
       <div class="container">
           <!-- <span class="text  first-text">For Your</span> -->
            <span class="text sec-text">Book Your Seats Easly.</span>
        </div> 
        <div class="conmo"><br>
            <span class="text first-text">Book Your Seats Easly.</span><br>
        </div>

        <div  class = "dfcbt">
            <a href="#section3" class = "fcbt">BOOK NOW</a>
        </div>
    </div>

    <div class = "imgf lap2" data-aos="fade-left" data-aos-duration="2000">
        <img class = "imghf" src="vtag/img/1imgsen.png" alt="img"  class="right">
    </div>


</section>



<!--

<script>
        const text = document.querySelector(".sec-text");
        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "Custom Software.";
            }, 0);
            setTimeout(() => {
                text.textContent = "Websites.";
            }, 4000);
            setTimeout(() => {
                text.textContent = "Digital Products.";
            }, 8000); //1s = 1000 milliseconds
        }
        textLoad();
        setInterval(textLoad, 12000);
 </script> 

    -->



<style>
.phone2{
    display: none;
}

.fw{
    color:black;
    background-color: #E9F2F4;
    
}

.frist{
    display:flex;
    padding-top:70px;
    padding-bottom:80px;
}


.disf{
    font-size:30px;
    padding-top:180px;
    padding-left:15%;
    padding-right:10%;

}


.imghf{
    padding-bottom:20px;
    padding-top:2px;
    width: 100%;
    padding-right:20px;

    justify-content: right;
    
}


.dfcbt{
    padding-top:20px;
    padding-left:8%;
}


.fcbt {
  background-color: #16A2CB;
  color: white;
  padding: 8px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size:18px;
}

.dfcbt :hover{
    color: black;
}

.conmo{
    display: none;
}


/* animesahn code */

.h-animate .text{
    position: relative;
    color:#16A2CB;
    font-size:30px;
    font-weight: 600;
}





/* ===== Google Font Import - Poppins ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');

.container{
    width: 500px;
    overflow: hidden;
}
.container .text{
    position: relative;
    color: #1456FF;
    font-size: 20px;
    font-weight: 600;
    font-family: Arial, Helvetica, sans-serif;
}
.container .text.first-text{
    color: black;
}
.text.sec-text:before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-color: #E9F2F4;
    border-left: 2px solid #4070F4;
    animation: animate 10s steps(20) infinite;
}
@keyframes animate{
    40%, 60%{
        left: calc(100% + 4px);
    }
    100%{
        left: 0%;
    }
}





@media (max-width:1500px){

.imghf{
    width: 100%;
    
}
.disf{
    padding-left:10%;
    padding-right:10%;

}


}





@media (max-width:1150px){


.disf 
{
    padding-top:100px;
    font-size:25px;

}
.frist{
    padding-bottom:50px;
}
}



/*
@media (max-width:930px){


.disf{
    padding-top:10px;
    font-size:20px;
    padding-right:0%;

}

.fcbt {
  font-size:15px;
}   
  

.container .text{
    font-size: 15px;

}

.imghf{
    padding-bottom:10px;
    padding-top:10px;
    width: 100%;
}


}



@media (max-width:1000px){

.container {
   width: 300px ;
   display: none;
}
.frist{
    display:inline;
}


.bgc{
    width: 400px;
}


 .frist{

    padding-top:70px;

}

.imghf{
    padding-bottom:0;
    padding-top:0;
    width: 100%;

}

.disf{
    padding-left:2%;
    padding-right:2%;

}

.conmo{
    display: flex;
}


}



@media (max-width:550px){

.container {
   width: 250px ;

}


.container .text{
    font-size: 13px;

}

.conmo{
    font-size: 13px;
}
.disf{
    font-size:15px;

}

}
*/
@media (max-width:1000px){
.fw{
    color:black;
    background-color:#E9F2F4;
    
}

.phone2{
    display: block;
}

.lap2{
    display: none;
}

.container {
   width: 300px ;
   display: none;
}

.conmo{
    display: block;
    font-size: 90%;
    text-align: center;
    
}

.text{
    color:#1456FF;
}

.frist{
    display:inline;
    text-align: center;
}

.imghfp{
    width: 80%;
    padding-top:20px;
    padding-bottom:20px;
    padding-right:0px;

}

.disf{
    padding-top:50px;
    width: 100%;
    text-align: center;
}
.conmo{
    padding-left:10px;

}

.pimg{
    padding-top: 50px;
}






}







</style>
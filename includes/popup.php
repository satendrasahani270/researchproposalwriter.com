<style>

#tpopup {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    display: flex;
    justify-content:center;
    align-items:center;
    z-index: 9999;
    background: #0e0e0eb8;
    
}
 #tpopup img {
        height:70%;
    }
 #tpopup .position-relative {
        margin-top:50px;
    }
   

#tpopup {
    box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    /*border-radius: 10px;*/
    /*position: relative;*/
}
@media only screen and (min-width:771px){
    #tpopup {
    height: 100vh;
    width: 100vw;
}
    #tpopup img {
        height:50% !important;
        width: revert-layer;
    }
}
@media only screen and (max-width:771px){
    #tpopup .position-relative {
        padding:10px;
    }
}
.popupextra{
    background-color: rgb(255 255 255/var(--tw-bg-opacity,1));
}
.close-btn{
    position: absolute;
    top: 1%;
    right: 1%;
    z-index: 9999;
    background-color: hsl(0deg 0% 100% / 44%);
    }

</style>

<div style="display:none;" id='kmainpopup'>
    <div id="tpopup">
    <div class="position-relative">
        <img src="https://www.assignmentwriter.au/newyear.png" alt="popup" width='500'>
        <button id="tclose" class="close-btn btn p-2 rounded-circle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-x w-5 h-5 text-white group-hover:scale-110 transition-transform">
                <path d="M18 6 6 18"></path>
                <path d="m6 6 12 12"></path>
            </svg>
        </button>
        <div class="p-2 popupextra d-flex align-items-center justify-content-center">
            <div class="p-2 text-center w-full">
                <a href="https://api.whatsapp.com/send?phone=447700168833" class='btn btn-outline-dark px-5'>Get Your 50% OFF Now!</a>
                <br>
                <p class="text-black">✨ Limited Time New Year offer ✨</p>
            </div>
        </div>
    </div>
    
</div>
</div>

<script>
$(document).ready(function() {
    if(localStorage.getItem('pop') === null){
        $("#kmainpopup").delay(2000).fadeIn();
        localStorage.setItem('pop','shown');
    }

    $('#tclose, #kmainpopup').click(function(e) // You are clicking the close button
        {
            $('#kmainpopup').fadeOut(); // Now the pop up is hiden.
         });
    $('#kmainpopup').click(function(e) 
        {
            $('#kmainpopup').fadeOut(); 
        });
});
</script>
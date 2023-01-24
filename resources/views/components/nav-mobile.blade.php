{{--<style>
    .navBarMobile{
        min-width:100%;
        height: 50px;
        z-index: 99;
        position: relative;
        display:flex;
        justify-content: space-between;
        align-items: center;
    }

    .navBarMobile > .navBarMobile__screenMenu{

        width: 80%;
        height: 200vh;
        position: absolute;
        z-index: 99;
        background: #06100e;
        box-shadow: 0px 0px 50px #280100d9;
        top:0%;
        display: none;
        


    }

    .navBarMobile > .navBarMobile__screenMenu > .google{

        display: flex;
        justify-content: end;
        width: 80%;
        margin-left: 17%;
        margin-top: 10px;
    }
    
    .navBarMobile > .navBarMobile__screenMenu > .navBarMobile__iconArrow{

        position: absolute;
        z-index: 99999;
        top:10px;
        left:10px;
    }


    .navBarMobile > .navBarMobile__iconsGroup{

        width:100px;
        height:100%;
    }

    .navBarMobile > .navBarMobile__title{

        color: white;
        font-size: 19px;
        font-weight: bold
        text-shadow: 0px 0px 5px black;
    }

    .navBarMobile > .navBarMobile__iconBars{

        width: 95px;
        padding-left: 8px;
    }

    @media(min-width:800px){

        .navBarMobile{
            display: none;
        }
    }

    .OpenMenu{
        left:0%;
        animation-name: openMenu;
        animation-duration: 0.5s;
    }

    .CloseMenu{
        left:-80%;
        animation-name: closeMenu;
        animation-duration: 0.5s;
    }

    @keyframes openMenu{

        from{
            left: -80%;
           
        }

        to:{

            left:0%;
        }
    }

    @keyframes closeMenu{

        from{
            left: 0%;
        }

        to:{

            left:-80%;
            
        }
    }

</style>--}}

<div class=" navBarMobile">

    <div id="screen-nav-js" class="navBarMobile__screenMenu CloseMenu">
            
        <div id="button-back" class="navBarMobile__iconArrow">
            <svg width="23" height="23" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 20L0 10L10 0L11.7812 1.75L4.78125 8.75H20V11.25H4.78125L11.7812 18.25L10 20Z" fill="white"/>
            </svg>

        </div>    
 
    </div>

    <div id="bars-js" class="navBarMobile__iconBars">
        <svg  width="23" height="21" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0H18V1.6H0V0ZM0 7.2H18V8.8H0V7.2ZM0 14.4H18V16H0V14.4Z" fill="white"/>
        </svg>
    </div>

   
    
    <div class="navBarMobile__title d-flex justify-content-center align-items-center">
        <p class="mt-3">Glowing Phoenix</p>
    </div>


    <div class="navBarMobile__iconsGroup d-flex justify-content-around align-items-center">
        
        <div  class="navBarMobile__iconSoudOFF js-icon-sound-mobile">
            <svg width="28" height="25" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.0044 0.884746C16.0044 0.728239 15.9627 0.574526 15.8835 0.439293C15.8043 0.304061 15.6905 0.192152 15.5536 0.114988C15.4168 0.0378234 15.2618 -0.00183323 15.1045 6.50874e-05C14.9472 0.0019634 14.7932 0.0453487 14.6582 0.125793L5.97852 5.30401H2.6674C1.19322 5.30401 0 6.48932 0 7.95769V15.0377C0 16.5043 1.19144 17.6914 2.6674 17.6914H5.97852L14.6565 22.8731C14.7914 22.954 14.9456 22.9978 15.1032 22.9999C15.2607 23.002 15.416 22.9625 15.5532 22.8853C15.6903 22.808 15.8044 22.6959 15.8837 22.5605C15.9629 22.425 16.0046 22.271 16.0044 22.1142V0.884746ZM23.4855 11.4924L26 13.9922L24.7428 15.2429L22.2283 12.7432L19.7138 15.2429L18.4566 13.9922L20.9711 11.4924L18.4566 8.99263L19.7138 7.74186L22.2283 10.2416L24.7445 7.74186L26 8.99263L23.4855 11.4924Z" fill="white"/>
            </svg>
        </div>

        <div class="navBarMobile__iconSoudON d-none js-icon-sound-mobile">
            <svg width="28" height="27" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.3154 21.9885C20.4257 20.1856 23.3066 16.2676 23.3066 11.5C23.3066 6.73243 20.4257 2.81441 16.3154 1.01157V3.34233C19.0972 4.95755 20.9758 8.05864 20.9758 11.5C20.9758 14.9414 19.0972 18.0425 16.3154 19.6577V21.9885Z" fill="white"/>
                <path d="M16.3154 5.67308V17.3269C17.743 16.045 18.6461 13.5639 18.6461 11.5C18.6461 9.43611 17.743 6.95501 16.3154 5.67308ZM2.33077 17.3269H5.4738L13.9846 23V0L5.4738 5.67308H2.33077C1.04535 5.67308 0 6.71843 0 8.00385V14.9961C0 16.2816 1.04535 17.3269 2.33077 17.3269Z" fill="white"/>
            </svg>
                
        </div>

        <div class="navBarMobile__iconCart">
            <svg width="28" height="25" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.735802 0.000813428C0.511322 0.0282412 0.308564 0.132095 0.172134 0.289527C0.0357041 0.446959 -0.0232228 0.645075 0.00831677 0.84029C0.0398563 1.03551 0.159279 1.21183 0.340312 1.33047C0.521346 1.44912 0.749162 1.50036 0.973642 1.47293H3.90982C4.39566 1.47293 4.55055 1.55758 4.67667 1.65695C4.80278 1.75632 4.96021 1.95653 5.09987 2.37019L9.06782 14.1008C9.07497 14.1242 9.08344 14.1473 9.09321 14.17C9.09321 14.17 10.0336 16.1941 12.4001 16.1941H19.0393C19.2638 16.1941 19.4791 16.1166 19.6378 15.9786C19.7966 15.8405 19.8857 15.6533 19.8857 15.4581C19.8857 15.2629 19.7966 15.0756 19.6378 14.9376C19.4791 14.7996 19.2638 14.722 19.0393 14.722H12.4001C11.1517 14.722 10.654 13.6179 10.654 13.6179L10.5219 13.2499H17.399C18.2708 13.2499 18.6652 12.6139 18.7482 12.3755L21.7901 6.69455C22.2607 5.71264 22.0144 4.41718 20.2818 4.41718H8.00896C7.86846 4.41718 7.71188 4.44809 7.56037 4.48636C7.25566 3.58616 6.7749 2.13833 6.71396 1.95579C6.53622 1.43098 6.29922 0.934874 5.81423 0.552859C5.32924 0.170843 4.65466 0.000813428 3.90982 0.000813428H0.973642C0.947136 -0.000271143 0.920586 -0.000271143 0.89408 0.000813428C0.867574 -0.000270058 0.841024 -0.000270058 0.814518 0.000813428C0.788575 -0.000221314 0.762591 -0.000221314 0.736649 0.000813428H0.735802ZM8.27389 5.93567H11.8449V7.24586H8.75042L8.35261 6.14176C8.32552 6.0608 8.28489 5.99161 8.27389 5.93567ZM12.9554 5.93567H15.2305V7.24586H12.9554V5.93567ZM16.341 5.93567H20.2556C20.2441 5.99051 20.2265 6.04424 20.2031 6.09613L19.5946 7.24659H16.341V5.93567ZM9.09406 8.2123H11.8449V9.45477H9.5435L9.09406 8.2123ZM12.9554 8.2123H15.2305V9.45477H12.9554V8.2123ZM16.341 8.2123H19.0656L18.4045 9.45477H16.341V8.2123ZM9.88714 10.4205H11.8449V11.7314H10.4432C10.4094 11.7314 10.3907 11.7218 10.3637 11.7093L9.88714 10.4205ZM12.9554 10.4205H15.2305V11.7314H12.9554V10.4205ZM16.341 10.4205H17.9018L17.1874 11.7314H16.341V10.4205ZM11.9769 16.3318C11.57 16.3318 11.1798 16.4723 10.8921 16.7225C10.6044 16.9727 10.4428 17.3121 10.4428 17.6659C10.4428 18.0197 10.6044 18.3591 10.8921 18.6092C11.1798 18.8594 11.57 19 11.9769 19C12.3838 19 12.774 18.8594 13.0617 18.6092C13.3494 18.3591 13.511 18.0197 13.511 17.6659C13.511 17.3121 13.3494 16.9727 13.0617 16.7225C12.774 16.4723 12.3838 16.3318 11.9769 16.3318ZM17.0553 16.3318C16.6485 16.3318 16.2583 16.4723 15.9706 16.7225C15.6829 16.9727 15.5212 17.3121 15.5212 17.6659C15.5212 18.0197 15.6829 18.3591 15.9706 18.6092C16.2583 18.8594 16.6485 19 17.0553 19C17.4622 19 17.8524 18.8594 18.1401 18.6092C18.4278 18.3591 18.5895 18.0197 18.5895 17.6659C18.5895 17.3121 18.4278 16.9727 18.1401 16.7225C17.8524 16.4723 17.4622 16.3318 17.0553 16.3318Z" fill="white"/>
            </svg>
                
        </div>

    </div>
    

        
</div>


{{--<script>

    
    const $btnSoudMobile = document.getElementsByClassName('js-icon-sound-mobile');

    for(let i=0; i<$btnSoudMobile.length;i++){

        $btnSoudMobile[i].addEventListener('click',()=>{
            
            if(video.muted){

                video.muted = false;
                $btnSoudMobile[0].classList.add('d-none');
                $btnSoudMobile[1].classList.remove('d-none');
            } 
            else {
                video.muted = true;
                $btnSoudMobile[0].classList.remove('d-none');
                $btnSoudMobile[1].classList.add('d-none');
            }
            
        });
    }

    const screenMobile = document.getElementById('screen-nav-js'),
        buttonBack = document.getElementById('button-back'),
        bars = document.getElementById('bars-js');

    buttonBack.addEventListener('click',()=>{
        
        screenMobile.classList.remove('OpenMenu');
        screenMobile.classList.add('CloseMenu');
       
    });

    bars.addEventListener('click',()=>{
        screenMobile.style.display = "block";
        screenMobile.classList.remove('CloseMenu');
        screenMobile.classList.add('OpenMenu');
   
    });

    
</script>--}}
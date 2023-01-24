{{--<style>
    
    .soundDesktop{

        display: none;

    }

    @media(min-width:800px){

        .soundDesktop{

            position: absolute;
            display: block;
            width: 100px;
            height: 100px;
            left:96%;
            top:92%;
            cursor:pointer

        }
 
    }



</style>--}}

<div class="soundDesktop">

    <div class="soundDesktop__icons">

        <div class="soundDesktop__soundOFF js-icon-sound-desktop">
            <svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.0044 0.884746C16.0044 0.728239 15.9627 0.574526 15.8835 0.439293C15.8043 0.304061 15.6905 0.192152 15.5536 0.114988C15.4168 0.0378234 15.2618 -0.00183323 15.1045 6.50874e-05C14.9472 0.0019634 14.7932 0.0453487 14.6582 0.125793L5.97852 5.30401H2.6674C1.19322 5.30401 0 6.48932 0 7.95769V15.0377C0 16.5043 1.19144 17.6914 2.6674 17.6914H5.97852L14.6565 22.8731C14.7914 22.954 14.9456 22.9978 15.1032 22.9999C15.2607 23.002 15.416 22.9625 15.5532 22.8853C15.6903 22.808 15.8044 22.6959 15.8837 22.5605C15.9629 22.425 16.0046 22.271 16.0044 22.1142V0.884746ZM23.4855 11.4924L26 13.9922L24.7428 15.2429L22.2283 12.7432L19.7138 15.2429L18.4566 13.9922L20.9711 11.4924L18.4566 8.99263L19.7138 7.74186L22.2283 10.2416L24.7445 7.74186L26 8.99263L23.4855 11.4924Z" fill="white"/>
            </svg>
        </div>

        <div class="soundDesktop__soundON d-none js-icon-sound-desktop">
            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.3154 21.9885C20.4257 20.1856 23.3066 16.2676 23.3066 11.5C23.3066 6.73243 20.4257 2.81441 16.3154 1.01157V3.34233C19.0972 4.95755 20.9758 8.05864 20.9758 11.5C20.9758 14.9414 19.0972 18.0425 16.3154 19.6577V21.9885Z" fill="white"/>
                <path d="M16.3154 5.67308V17.3269C17.743 16.045 18.6461 13.5639 18.6461 11.5C18.6461 9.43611 17.743 6.95501 16.3154 5.67308ZM2.33077 17.3269H5.4738L13.9846 23V0L5.4738 5.67308H2.33077C1.04535 5.67308 0 6.71843 0 8.00385V14.9961C0 16.2816 1.04535 17.3269 2.33077 17.3269Z" fill="white"/>
                </svg>
        </div>

    </div>

              
</div>

{{--<script>

    const $btnSoudDesktop = document.getElementsByClassName('js-icon-sound-desktop');

    for(let i=0; i<$btnSoudDesktop.length;i++){

        $btnSoudDesktop[i].addEventListener('click',()=>{
            
            if(video.muted){

                video.muted = false;
                $btnSoudDesktop[0].classList.add('d-none');
                $btnSoudDesktop[1].classList.remove('d-none');
            } 
            else {
                video.muted = true;
                $btnSoudDesktop[0].classList.remove('d-none');
                $btnSoudDesktop[1].classList.add('d-none');
            }
            
        });
    }

</script>--}}
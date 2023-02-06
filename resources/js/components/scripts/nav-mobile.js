export const NavMovile = () =>{


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
        setTimeout(()=>{
            screenMobile.style.display = "none";
        },800);
    
    });

    bars.addEventListener('click',()=>{
        screenMobile.style.display = "block";
        screenMobile.classList.remove('CloseMenu');
        screenMobile.classList.add('OpenMenu');

    });
}
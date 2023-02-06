export const SoundDesktop = ()=>{

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
}
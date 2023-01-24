require('./bootstrap');

const $videoBg  = document.getElementById('video');



//________________________________________________________________ nav Desktop

const containerElements = document.getElementById('js-items-nav-desktop'),
navDesktopItem = document.getElementsByClassName('navDesktop__item'),
textNavDesktop = document.getElementsByClassName('text-nav-desktop');
svgIcon = document.getElementsByClassName('icon-navbar');

for(let i =0; i < navDesktopItem.length;i++){

    navDesktopItem[i].addEventListener('mouseenter',()=>{

        if(i === navDesktopItem.length-1){

            svgIcon[i+1].style.fill ='#AB0200';
            svgIcon[i+2].style.fill ='#AB0200';
        }

        navDesktopItem[i].style.width = "180px";
        svgIcon[i].style.fill ='#AB0200';
        textNavDesktop[i].style.color = '#AB0200';
        
       
    });


    navDesktopItem[i].addEventListener('mouseleave',()=>{

          if(i === navDesktopItem.length-1){

            svgIcon[i+1].style.fill ='white';
            svgIcon[i+2].style.fill ='white';
        }

        navDesktopItem[i].style.width = "10px";
        svgIcon[i].style.fill ='white';
        textNavDesktop[i].style.color = 'transparent';
    })
}

//__________________________________________ nav Desktop


//_______________________________ _____________________________ nav mobile

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
//___________________________________________ nav mobile




//_______________________________________________________ sound desktop
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

//______________________ sound desktop
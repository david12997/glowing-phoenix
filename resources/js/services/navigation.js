
import { Router } from "./router";
import { JsLogo, Logo } from "../components/logo";
import { ContainerInicio, JsContainerInicio } from "../components/container-inicio";
import { ContainerMusica, JsContainerMusica } from "../components/container-musica";
import { ContainerGalery, JsContainerGalery } from "../components/container-galery";
import { ContainerTienda, JsContainerTienda } from "../components/container-tienda";
import { Container404 } from "../components/404";
import { Reproductor } from "./reproductor";


const linksMobile = document.getElementsByClassName('navMobile__btnLink');
const linksDesktop = document.getElementsByClassName('navDesktop__item');

export const routes = ['/inicio','/musica','/galeria','/tienda'];
const router = new Router(window.location,routes);
export const components = [ContainerInicio,ContainerMusica,ContainerGalery,ContainerTienda,Logo,Container404];
export const scriptComponents = [JsContainerInicio,JsContainerMusica,JsContainerGalery,JsContainerTienda,JsLogo];
export const domain ='https://glowingphoenix.co/';
export const song ='https://glowingphoenix.co/assets/audio/inner-desire/my-own-demon-compresed.mp3';
export const reproductor = new Reproductor(song);


for(let i=0; i < linksMobile.length;i++){

    linksDesktop[i].addEventListener('click',()=>{

        router.Navigate(linksDesktop,i,components,scriptComponents);

    });

    linksMobile[i].addEventListener('click',()=>{
        
        router.Navigate(linksMobile,i,components,scriptComponents);
        const screenMobile = document.getElementById('screen-nav-js');
        screenMobile.classList.remove('OpenMenu');
        screenMobile.classList.add('CloseMenu');
        setTimeout(()=>{
            screenMobile.style.display = "none";
        },800)
    });
}





window.addEventListener('load',()=>{

    router.Navigate(linksDesktop,routes.indexOf(router.getPath),components, scriptComponents);
    router.Navigate(linksMobile,routes.indexOf(router.getPath),components, scriptComponents);

})

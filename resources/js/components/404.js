export const Container404 = () =>{


    return `
    
    <div class="Container404 screen-container">

        <div class="Container404__close d-flex justify-content-end ">
            <div class="ContainerInicio__icon" onclick="">
                <svg width="19" height="19" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.5 11.5L2 2M11.5 11.5L21 21M11.5 11.5L21 2M11.5 11.5L2 21" stroke="#BD0012" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                    
            </div>
        </div>

        <br>
        <lottie-player src="/assets/animations/404.json" background="transparent" speed="1" style="width:100%; height: 390px;"  loop autoplay></lottie-player>
        <span style="font-size:20px;width:100%;display:flex;justify-content:center;color:white;text-align:center;">
            Ups la pagina que buscas no existe
        </span>

    </div>

    
    `;
}

{{-- <style>

    .footer{

        position: absolute;
        width: 95%;
        margin-left: 2.3%;
        top:88%;
    }

    .footer > .footer__iconsMedia{

        display: flex;
        justify-content: space-around;
        margin-bottom: 3px;
        cursor:pointer;


    }

    .footer > .footer__politicas, .footer__derechos{
        color:white;
        display: flex;
        text-shadow: 0px 0px 8px black;
       
    }

    .footer > .footer__derechos{
        
        justify-content: center;
    }

    .footer > .footer__politicas{

        justify-content: space-around;
        width: 85%;
        margin-left: 8%;
    }

    @media(min-width:800px){

        .footer{

            width: 400px;
            margin-left: calc(50% - 180px);
            
        }
    }

</style>--}}

<div class="footer">

    <div class="footer__iconsMedia">

        <a aria-label="Siguenos en facebook y no te pierdas del mejor contenido de Glowing Phoenix" href="https://www.facebook.com/profile.php?id=100083653620147" class="footer__iconFacebook">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 10.0251C20 4.49123 15.52 0 10 0C4.48 0 0 4.49123 0 10.0251C0 14.8772 3.44 18.9173 8 19.8496V13.0326H6V10.0251H8V7.5188C8 5.58396 9.57 4.01003 11.5 4.01003H14V7.01754H12C11.45 7.01754 11 7.46867 11 8.02005V10.0251H14V13.0326H11V20C16.05 19.4987 20 15.2281 20 10.0251Z" fill="white"/>
            </svg>                
        </a>

        <a aria-label="Siguenos en tiktok y no te pierdas del mejor contenido de Glowing Phoenix" href="https://www.tiktok.com/@g.phoenix4" class="footer__iconTiktok">
            <svg width="17" height="19" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.40321 0.0149998C9.40844 0 10.406 0.00749991 11.4036 0C11.4649 1.14749 11.887 2.31747 12.7464 3.12746C13.6059 3.95995 14.8183 4.34245 16 4.46994V7.49241C14.895 7.45491 13.7824 7.22991 12.7771 6.76492C12.3397 6.56992 11.933 6.32242 11.534 6.06742C11.5263 8.2574 11.5417 10.4474 11.5187 12.6298C11.4573 13.6798 11.1043 14.7223 10.4827 15.5848C9.4775 17.0248 7.73561 17.9623 5.94768 17.9923C4.85036 18.0523 3.75305 17.7598 2.81688 17.2198C1.26682 16.3273 0.177183 14.6923 0.016039 12.9373C0.000691917 12.5623 -0.0069816 12.1873 0.00836545 11.8199C0.146489 10.3949 0.867801 9.02989 1.98814 8.0999C3.26194 7.01991 5.0422 6.50242 6.70736 6.80991C6.7227 7.9199 6.67666 9.02989 6.67666 10.1399C5.91698 9.89988 5.02685 9.96738 4.35926 10.4174C3.87582 10.7249 3.50749 11.1974 3.31566 11.7299C3.15451 12.1123 3.20055 12.5323 3.20823 12.9373C3.39239 14.1673 4.60481 15.2023 5.89396 15.0898C6.7534 15.0823 7.57446 14.5948 8.01953 13.8823C8.16533 13.6348 8.32647 13.3798 8.33414 13.0873C8.41088 11.7449 8.38019 10.4099 8.38786 9.06739C8.39553 6.04492 8.38019 3.02996 8.40321 0.0149998Z" fill="white"/>
            </svg>
                
        </a>

        <a aria-label="Siguenos en instagram y no te pierdas del mejor contenido de Glowing Phoenix" href="https://www.instagram.com/glowing_phoenix/" class="footer__iconInstagram">
            <svg width="19" height="18" viewBox="0 0 19 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.4698 9.19563C11.4698 8.22166 10.6297 7.42914 9.59725 7.42914C8.56489 7.42914 7.72489 8.22168 7.72489 9.19563C7.72489 10.1698 8.56489 10.9622 9.59725 10.9622C10.6297 10.9622 11.4698 10.1698 11.4698 9.19563ZM14.2516 0H4.74838C2.13012 0 0 2.00982 0 4.48015V5.72844H6.98724C7.72453 5.23292 8.62498 4.94019 9.59725 4.94019C10.5695 4.94019 11.4701 5.23292 12.2074 5.72844H19V4.48015C19 2.0098 16.8699 0 14.2516 0ZM16.1747 4.26097C16.1747 4.53474 15.9373 4.75877 15.6471 4.75877H14.0169C13.7267 4.75877 13.4893 4.53474 13.4893 4.26097V2.72278C13.4893 2.44903 13.7266 2.22498 14.0169 2.22498H15.6471C15.9373 2.22498 16.1747 2.44899 16.1747 2.72278V4.26097V4.26097ZM14.1077 9.19563C14.1077 11.5423 12.0842 13.4512 9.59723 13.4512C7.11017 13.4512 5.08687 11.5423 5.08687 9.19563C5.08687 8.54958 5.2411 7.9369 5.51537 7.38772H0V13.5199C0 15.9904 2.13012 18 4.74838 18H14.2516C16.8699 18 19 15.9903 19 13.5199V7.38772H13.6792C13.9535 7.9369 14.1077 8.54958 14.1077 9.19563Z" fill="white"/>
            </svg>
                
        </a>

        <a aria-label="Siguenos en youtube y no te pierdas del mejor contenido de Glowing Phoenix" href="https://www.youtube.com/@glowingphoenixofficial5432" class="footer__iconYoutube">
            <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 0C0.1892 0 0 1.02156 0 9C0 16.9784 0.1892 18 11 18C21.8108 18 22 16.9784 22 9C22 1.02156 21.8108 0 11 0ZM14.5255 9.39039L9.5865 11.8403C9.1542 12.053 8.8 11.8145 8.8 11.3073V6.69273C8.8 6.18662 9.1542 5.94701 9.5865 6.15974L14.5255 8.60961C14.9578 8.82468 14.9578 9.17532 14.5255 9.39039Z" fill="white"/>
            </svg>
        </a>



    </div>

    <div class="footer__politicas">

        <div>Politicas de privacidad</div>
        <div> Términos y condiciones</div>
    
    </div>

    <div class="footer__derechos">
        <div style="margin-right:5px;" class="footer__iconCC">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.6 16.8H14.4C14.74 16.8 15.0252 16.6848 15.2556 16.4544C15.4852 16.2248 15.6 15.94 15.6 15.6V14.37C15.6 14.03 15.4852 13.75 15.2556 13.53C15.0252 13.31 14.74 13.2 14.4 13.2C14.06 13.2 13.7752 13.3148 13.5456 13.5444C13.3152 13.7748 13.2 14.06 13.2 14.4H10.8V9.6H13.2V9.63C13.2 9.97 13.3152 10.25 13.5456 10.47C13.7752 10.69 14.06 10.8 14.4 10.8C14.74 10.8 15.0252 10.6848 15.2556 10.4544C15.4852 10.2248 15.6 9.94 15.6 9.6V8.4C15.6 8.06 15.4852 7.7748 15.2556 7.5444C15.0252 7.3148 14.74 7.2 14.4 7.2H9.6C9.26 7.2 8.9752 7.3148 8.7456 7.5444C8.5152 7.7748 8.4 8.06 8.4 8.4V15.6C8.4 15.94 8.5152 16.2248 8.7456 16.4544C8.9752 16.6848 9.26 16.8 9.6 16.8ZM12 24C10.34 24 8.78 23.6848 7.32 23.0544C5.86 22.4248 4.59 21.57 3.51 20.49C2.43 19.41 1.5752 18.14 0.9456 16.68C0.3152 15.22 0 13.66 0 12C0 10.34 0.3152 8.78 0.9456 7.32C1.5752 5.86 2.43 4.59 3.51 3.51C4.59 2.43 5.86 1.5748 7.32 0.9444C8.78 0.3148 10.34 0 12 0C13.66 0 15.22 0.3148 16.68 0.9444C18.14 1.5748 19.41 2.43 20.49 3.51C21.57 4.59 22.4248 5.86 23.0544 7.32C23.6848 8.78 24 10.34 24 12C24 13.66 23.6848 15.22 23.0544 16.68C22.4248 18.14 21.57 19.41 20.49 20.49C19.41 21.57 18.14 22.4248 16.68 23.0544C15.22 23.6848 13.66 24 12 24Z" fill="white"/>
            </svg>
                
        </div>
        <div> glowingphoenix.co todos los derechos reservados</div>
    </div>
</div>
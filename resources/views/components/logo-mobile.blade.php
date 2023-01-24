{{--<style>
    .LogoMobile{

        position: absolute;
        width: 100%;
        height: 80%;

    }

    .LogoMobile > .LogoMobile__bgCircle{

        position: absolute;
        opacity: 0.5;
        width: 76%;
        left:11%;
        top:10%;

    }

    .LogoMobile > .LogoMobile__bgCircle > img{

        animation-name: girarMobile;
        animation-iteration-count: infinite;
        animation-duration: 18s;
    }


    .LogoMobile > .LogoMobile__logo{

        position: absolute;
        width:70%;
        left:10%;

    }


    .LogoMobile > .LogoMobile__button{

        position: absolute;
        width: 340px;
        top:80%;
        left:4%;
    }

    .my-btn-index-mobile{
        height:60px;
        font-size:20px;
        border:2px solid #A10200;
        box-shadow:6px 6px 12px black;
        background: #A10200;
    }

    .my-btn-index-mobile:hover{
        background: #A10200;
    }

    .LogoMobile > .LogoMobile__text{

        font-weight: bold;
        font-size: 17px;
        color: white;
        text-shadow: 0px 0px 8px black;
        position: absolute;
        top: 67%;
        left: 7%;
        width: 330px;
    }

    @media(min-width:800px){

        .LogoMobile{

            display: none;
        }
    }

        @keyframes girarMobile{

        0%{

            transform: rotate(0deg);
        }


        100%{
            transform: rotate(360deg);
        }
        
    }

</style>--}}

<div class="LogoMobile">
    
    <div class="LogoMobile__bgCircle">
        <img width="100%" src="/assets/bg-circle-1.png" alt="fondo logo glowing phoenix" srcset="">
    </div>

    <div class="LogoMobile__logo">
        <img width="100%" src="/assets/ave-logo.webp" alt="logo glowing phoenix banda de metal" srcset="">
    </div>

    <div class="LogoMobile__text">
        <p>Disfruta de la mejor música metal al estilo y ritmo único de Glowing Phoenix</p>
    </div>

    <div class="LogoMobile__button">
        <div class="d-grid gap-2">
            <button class="btn btn-danger my-btn-index-mobile" type="button">
                <strong> Ver más</strong>
            </button>
            
        </div>
        
    </div>

</div>
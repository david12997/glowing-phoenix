<style>
    .ContainerMusica{

        width: 90vw;
        height:79vh ;
        background: #040a09df;
        border: 9px solid #040a0974;
        position: absolute;
        margin-left:5vw;
        border-radius: 5px;
        overflow-x: hidden;
        overflow-y: scroll;
    }

    .ContainerMusica > .ContainerMusica__close{
        width:82%;
        height: 40px;
        margin-left: 1%;
        cursor:pointer;
        position: fixed;
        z-index: 9999;
    }


    .ContainerMusica__grid{

        display: grid;
        width: 98%;
        margin-left: 1%;
        height: 96%;
        margin-top: 1%;
        grid-template-areas: "albumes albumes"
                            "album album"
                            "reproductor reproductor";

        grid-template-columns: 1fr 1fr;
        grid-template-rows:33% 34% 32%;
        grid-gap: 2%; 
    }

    .ContainerMusica__grid >  .ContainerMusica__albumes{

        grid-area: albumes;
        width: 100%
    }

    .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes__title{
        
        width: 100%;
        display: flex;
        justify-content: start;
        height: 23%;
        font-size: 18px;
        color: white;
        font-weight: bold;
        padding: 5px;
    
    }

    .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes{
        
        width: 99%;
        margin-left: 1%;
        height: 79%;
        max-height: 190px;
        background: #BD0012;
        display: flex;
        overflow-y: hidden;
        overflow-x:scroll;
        padding-top: 6px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0,0,0,1);
        
    }

    .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes > .Albumes__album{

        margin-left: 25px;
        margin-right: 25px;
        color:white;
        font-size: 14px;
        font-weight: bold;
        width: 250px;

    }

    .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes > .Albumes__album > .Album__disk{

        width: 80px;

    }

    .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes > .Albumes__album > .Album__disk > img{

        filter: drop-shadow(0px 0px 8px black);
        animation-name: girar_vinilo;
        animation-duration: 26s;
        animation-iteration-count: infinite;

    }

    @keyframes girar_vinilo{

        0%{
            transform: rotate(0deg);
        }

        100%{

            transform: rotate(360deg);
        }
    }

    .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes > .Albumes__album > .Album__title{

        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 29px;

    }




    /* _____________________________________     */



    .ContainerMusica__grid >  .ContainerMusica__album{

        grid-area: album;
        width: 100%;
        margin-top: 1%;
    }

    .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain{
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: row-reverse;
    }

    .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__caratula{
        width:45%;
    }

    .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__caratula > img{
        height:100%;
    }


    .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__info{
        width:55%;
        font-size: 12px;
        color:white;
        padding: 5px;
    }
    

    .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__info > .AlbumMain__name{

        width: 100%;
        height: 19%;
        font-size: 18px;
        color: #BD0012;
        font-weight: bold;
    }

    .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__info > .AlbumMain__songs , .AlbumMain__duration{
        padding-bottom: 5px;
        margin: 3px;
        display: flex;
        justify-content: start;
        align-items: center;
    }

    .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__info > .AlbumMain__songs > svg {
        margin-right: 7px;
        
    }

    .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__info > .AlbumMain__duration > svg {
        margin-right: 7px;
        
    } 

    .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__info > .AlbumMain__description{

        height: 44%;
        overflow-y: scroll;
        
    }



    /* _________________________________________*/

    .ContainerMusica__grid >  .ContainerMusica__reproductor{

        grid-area: reproductor;
        width: 100%
    }



    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor{

        width: 100%;
        height: 100%;
        position: relative;
        background: #040a09;
        border-radius: 8px;
        padding: 6px;
        box-shadow: 0px 0px 12px black;


    }


    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__caratula{

        height:90px;
        filter: contrast(1.2);

    }

    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__caratula > img{

        border-radius: 5px;

    }


    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__titleSong{

        position: absolute;
        color:white;
        font-size: 17px;
        font-weight: bold;
        top:3px;
        left:100px;
    }



    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__album{

        position: absolute;
        color:white;
        font-size: 13px;
        top:29px;
        left:100px;
    }
        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__duration{

        position: absolute;
        color:white;
        font-size: 13px;
        top:49px;
        left:100px;
    }


    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__controls{

        width:130px;
        left: 35%;
        top:78px;
        position: absolute;
        display: flex;
        justify-content: space-around;
        align-items: center;

    }

    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__controls > .icon_before{

        width:26px;
        height:26px;
    }

    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__controls > .icon_play{

        width:35px;
        height:35px;
    }

    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__controls > .icon_after{

        width:26px;
        height: 26px;
    }


    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine{

        width: 100%;
        height: 23%;
        padding: 5px;
        position: relative;
        top:1%;
    }

    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine > .TimeLine__Line{

        width: 99%;
        height: 6px;
        border-radius: 15px;
        background: white;
        position: absolute;
        top:125%;

    }

    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine > .TimeLine__circle{

        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #BD0012;
        position: absolute;
        top:108%;
    }

    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine > .TimeLine__timeStart , .TimeLine__timeEnd{

        font-size: 12px;
        color:white;
        position: absolute;
        top:58%;
    }

    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine > .TimeLine__timeStart{
        
        left: 2%;
    }


    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine > .TimeLine__timeEnd{

        left:92%;
    }


    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor >.Reproductor__btnList{

        position: absolute;
        left:88%;
        top:10px;
        
    }

    .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__sound{

        position: absolute;
        left: 90%;
        top:83px;
    }


    /* ______________________________________________*/

    .ContainerMusica__grid >  .ContainerMusica__lista{

       display: none;
    }



    






    @media(min-width:800px){

        .ContainerMusica{

            width: 85vw;
            height: 78vh;
            margin-left:9vw;
            margin-top: 9vh;
            border-radius: 8px;
            overflow-x: hidden;
            overflow-y: scroll;
        }

        .ContainerMusica__grid{

            grid-template-areas: "album albumes"
                                "album albumes"
                                "reproductor lista"
                                "reproductor lista";

            grid-template-columns: 1fr 1fr;
            grid-template-rows: 25% 24% 24% 22%; 
            grid-gap: 3%;
        }

        .ContainerMusica__grid >  .ContainerMusica__albumes{

            width: 39vw;
        }
        .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes__title{

            padding-left: 5%;
            font-size: 22px;
            height: 19%;
        }

        .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes{
            
            width: 100%;
            margin-left: 0%;
            padding-top: 12px;

        }

        .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes > .Albumes__album{

            margin-left: 35px;
            margin-right: 35px;
            font-size: 18px;


        }

        .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes > .Albumes__album > .Album__disk{

            width: 104px;

        }



        .ContainerMusica__grid >  .ContainerMusica__albumes > .Albumes > .Albumes__album > .Album__title{

            height: 56px;

        }

        /* ___________________________*/



        .ContainerMusica__grid >  .ContainerMusica__album{

            grid-area: album;
            width:39vw;
        }


        .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain{
            flex-direction: initial;
        }


        .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__info{
            width:50%;
            font-size: 15px;
        }
       

        .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__info > .AlbumMain__name{

            height: 16%;
            font-size: 23px;

        }


        .ContainerMusica__grid >  .ContainerMusica__album > .AlbumMain > .AlbumMain__info > .AlbumMain__description{

            height: 50%;
            
        }

        /*________________________*/






        .ContainerMusica__grid >  .ContainerMusica__reproductor{

            grid-area: reproductor;
            width: 39vw;
        }


        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor{

            margin-top: 1%;
            width: 100%;
            height: 94%;


        }


        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__caratula{

            height:150px;

        }



        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__titleSong{

            font-size: 20px;
            left:170px;
        }


         .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__album{

            font-size: 14px;
            top:43px;
            left:170px;
        }

        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__duration{

            font-size: 14px;
            top:68px;
            left:170px;
        }


        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__controls{

            width:160px;
            left: 41%;
            top:105px;

        }

        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__controls > .icon_before{

            width:36px;
            height:36px;
        }

        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__controls > .icon_play{

            width:53px;
            height:53px;
        }

        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__controls > .icon_after{

            width:36px;
            height:36px;
        }


        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine > .TimeLine__Line{
            top:70%;

        }

        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine > .TimeLine__circle{
            top:63%;
        }

        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine > .TimeLine__timeStart , .TimeLine__timeEnd{

            font-size: 14px;
            top:10%;
        }

        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine > .TimeLine__timeStart{
            
            left: 2%;
        }


        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__TimeLine > .TimeLine__timeEnd{

            left:93%;
        }


        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor >.Reproductor__btnList{

            display: none;
            
        }

        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__sound{

            top:120px;
            left:92%;
        }

        .ContainerMusica__grid >  .ContainerMusica__reproductor > .Reproductor > .Reproductor__sound > svg{

            width: 29px;
            height: 29px;
        }




        /* _____________________________________  */

        .ContainerMusica__grid >  .ContainerMusica__lista{

            display: block;
            grid-area: lista;
            width: 39vw;
        }

        .ContainerMusica__grid >  .ContainerMusica__lista > .Lista__title{

            width: 100%;
            height: 50px;
            border-radius: 5px;
            background: #BD0012;
            color: white;
            display: flex;
            justify-content: start;
            font-size: 20px;
            font-weight: bold;
            align-items: center;
            padding-left: 30px;
        }

        .ContainerMusica__grid >  .ContainerMusica__lista > .Lista__title > .Lista__iconTitle{

        }

        .ContainerMusica__grid >  .ContainerMusica__lista > .Lista__title > .Lista__nameList{

            margin-left: 40px;
        }

        .ContainerMusica__grid >  .ContainerMusica__lista > .Lista__songs{

            height: calc(96% - 50px);
            width: 100%;
            overflow-y: scroll;
            overflow-x: hidden;
            padding: 3px;

        }

        .ContainerMusica__grid >  .ContainerMusica__lista > .Lista__songs > .Lista__song{

            width: 100%;
            height: 60px;
            background: #040a09;
            border-radius: 5px;
            box-shadow: 0px 0px 10px black;
            color:white;
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            margin-top:10px;
            padding: 4px;

        }

        .ContainerMusica__grid >  .ContainerMusica__lista > .Lista__songs > .Lista__song > .caratulaSong{

            height: 100%;
        }

        .ContainerMusica__grid >  .ContainerMusica__lista > .Lista__songs > .Lista__song > .iconSong{
            margin-left:5%;
            width: 4%
        } 

        .ContainerMusica__grid >  .ContainerMusica__lista > .Lista__songs > .Lista__song > .nameSong{

            margin-left: 7%;
            font-size: 17px;
            font-weight: bold;
            width: 48%;

        } 

        .ContainerMusica__grid >  .ContainerMusica__lista > .Lista__songs > .Lista__song > .timeSong{
            font-size: 17px;
            margin-left: 12%;
            width: 10%;
        } 


    }

</style>

<div class="ContainerMusica screen-container">

    <div class="ContainerMusica__close d-flex justify-content-end ">
        <a href="/" class="ContainerInicio__icon">
            <svg width="19" height="19" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5 11.5L2 2M11.5 11.5L21 21M11.5 11.5L21 2M11.5 11.5L2 21" stroke="#BD0012" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                
            </a>
    </div>

    <div class="ContainerMusica__grid">

        <div class="ContainerMusica__albumes">
            <div class="Albumes__title">
                Albumes
            </div>
            <div class="Albumes">


                <div class="Albumes__album">
                    <div class="Album__disk">
                        <img width="100%" src="/assets/music-page/vinilo-inner.png" />
                    </div>
                    <div class="Album__title">
                        Inner Desire
                    </div>

                </div>

                <div class="Albumes__album">
                    <div class="Album__disk">
                        <img width="100%" src="/assets/music-page/vinilo-negro.png" />
                    </div>
                    <div class="Album__title">
                       Proximamente
                    </div>

                </div>

                <div class="Albumes__album">
                    <div class="Album__disk">
                        <img width="100%" src="/assets/music-page/vinilo-negro.png" />
                    </div>
                    <div class="Album__title">
                       Proximamente
                    </div>

                </div>

                <div class="Albumes__album">
                    <div class="Album__disk">
                        <img width="100%" src="/assets/music-page/vinilo-negro.png" />
                    </div>
                    <div class="Album__title">
                       Proximamente
                    </div>

                </div>

                <div class="Albumes__album">
                    <div class="Album__disk">
                        <img width="100%" src="/assets/music-page/vinilo-negro.png" />
                    </div>
                    <div class="Album__title">
                       Proximamente
                    </div>

                </div>


            </div>
        </div>

        <div class="ContainerMusica__album">
            <div class="AlbumMain">
                <div class="AlbumMain__caratula">
                    <img width="100%"  src="/assets/music-page/caratula-inner.png" alt="" srcset="">
                </div>
                <div class="AlbumMain__info">
                    <div class="AlbumMain__name">
                        Inner Desire
                    </div>
                    <div class="AlbumMain__songs">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.2 5.6V4H8V8.4C7.664 8.152 7.256 8 6.8 8C6.26957 8 5.76086 8.21071 5.38579 8.58579C5.01071 8.96086 4.8 9.46957 4.8 10C4.8 10.5304 5.01071 11.0391 5.38579 11.4142C5.76086 11.7893 6.26957 12 6.8 12C7.33043 12 7.83914 11.7893 8.21421 11.4142C8.58929 11.0391 8.8 10.5304 8.8 10V5.6H11.2ZM8 0C9.05058 0 10.0909 0.206926 11.0615 0.608964C12.0321 1.011 12.914 1.60028 13.6569 2.34315C14.3997 3.08601 14.989 3.96793 15.391 4.93853C15.7931 5.90914 16 6.94942 16 8C16 10.1217 15.1571 12.1566 13.6569 13.6569C12.1566 15.1571 10.1217 16 8 16C6.94942 16 5.90914 15.7931 4.93853 15.391C3.96793 14.989 3.08601 14.3997 2.34315 13.6569C0.842855 12.1566 0 10.1217 0 8C0 5.87827 0.842855 3.84344 2.34315 2.34315C3.84344 0.842855 5.87827 0 8 0Z" fill="white"/>
                        </svg>
                            
                        Album de 7 canciones
                    </div>
                    <div class="AlbumMain__duration">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.992 0C3.576 0 0 3.584 0 8C0 12.416 3.576 16 7.992 16C12.416 16 16 12.416 16 8C16 3.584 12.416 0 7.992 0ZM10.632 11.768L7.2 8.328V4H8.8V7.672L11.768 10.64L10.632 11.768Z" fill="white"/>
                        </svg>
                        Duración: 23:43 min
                    </div>
                    <div class="AlbumMain__description">
                        Lorem ipsum dolor sit amet consectetur. 
                        Vestibulum justo vitae rutrum odio. Egestas tellus ac ullamcorper
                         amet lectus fames elit enim nulla. Sit mi vel eu mollis volutpat. 
                         Commodo a rhoncus varius amet.
                    </div>
                </div>

            </div>
        </div>

        <div class="ContainerMusica__reproductor">
        
            <div class="Reproductor">
                <div class="Reproductor__caratula">
                    <img height="100%" src="/assets/music-page/img-my-own-demon.png"/>
                </div>

                <div class="Reproductor__titleSong">
                    My Own Demon
                </div>

                <div class="Reproductor__album">
                    <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 3.15789V5.52632H11.6V9.56053C10.128 9.8921 9.008 11.1237 8.832 12.6316H1.6C1.17565 12.6316 0.768687 12.4652 0.468629 12.1691C0.168571 11.873 0 11.4714 0 11.0526V1.57895C0 0.702631 0.712 0 1.6 0H6.4L8 1.57895H14.4C14.8243 1.57895 15.2313 1.7453 15.5314 2.04141C15.8314 2.33752 16 2.73913 16 3.15789ZM13.2 7.10526V11.2184C12.9275 11.1006 12.6317 11.0443 12.3344 11.0536C12.037 11.0629 11.7455 11.1376 11.481 11.2721C11.2166 11.4067 10.9859 11.5978 10.8058 11.8315C10.6257 12.0652 10.5007 12.3356 10.4399 12.623C10.3791 12.9104 10.384 13.2076 10.4543 13.4928C10.5247 13.7781 10.6586 14.0443 10.8464 14.2721C11.0342 14.4998 11.2711 14.6833 11.5399 14.8093C11.8086 14.9352 12.1025 15.0003 12.4 15C12.9304 15 13.4391 14.7921 13.8142 14.4219C14.1893 14.0518 14.4 13.5498 14.4 13.0263V8.68421H16V7.10526H13.2Z" fill="white"/>
                    </svg>
                   Album: Inner Desire
                </div>

                <div class="Reproductor__duration">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.992 0C3.576 0 0 3.584 0 8C0 12.416 3.576 16 7.992 16C12.416 16 16 12.416 16 8C16 3.584 12.416 0 7.992 0ZM10.632 11.768L7.2 8.328V4H8.8V7.672L11.768 10.64L10.632 11.768Z" fill="white"/>
                    </svg>
                    3:43 min
                </div>

                <div class="Reproductor__controls">

                    <svg class="icon_before" width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.05 2.59L11.625 12.0867C10.225 13.02 10.225 14.98 11.625 15.89L26.05 25.41C27.725 26.4833 30 25.3867 30 23.4967L30 4.50333C30 2.61333 27.725 1.51667 26.05 2.59ZM5 25.6667L5 2.33333C5 1.05 3.875 9.53674e-07 2.5 9.53674e-07C1.125 9.53674e-07 0 1.05 0 2.33333L0 25.6667C0 26.95 1.125 28 2.5 28C3.875 28 5 26.95 5 25.6667Z" fill="white"/>
                    </svg>


                    <svg class="icon_play" width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5 19.045V32.955C19.5 33.9517 19.955 34.71 20.865 35.23C21.775 35.75 22.6633 35.7067 23.53 35.1L34.32 28.21C35.1433 27.69 35.555 26.9533 35.555 26C35.555 25.0467 35.1433 24.31 34.32 23.79L23.53 16.9C22.6633 16.2933 21.775 16.25 20.865 16.77C19.955 17.29 19.5 18.0483 19.5 19.045ZM26 52C22.4033 52 19.0233 51.3171 15.86 49.9512C12.6967 48.5871 9.945 46.735 7.605 44.395C5.265 42.055 3.41293 39.3033 2.0488 36.14C0.682934 32.9767 0 29.5967 0 26C0 22.4033 0.682934 19.0233 2.0488 15.86C3.41293 12.6967 5.265 9.945 7.605 7.605C9.945 5.265 12.6967 3.41207 15.86 2.0462C19.0233 0.682066 22.4033 0 26 0C29.5967 0 32.9767 0.682066 36.14 2.0462C39.3033 3.41207 42.055 5.265 44.395 7.605C46.735 9.945 48.5871 12.6967 49.9512 15.86C51.3171 19.0233 52 22.4033 52 26C52 29.5967 51.3171 32.9767 49.9512 36.14C48.5871 39.3033 46.735 42.055 44.395 44.395C42.055 46.735 39.3033 48.5871 36.14 49.9512C32.9767 51.3171 29.5967 52 26 52Z" fill="white"/>
                    </svg>

                    <svg class="icon_after" width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.95 25.41L18.375 15.9133C19.775 14.98 19.775 13.02 18.375 12.11L3.95 2.59C2.275 1.51667 0 2.61333 0 4.50333V23.4967C0 25.3867 2.275 26.4833 3.95 25.41ZM25 2.33333V25.6667C25 26.95 26.125 28 27.5 28C28.875 28 30 26.95 30 25.6667V2.33333C30 1.05 28.875 0 27.5 0C26.125 0 25 1.05 25 2.33333Z" fill="white"/>
                    </svg>
                        
                        
                </div>

                <div class="Reproductor__btnList">
                    <svg width="29" height="23" viewBox="0 0 34 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0.944444 28C0.692593 28 0.472222 27.9125 0.283334 27.7375C0.0944446 27.5625 0 27.3583 0 27.125C0 26.8917 0.0944446 26.6875 0.283334 26.5125C0.472222 26.3375 0.692593 26.25 0.944444 26.25H3.77778V25.375H2.83333C2.58148 25.375 2.36111 25.2875 2.17222 25.1125C1.98333 24.9375 1.88889 24.7333 1.88889 24.5C1.88889 24.2667 1.98333 24.0625 2.17222 23.8875C2.36111 23.7125 2.58148 23.625 2.83333 23.625H3.77778V22.75H0.944444C0.692593 22.75 0.472222 22.6625 0.283334 22.4875C0.0944446 22.3125 0 22.1083 0 21.875C0 21.6417 0.0944446 21.4375 0.283334 21.2625C0.472222 21.0875 0.692593 21 0.944444 21H4.72222C4.97407 21 5.19444 21.0875 5.38333 21.2625C5.57222 21.4375 5.66667 21.6417 5.66667 21.875V27.125C5.66667 27.3583 5.57222 27.5625 5.38333 27.7375C5.19444 27.9125 4.97407 28 4.72222 28H0.944444ZM2.83333 7C2.58148 7 2.36111 6.9125 2.17222 6.7375C1.98333 6.5625 1.88889 6.35833 1.88889 6.125V1.75H0.944444C0.692593 1.75 0.472222 1.6625 0.283334 1.4875C0.0944446 1.3125 0 1.10833 0 0.875C0 0.641667 0.0944446 0.4375 0.283334 0.2625C0.472222 0.0875002 0.692593 0 0.944444 0H2.83333C3.08519 0 3.30556 0.0875002 3.49444 0.2625C3.68333 0.4375 3.77778 0.641667 3.77778 0.875V6.125C3.77778 6.35833 3.68333 6.5625 3.49444 6.7375C3.30556 6.9125 3.08519 7 2.83333 7ZM0.944444 17.5C0.692593 17.5 0.472222 17.4125 0.283334 17.2375C0.0944446 17.0625 0 16.8583 0 16.625V16.2312C0 16.1146 0.0787037 15.925 0.236111 15.6625L3.4 12.25H0.944444C0.692593 12.25 0.472222 12.1625 0.283334 11.9875C0.0944446 11.8125 0 11.6083 0 11.375C0 11.1417 0.0944446 10.9375 0.283334 10.7625C0.472222 10.5875 0.692593 10.5 0.944444 10.5H4.72222C4.97407 10.5 5.19444 10.5875 5.38333 10.7625C5.57222 10.9375 5.66667 11.1417 5.66667 11.375V11.7688C5.66667 11.8854 5.58796 12.075 5.43056 12.3375L2.26667 15.75H4.72222C4.97407 15.75 5.19444 15.8375 5.38333 16.0125C5.57222 16.1875 5.66667 16.3917 5.66667 16.625C5.66667 16.8583 5.57222 17.0625 5.38333 17.2375C5.19444 17.4125 4.97407 17.5 4.72222 17.5H0.944444ZM11.3333 26.25C10.7981 26.25 10.3499 26.082 9.98844 25.746C9.62578 25.4112 9.44444 24.9958 9.44444 24.5C9.44444 24.0042 9.62578 23.5888 9.98844 23.254C10.3499 22.918 10.7981 22.75 11.3333 22.75H32.1111C32.6463 22.75 33.0946 22.918 33.456 23.254C33.8187 23.5888 34 24.0042 34 24.5C34 24.9958 33.8187 25.4112 33.456 25.746C33.0946 26.082 32.6463 26.25 32.1111 26.25H11.3333ZM11.3333 15.75C10.7981 15.75 10.3499 15.582 9.98844 15.246C9.62578 14.9112 9.44444 14.4958 9.44444 14C9.44444 13.5042 9.62578 13.0882 9.98844 12.7522C10.3499 12.4174 10.7981 12.25 11.3333 12.25H32.1111C32.6463 12.25 33.0946 12.4174 33.456 12.7522C33.8187 13.0882 34 13.5042 34 14C34 14.4958 33.8187 14.9112 33.456 15.246C33.0946 15.582 32.6463 15.75 32.1111 15.75H11.3333ZM11.3333 5.25C10.7981 5.25 10.3499 5.08258 9.98844 4.74775C9.62578 4.41175 9.44444 3.99583 9.44444 3.5C9.44444 3.00417 9.62578 2.58825 9.98844 2.25225C10.3499 1.91742 10.7981 1.75 11.3333 1.75H32.1111C32.6463 1.75 33.0946 1.91742 33.456 2.25225C33.8187 2.58825 34 3.00417 34 3.5C34 3.99583 33.8187 4.41175 33.456 4.74775C33.0946 5.08258 32.6463 5.25 32.1111 5.25H11.3333Z" fill="white"/>
                    </svg>
                </div>


                <div class="Reproductor__sound">
                    <svg width="22" height="22" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.0007 19.1202C17.5279 17.5525 20 14.1455 20 9.99978C20 5.85406 17.5279 2.44709 14.0007 0.879395V2.90615C16.3879 4.31069 17.9999 7.00728 17.9999 9.99978C17.9999 12.9923 16.3879 15.6889 14.0007 17.0934V19.1202Z" fill="white"/>
                        <path d="M14.0007 4.93312V15.0669C15.2258 13.9522 16.0008 11.7947 16.0008 10C16.0008 8.20531 15.2258 6.04783 14.0007 4.93312ZM2.0001 15.0669H4.69725L12.0006 20V0L4.69725 4.93312H2.0001C0.897047 4.93312 0 5.84212 0 6.95987V13.0401C0 14.1579 0.897047 15.0669 2.0001 15.0669Z" fill="white"/>
                        </svg>
                        
                </div>

                <div class="Reproductor__TimeLine">
                    <div class="TimeLine__Line"></div>
                    <div class="TimeLine__circle"></div>
                    <div class="TimeLine__timeStart">0:00</div>
                    <div class="TimeLine__timeEnd">3:43</div>
                </div>

            </div>
        </div>

        <div class="ContainerMusica__lista">
            <div class="Lista__title">
                <div class="Lista__iconTitle">
                    <svg width="35" height="35" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5 19.045V32.955C19.5 33.9517 19.955 34.71 20.865 35.23C21.775 35.75 22.6633 35.7067 23.53 35.1L34.32 28.21C35.1433 27.69 35.555 26.9533 35.555 26C35.555 25.0467 35.1433 24.31 34.32 23.79L23.53 16.9C22.6633 16.2933 21.775 16.25 20.865 16.77C19.955 17.29 19.5 18.0483 19.5 19.045ZM26 52C22.4033 52 19.0233 51.3171 15.86 49.9512C12.6967 48.5871 9.945 46.735 7.605 44.395C5.265 42.055 3.41293 39.3033 2.0488 36.14C0.682934 32.9767 0 29.5967 0 26C0 22.4033 0.682934 19.0233 2.0488 15.86C3.41293 12.6967 5.265 9.945 7.605 7.605C9.945 5.265 12.6967 3.41207 15.86 2.0462C19.0233 0.682066 22.4033 0 26 0C29.5967 0 32.9767 0.682066 36.14 2.0462C39.3033 3.41207 42.055 5.265 44.395 7.605C46.735 9.945 48.5871 12.6967 49.9512 15.86C51.3171 19.0233 52 22.4033 52 26C52 29.5967 51.3171 32.9767 49.9512 36.14C48.5871 39.3033 46.735 42.055 44.395 44.395C42.055 46.735 39.3033 48.5871 36.14 49.9512C32.9767 51.3171 29.5967 52 26 52Z" fill="white"/>
                    </svg>                        
                </div>
                <div class="Lista__nameList">
                    INNER DESIRE
                </div>
            </div>

            <div class="Lista__songs">
                
                <div class="Lista__song">

                    <div class="caratulaSong">
                        <img height="100%" src="/assets/music-page/img-my-own-demon.png" alt="" srcset="">
                    </div>
                    
                    <div class="iconSong">
                        <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.01234 24.6525C2.35391 25.0895 1.68691 25.1143 1.01136 24.7271C0.33712 24.3412 0 23.7448 0 22.938V2.06252C0 1.25574 0.33712 0.658718 1.01136 0.271462C1.68691 -0.114449 2.35391 -0.088901 3.01234 0.348107L19.1111 10.7859C19.7037 11.1893 20 11.7607 20 12.5003C20 13.2398 19.7037 13.8113 19.1111 14.2147L3.01234 24.6525Z" fill="white"/>
                        </svg>
                            
                    </div>
                    <div class="nameSong">
                       1.  My Own Demon
                    </div>
                    <div class="timeSong">
                        3:33
                    </div>
                </div>


            </div>

        </div>
    </div>

<br>
</div>

<script>

    const ListaSongs = document.getElementsByClassName('Lista__songs');
    const Songs = ['1. My Own Demon','2. Following Dreams', '3. Silence', '4. Conspiracy', '5. Behaving the Madness']

    ListaSongs[0].innerHTML="";
    Songs.map((element,index)=>{

        let Element  =  `
                        
            <div class="Lista__song">

                <div class="caratulaSong">
                    <img height="100%" src="/assets/music-page/img-my-own-demon.png" alt="" srcset="">
                </div>

                <div class="iconSong">
                    <svg width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.01234 24.6525C2.35391 25.0895 1.68691 25.1143 1.01136 24.7271C0.33712 24.3412 0 23.7448 0 22.938V2.06252C0 1.25574 0.33712 0.658718 1.01136 0.271462C1.68691 -0.114449 2.35391 -0.088901 3.01234 0.348107L19.1111 10.7859C19.7037 11.1893 20 11.7607 20 12.5003C20 13.2398 19.7037 13.8113 19.1111 14.2147L3.01234 24.6525Z" fill="white"/>
                    </svg>
                        
                </div>

                <div class="nameSong">
                ${element}
                </div>

                <div class="timeSong">
                    3:33
                </div>

            </div>
        
        `;

        ListaSongs[0].insertAdjacentHTML('beforeend',Element)
    })

    

</script>
<style>
    .ContainerGalery{

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

    .ContainerGalery > .ContainerGalery__close{
        width:99%;
        height: 40px;
        margin-left: 1%;
        cursor:pointer;
        position: fixed;
        z-index: 9999;
    }

    .ContainerGalery > .ContainerGalery__name{
        
        position: absolute;
        color: white;
        font-size: 18px;
    }

    .ContainerGalery__grid{

        display: grid;
        width: 98%;
        margin-left: 1%;
        margin-top: 1%;
        grid-template-areas: "fotos1 fotos1"
                            "fotos2 fotos2"
                            "fotos3 fotos3"
                            "fotos4 fotos4";

        grid-template-columns: 1fr 1fr;
        grid-template-rows:200px 200px 200px 200px;
        grid-gap: 2%; 
        margin-bottom: 50px;
        margin-top: 45px
    }

    .ContainerGalery__grid > .Grid__fotos1{
        grid-area: fotos1;

    }

    .GaleryGridContainer1{
        overflow-x: scroll;
        overflow-y: hidden;
        
        display: flex;
        align-items: center;
        padding: 5px;
        width: 100%;
        height: 100%;
    }

    .GaleryGridContainer1 > .CardFotos1{

        margin-left: 12px;
        margin-right: 12px;
        position: relative;
        box-shadow: 5px 5px 15px black;
        cursor: pointer;
        
    }

    .GaleryGridContainer1 > .CardFotos1 > img{

        width: 160px;
        
    }

    .GaleryGridContainer1 > .CardFotos1 > p{

        position: absolute;
        top:85%;
        width: 100%;
        color: white;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-shadow: 0px 0px 18px black;
        background: rgba(0,0,0,0.45);
        border-radius: 3px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5px;
    }

    /*___*/
    .ContainerGalery__grid > .Grid__fotos2{
        grid-area: fotos2;

    }

    .GaleryGridContainer2 {
        
        display: flex;
        align-items: center;
        overflow-x: scroll;
        overflow-y: hidden;
        width: 100%;
        height: 100%;
    }

    .GaleryGridContainer2 > .CardFotos2{

        margin-left: 12px;
        margin-right: 12px;
        position: relative;
        box-shadow: 5px 5px 15px black;
        cursor:pointer;
        
    }

    .GaleryGridContainer2 > .CardFotos2 > img{

        height:153px;

    }

    .GaleryGridContainer2 > .CardFotos2 > p{

        position: absolute;
        top:87%;
        width: 100%;
        color: white;
        font-size: 16px;
        font-weight: bold;
        text-align: center;
        text-shadow: 0px 0px 18px black;
        background: rgba(0,0,0,0.45);
        border-radius: 3px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 5px;

    }

    .ContainerGalery__grid > .Grid__fotos3{
        grid-area: fotos3;

    }
    .ContainerGalery__grid > .Grid__fotos4{
        grid-area: fotos4;

    }

    /*_:::::::::::::::::::::*/

    .ContainerGalery__ViewMediaElem{

        width: 100%;
        height: 100%;
        position: fixed;
        z-index: 9999;
        background: black;
        top:0%;
    }



    .ContainerGalery__ViewMediaElem > .closeView{

        width: 100%;
        display: flex;
        justify-content: end;
        padding: 26px;
        height: 50px;
        cursor:pointer;
    }

    .ContainerGalery__ViewMediaElem > .viewTitle{

        width: 100%;
        display: flex;
        justify-content: center;
        padding: 10px;
        height: 70px;
        color: white;
        font-size: 21px;
        align-items: center;
        text-align: center;
    }

    .ContainerGalery__ViewMediaElem > .viewElement{

        width: 100%;        
        height: 60%;
        display: flex;
        align-items: center;

    }

    .ContainerGalery__ViewMediaElem > .viewElement > img{

        width: 98%;
        margin-left: 1%;

    }

    .ContainerGalery__ViewMediaElem > .viewButtons{

        width: 100%;
        height: 50px;
        display: flex;
        justify-content: space-around;
        align-items: center;
        padding: 12px;
        

    }

    .ContainerGalery__ViewMediaElem > .viewButtons > div{
        font-size: 18px;
    }





    @media(min-width:800px){

        .ContainerGalery{

            width: 85vw;
            height: 78vh;
            margin-left:9vw;
            margin-top: 9vh;
            border-radius: 8px;
            overflow-x: hidden;
            overflow-y: scroll;
        }

        .ContainerGalery__grid {
            grid-template-rows: 300px 330px 300px 330px;

        }

        .GaleryGridContainer1 > .CardFotos1 > img {
            width: 268px;
        }

        .GaleryGridContainer1 > .CardFotos1 > p{

            font-size: 20px;
        }
        .GaleryGridContainer2 > .CardFotos2 > img {
            height: 305px;
        }

        .GaleryGridContainer2 > .CardFotos2 > p{

            font-size: 20px;
        }

        /*###############*/


        .ContainerGalery__ViewMediaElem > .viewElement {
            width: 50%;
            height: 60%;
            display: flex;
            align-items: center;
            margin-left: 25%;
            
        }

        .ContainerGalery__ViewMediaElem > .viewElement > img{

           height: 100%;
           width: 100%;


            }

    }

    @media(min-width:1490px){
        .ContainerGalery__grid {
            grid-template-rows: 330px 360px 330px 360px;

        }

        .GaleryGridContainer1 > .CardFotos1 > img {
            width: 298px;
        }

        .GaleryGridContainer1 > .CardFotos1 > p{

            font-size: 24px;
        }
        .GaleryGridContainer2 > .CardFotos2 > img {
            height: 335px;
        }

        .GaleryGridContainer2 > .CardFotos2 > p{

            font-size: 24px;
        }

    }
    

</style>

<div class="ContainerGalery screen-container">

    <div class="ContainerGalery__name">
        GALERIA 
        <svg width="25" height="21" viewBox="0 0 25 21" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.75 0H6.25C5.91848 0 5.60054 0.138281 5.36612 0.384422C5.1317 0.630564 5 0.964403 5 1.3125V5.25H11.25V2.625H18.75V15.75H23.75C24.0815 15.75 24.3995 15.6117 24.6339 15.3656C24.8683 15.1194 25 14.7856 25 14.4375V1.3125C25 0.964403 24.8683 0.630564 24.6339 0.384422C24.3995 0.138281 24.0815 0 23.75 0V0ZM9.0625 4.22461C9.0625 4.32251 9.02546 4.4164 8.95953 4.48563C8.8936 4.55486 8.80418 4.59375 8.71094 4.59375H7.53906C7.44582 4.59375 7.3564 4.55486 7.29047 4.48563C7.22454 4.4164 7.1875 4.32251 7.1875 4.22461V2.99414C7.1875 2.89624 7.22454 2.80235 7.29047 2.73312C7.3564 2.66389 7.44582 2.625 7.53906 2.625H8.71094C8.80418 2.625 8.8936 2.66389 8.95953 2.73312C9.02546 2.80235 9.0625 2.89624 9.0625 2.99414V4.22461ZM22.8125 12.7559C22.8125 12.8538 22.7755 12.9477 22.7095 13.0169C22.6436 13.0861 22.5542 13.125 22.4609 13.125H21.2891C21.1958 13.125 21.1064 13.0861 21.0405 13.0169C20.9745 12.9477 20.9375 12.8538 20.9375 12.7559V11.5254C20.9375 11.4275 20.9745 11.3336 21.0405 11.2644C21.1064 11.1951 21.1958 11.1562 21.2891 11.1562H22.4609C22.5542 11.1562 22.6436 11.1951 22.7095 11.2644C22.7755 11.3336 22.8125 11.4275 22.8125 11.5254V12.7559ZM22.8125 8.49023C22.8125 8.58814 22.7755 8.68203 22.7095 8.75126C22.6436 8.82048 22.5542 8.85938 22.4609 8.85938H21.2891C21.1958 8.85938 21.1064 8.82048 21.0405 8.75126C20.9745 8.68203 20.9375 8.58814 20.9375 8.49023V7.25977C20.9375 7.16186 20.9745 7.06797 21.0405 6.99874C21.1064 6.92952 21.1958 6.89062 21.2891 6.89062H22.4609C22.5542 6.89062 22.6436 6.92952 22.7095 6.99874C22.7755 7.06797 22.8125 7.16186 22.8125 7.25977V8.49023ZM22.8125 4.22461C22.8125 4.32251 22.7755 4.4164 22.7095 4.48563C22.6436 4.55486 22.5542 4.59375 22.4609 4.59375H21.2891C21.1958 4.59375 21.1064 4.55486 21.0405 4.48563C20.9745 4.4164 20.9375 4.32251 20.9375 4.22461V2.99414C20.9375 2.89624 20.9745 2.80235 21.0405 2.73312C21.1064 2.66389 21.1958 2.625 21.2891 2.625H22.4609C22.5542 2.625 22.6436 2.66389 22.7095 2.73312C22.7755 2.80235 22.8125 2.89624 22.8125 2.99414V4.22461ZM16.25 6.5625H1.25C0.918479 6.5625 0.600537 6.70078 0.366117 6.94692C0.131696 7.19306 0 7.5269 0 7.875L0 19.6875C0 20.0356 0.131696 20.3694 0.366117 20.6156C0.600537 20.8617 0.918479 21 1.25 21H16.25C16.5815 21 16.8995 20.8617 17.1339 20.6156C17.3683 20.3694 17.5 20.0356 17.5 19.6875V7.875C17.5 7.5269 17.3683 7.19306 17.1339 6.94692C16.8995 6.70078 16.5815 6.5625 16.25 6.5625ZM3.75 9.1875C3.99723 9.1875 4.2389 9.26448 4.44446 9.4087C4.65002 9.55292 4.81024 9.7579 4.90485 9.99773C4.99946 10.2376 5.02421 10.5015 4.97598 10.7561C4.92775 11.0107 4.8087 11.2445 4.63388 11.4281C4.45907 11.6116 4.23634 11.7366 3.99386 11.7873C3.75139 11.8379 3.50005 11.8119 3.27165 11.7126C3.04324 11.6133 2.84801 11.445 2.71066 11.2292C2.57331 11.0133 2.5 10.7596 2.5 10.5C2.5 10.1519 2.6317 9.81806 2.86612 9.57192C3.10054 9.32578 3.41848 9.1875 3.75 9.1875ZM15 18.375H2.5V17.0625L5 14.4375L6.25 15.75L11.25 10.5L15 14.4375V18.375Z" fill="white"/>
        </svg>
            
    </div>
   
    <div class="ContainerGalery__close d-flex justify-content-end ">
        <a href="/" class="ContainerInicio__icon">
            <svg width="19" height="19" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.5 11.5L2 2M11.5 11.5L21 21M11.5 11.5L21 2M11.5 11.5L2 21" stroke="#BD0012" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
                
            </a>
    </div>

    <div class="ContainerGalery__grid">

        <div class="Grid__fotos1"> 
            <div class="GaleryGridContainer1"></div>
        </div>

        <div class="Grid__fotos2">
            <div class="GaleryGridContainer2"></div>
        </div>

        <div class="Grid__fotos3">
            <div class="GaleryGridContainer1"></div>
        </div>
        
        <div class="Grid__fotos4">
            <div class="GaleryGridContainer2"></div>
        </div>
    </div>
</div>
<script>

    const containerFotos1 = document.getElementsByClassName('GaleryGridContainer1');
    const containerFotos2 = document.getElementsByClassName('GaleryGridContainer2'); 

    const fotos1 = [
        '/assets/galery-page/img-main-3.png',
        '/assets/galery-page/img-main-2.png',
        '/assets/galery-page/img-main-1.png',
        '/assets/galery-page/img-main-3.png',
        '/assets/galery-page/img-main-2.png',
        '/assets/galery-page/img-main-1.png'
    ];

    const textFotos1 = [
        ' Detras de camaras',
        'Redes sociales',
        'Ilustaciones',
        ' Detras de camaras',
        'Redes sociales',
        'Ilustaciones'
    ];

    const fotos2 = [
        '/assets/galery-page/img-main-4.png',
        '/assets/galery-page/img-main-5.png',
        '/assets/galery-page/img-main-4.png',
        '/assets/galery-page/img-main-5.png',
        '/assets/galery-page/img-main-4.png',
        '/assets/galery-page/img-main-5.png'
    ];

    const textFotos2 = [

        'Conciertos y eventos',
        'Video clips',
        'Conciertos y eventos',
        'Video clips',
        'Conciertos y eventos',
        'Video clips'
    ];
   
    
    let CardFotos1;
   
    fotos1.forEach((element,index)=>{

        CardFotos1 = `
            
            <div class="CardFotos1 CardGalery">

                <img src="${element}" alt="" srcset="">
                <p>${textFotos1[index]}</p>
            
            </div>
        
        `;

        containerFotos1[0].insertAdjacentHTML('beforeend',CardFotos1);
        containerFotos1[1].insertAdjacentHTML('beforeend',CardFotos1);

    })


    let CardFotos2;
    fotos2.forEach((element,index)=>{

        CardFotos2 = `
            <div class="CardFotos2 CardGalery">
                <img  src="${element}" alt="" srcset="">
                <p>${textFotos2[index]}</p>
            </div>
        
        `;

        containerFotos2[0].insertAdjacentHTML('beforeend',CardFotos2);
        containerFotos2[1].insertAdjacentHTML('beforeend',CardFotos2);

    });

    const CardGalery = document.getElementsByClassName('CardGalery');
    let stateGaleryImg = [];

    for(let i=0; i<CardGalery.length;i++){
        CardGalery[i].addEventListener('click',()=>{
            
            const img = CardGalery[i].children[0].currentSrc,
                 title = CardGalery[i].children[1].innerText
            ;

            
            const viewMediaElem = `
            
                <div class="ContainerGalery__ViewMediaElem">

                    <div class="closeView">
                        <svg width="19" height="19" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.5 11.5L2 2M11.5 11.5L21 21M11.5 11.5L21 2M11.5 11.5L2 21" stroke="#BD0012" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>    
                    </div>

                    <div class="viewTitle">
                        ${title}
                    </div>

                    <div class="viewElement">
                        <img class="imgView" src="${img}" alt="${title}" />
                    </div>

                    <div class="viewButtons">
                        
                        <div class="btn btn-outline-light view-anterior">Anterior</div>
                        <div class="btn btn-outline-light view-siguiente">Siguiente</div>

                    </div>
                </div>
            
            `;

            document.getElementsByClassName('ContainerGalery')[0].insertAdjacentHTML('beforebegin',viewMediaElem);

            const  View = document.getElementsByClassName('ContainerGalery__ViewMediaElem')[0];
            const closeView = document.getElementsByClassName('closeView')[0];

            const btnNext = document.getElementsByClassName('view-siguiente')[0];
            const btnPrevious = document.getElementsByClassName('view-anterior')[0];
            const ViewTitle = document.getElementsByClassName('viewTitle')[0];
            const ViewImg = document.getElementsByClassName('imgView')[0];

            
            btnNext.addEventListener('click',()=>{
                
               
                if(i < (CardGalery.length -1)){

                    ViewImg.src = CardGalery[i+1].children[0].currentSrc;
                    ViewTitle.innerHTML = CardGalery[i+1].children[1].innerText;
                    i++;
                }  
            });

            btnPrevious.addEventListener('click',()=>{

                if(i>0){

                    ViewImg.src = CardGalery[i-1].children[0].currentSrc;
                    ViewTitle.innerHTML = CardGalery[i-1].children[1].innerText;
                    i--;
                }
            })
            closeView.addEventListener('click',()=>{
                View.remove();
                i = 0;
            });

        });
    }
    

    

</script>
{{--<style>

    .LanguageDesktop{


        display: none;

    }

    @media(min-width:800px){


        .LanguageDesktop{

            color:white;
            position: absolute;
            z-index:99;
            left:calc(100% - 235px);
            top:4%;
            display: flex;
            justify-content: space-around;
            width: 210px;
            cursor:pointer;
        }
    }

</style>--}}

<div class="LanguageDesktop">
    
    <div class="LanguagueDesktop__iconCart carrito">
        <svg width="30" height="28" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.735802 0.000813428C0.511322 0.0282412 0.308564 0.132095 0.172134 0.289527C0.0357041 0.446959 -0.0232228 0.645075 0.00831677 0.84029C0.0398563 1.03551 0.159279 1.21183 0.340312 1.33047C0.521346 1.44912 0.749162 1.50036 0.973642 1.47293H3.90982C4.39566 1.47293 4.55055 1.55758 4.67667 1.65695C4.80278 1.75632 4.96021 1.95653 5.09987 2.37019L9.06782 14.1008C9.07497 14.1242 9.08344 14.1473 9.09321 14.17C9.09321 14.17 10.0336 16.1941 12.4001 16.1941H19.0393C19.2638 16.1941 19.4791 16.1166 19.6378 15.9786C19.7966 15.8405 19.8857 15.6533 19.8857 15.4581C19.8857 15.2629 19.7966 15.0756 19.6378 14.9376C19.4791 14.7996 19.2638 14.722 19.0393 14.722H12.4001C11.1517 14.722 10.654 13.6179 10.654 13.6179L10.5219 13.2499H17.399C18.2708 13.2499 18.6652 12.6139 18.7482 12.3755L21.7901 6.69455C22.2607 5.71264 22.0144 4.41718 20.2818 4.41718H8.00896C7.86846 4.41718 7.71188 4.44809 7.56037 4.48636C7.25566 3.58616 6.7749 2.13833 6.71396 1.95579C6.53622 1.43098 6.29922 0.934874 5.81423 0.552859C5.32924 0.170843 4.65466 0.000813428 3.90982 0.000813428H0.973642C0.947136 -0.000271143 0.920586 -0.000271143 0.89408 0.000813428C0.867574 -0.000270058 0.841024 -0.000270058 0.814518 0.000813428C0.788575 -0.000221314 0.762591 -0.000221314 0.736649 0.000813428H0.735802ZM8.27389 5.93567H11.8449V7.24586H8.75042L8.35261 6.14176C8.32552 6.0608 8.28489 5.99161 8.27389 5.93567ZM12.9554 5.93567H15.2305V7.24586H12.9554V5.93567ZM16.341 5.93567H20.2556C20.2441 5.99051 20.2265 6.04424 20.2031 6.09613L19.5946 7.24659H16.341V5.93567ZM9.09406 8.2123H11.8449V9.45477H9.5435L9.09406 8.2123ZM12.9554 8.2123H15.2305V9.45477H12.9554V8.2123ZM16.341 8.2123H19.0656L18.4045 9.45477H16.341V8.2123ZM9.88714 10.4205H11.8449V11.7314H10.4432C10.4094 11.7314 10.3907 11.7218 10.3637 11.7093L9.88714 10.4205ZM12.9554 10.4205H15.2305V11.7314H12.9554V10.4205ZM16.341 10.4205H17.9018L17.1874 11.7314H16.341V10.4205ZM11.9769 16.3318C11.57 16.3318 11.1798 16.4723 10.8921 16.7225C10.6044 16.9727 10.4428 17.3121 10.4428 17.6659C10.4428 18.0197 10.6044 18.3591 10.8921 18.6092C11.1798 18.8594 11.57 19 11.9769 19C12.3838 19 12.774 18.8594 13.0617 18.6092C13.3494 18.3591 13.511 18.0197 13.511 17.6659C13.511 17.3121 13.3494 16.9727 13.0617 16.7225C12.774 16.4723 12.3838 16.3318 11.9769 16.3318ZM17.0553 16.3318C16.6485 16.3318 16.2583 16.4723 15.9706 16.7225C15.6829 16.9727 15.5212 17.3121 15.5212 17.6659C15.5212 18.0197 15.6829 18.3591 15.9706 18.6092C16.2583 18.8594 16.6485 19 17.0553 19C17.4622 19 17.8524 18.8594 18.1401 18.6092C18.4278 18.3591 18.5895 18.0197 18.5895 17.6659C18.5895 17.3121 18.4278 16.9727 18.1401 16.7225C17.8524 16.4723 17.4622 16.3318 17.0553 16.3318Z" fill="white"/>
        </svg>            
    </div>

</div>

<script>

    //google translate
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'es',
            includedLanguages: 'es,en,fr,it,pt,de,zh,ja,ru,ko',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            gaTrack: true
        }, 'google_translate_element');
        

    }


    const HideBanner = () => {
        
        const bannerLanguage = document.getElementsByClassName('skiptranslate');
        

        if(bannerLanguage.length > 1){

            //console.log(bannerLanguage.length);

            bannerLanguage[1].classList.add('d-none');
            bannerLanguage[1].getElementsByClassName.visibility = 'hidden';
            document.body.style.position = "static";
        }
    
    }

    const InsertLanguages = (sizeScreen)=>{

        const containerDesktop = document.getElementsByClassName('LanguageDesktop'),
            containerMobile = document.getElementsByClassName('navBarMobile__screenMenu'),
            translateSelect = document.getElementById('google_translate_element'),
            script = document.getElementById('translate-script');
        

        translateSelect !== null && translateSelect.remove();
        script !== null  && script.remove();

        const myScript = document.createElement('script');
        myScript.type = "text/javascript";
        myScript.src = "https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
        myScript.id = 'translate-script';


        if(sizeScreen > 800 ){
            
            translateSelect === null
            &&
            containerDesktop[0].insertAdjacentHTML('afterbegin',`<div id="google_translate_element" class="google"></div>`);
            containerDesktop[0].appendChild(myScript);
            

        
        }else{
            
            translateSelect === null
            &&
            containerMobile[0].insertAdjacentHTML('beforeend',` <div style="z-index:9999;" id="google_translate_element" class="google"></div>`);
            containerMobile[0].appendChild(myScript);
        }

        
        document.getElementById('google_translate_element').addEventListener('click',()=>{

            
            HideBanner();
            setTimeout(()=>HideBanner(),1500);
        })
    }



    window.addEventListener('load',()=>{

        InsertLanguages(window.innerWidth);
        HideBanner();
        setTimeout(()=>HideBanner(),1500);
        setTimeout(()=>HideBanner(),2000);


    });;

    window.addEventListener('mousemove',HideBanner);

    

</script>


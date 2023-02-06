import { reproductor } from "../services/navigation";



export const ContainerMusica = () =>{

    return `
    
        <div class="ContainerMusica screen-container">

        <div class="ContainerPage__name">
            MÚSICA 
            <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.1702 2.0394L18.104 1.98657L18.0156 1.9443C16.1057 0.674768 13.8346 -0.00384791 11.5089 1.64124e-05C8.76558 -0.00200656 6.1119 0.934064 4.02681 2.63927C1.94173 4.34447 0.562601 6.70647 0.138368 9.29892C-0.285866 11.8914 0.272742 14.5435 1.71336 16.7766C3.15398 19.0097 5.38171 20.6766 7.99443 21.4765C10.6072 22.2763 13.4328 22.1565 15.9612 21.1386C18.4897 20.1206 20.5544 18.2716 21.7828 15.9254C23.0111 13.5791 23.3221 10.8901 22.6597 8.34372C21.9972 5.79736 20.4049 3.56139 18.1702 2.0394ZM11.5089 13.5255C10.9845 13.5255 10.4719 13.3767 10.0359 13.0981C9.59989 12.8194 9.26007 12.4233 9.0594 11.9599C8.85873 11.4965 8.80622 10.9866 8.90852 10.4947C9.01082 10.0027 9.26334 9.55087 9.63413 9.1962C10.0049 8.84153 10.4773 8.6 10.9916 8.50215C11.5059 8.4043 12.039 8.45452 12.5235 8.64646C13.0079 8.83841 13.422 9.16346 13.7133 9.5805C14.0047 9.99755 14.1602 10.4879 14.1602 10.9894C14.1573 11.6612 13.877 12.3046 13.3804 12.7796C12.8838 13.2546 12.2111 13.5227 11.5089 13.5255ZM21.2303 10.9894C21.2303 11.2536 21.2192 11.5072 21.1971 11.7608L15.9277 10.8732C15.898 9.83144 15.4649 8.83732 14.7125 8.08358L17.7836 3.88858C18.8639 4.76084 19.732 5.8482 20.3273 7.07469C20.9226 8.30118 21.2308 9.63721 21.2303 10.9894Z" fill="white"/>
            </svg>
            
            
        </div>

            <div class="ContainerMusica__close d-flex justify-content-end close-screen">
                <div class="ContainerInicio__icon">
                    <svg width="19" height="19" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.5 11.5L2 2M11.5 11.5L21 21M11.5 11.5L21 2M11.5 11.5L2 21" stroke="#BD0012" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                </div>
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
                                Inner Desire un album en proceso de grabación que cuenta con 7 hits musicales.
                                <br>
                                Los temas de este album vienen llenos de energia y adrenalina, con letras 
                                y mensajes que nadie se puede perder
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
                            <span class="duration">3:43 </span>min
                        </div>

                        <div class="Reproductor__controls">

                            <svg class="icon_before" width="30" height="28" viewBox="0 0 30 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.05 2.59L11.625 12.0867C10.225 13.02 10.225 14.98 11.625 15.89L26.05 25.41C27.725 26.4833 30 25.3867 30 23.4967L30 4.50333C30 2.61333 27.725 1.51667 26.05 2.59ZM5 25.6667L5 2.33333C5 1.05 3.875 9.53674e-07 2.5 9.53674e-07C1.125 9.53674e-07 0 1.05 0 2.33333L0 25.6667C0 26.95 1.125 28 2.5 28C3.875 28 5 26.95 5 25.6667Z" fill="white"/>
                            </svg>


                            <svg class="icon_play " width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 19.045V32.955C19.5 33.9517 19.955 34.71 20.865 35.23C21.775 35.75 22.6633 35.7067 23.53 35.1L34.32 28.21C35.1433 27.69 35.555 26.9533 35.555 26C35.555 25.0467 35.1433 24.31 34.32 23.79L23.53 16.9C22.6633 16.2933 21.775 16.25 20.865 16.77C19.955 17.29 19.5 18.0483 19.5 19.045ZM26 52C22.4033 52 19.0233 51.3171 15.86 49.9512C12.6967 48.5871 9.945 46.735 7.605 44.395C5.265 42.055 3.41293 39.3033 2.0488 36.14C0.682934 32.9767 0 29.5967 0 26C0 22.4033 0.682934 19.0233 2.0488 15.86C3.41293 12.6967 5.265 9.945 7.605 7.605C9.945 5.265 12.6967 3.41207 15.86 2.0462C19.0233 0.682066 22.4033 0 26 0C29.5967 0 32.9767 0.682066 36.14 2.0462C39.3033 3.41207 42.055 5.265 44.395 7.605C46.735 9.945 48.5871 12.6967 49.9512 15.86C51.3171 19.0233 52 22.4033 52 26C52 29.5967 51.3171 32.9767 49.9512 36.14C48.5871 39.3033 46.735 42.055 44.395 44.395C42.055 46.735 39.3033 48.5871 36.14 49.9512C32.9767 51.3171 29.5967 52 26 52Z" fill="white"/>
                            </svg>
                            
                            <svg class="icon_pause d-none" width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.5 0C11.424 0 0 11.424 0 25.5C0 39.576 11.424 51 25.5 51C39.576 51 51 39.576 51 25.5C51 11.424 39.576 0 25.5 0ZM20.4 35.7C18.9975 35.7 17.85 34.5525 17.85 33.15V17.85C17.85 16.4475 18.9975 15.3 20.4 15.3C21.8025 15.3 22.95 16.4475 22.95 17.85V33.15C22.95 34.5525 21.8025 35.7 20.4 35.7ZM30.6 35.7C29.1975 35.7 28.05 34.5525 28.05 33.15V17.85C28.05 16.4475 29.1975 15.3 30.6 15.3C32.0025 15.3 33.15 16.4475 33.15 17.85V33.15C33.15 34.5525 32.0025 35.7 30.6 35.7Z" fill="white"/>
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

                            <input type="range" id="vol" class="d-none" name="vol" min="0" max="1" step="0.1">

                            <svg width="22" height="22" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.0007 19.1202C17.5279 17.5525 20 14.1455 20 9.99978C20 5.85406 17.5279 2.44709 14.0007 0.879395V2.90615C16.3879 4.31069 17.9999 7.00728 17.9999 9.99978C17.9999 12.9923 16.3879 15.6889 14.0007 17.0934V19.1202Z" fill="white"/>
                                <path d="M14.0007 4.93312V15.0669C15.2258 13.9522 16.0008 11.7947 16.0008 10C16.0008 8.20531 15.2258 6.04783 14.0007 4.93312ZM2.0001 15.0669H4.69725L12.0006 20V0L4.69725 4.93312H2.0001C0.897047 4.93312 0 5.84212 0 6.95987V13.0401C0 14.1579 0.897047 15.0669 2.0001 15.0669Z" fill="white"/>
                                </svg>
                                
                        </div>

                        <div class="Reproductor__TimeLine">

                            <div class="TimeLine__Line">
                                <div class="Line"></div>
                            </div>
                       
                            <div  class="TimeLine__circle"></div>
                            <div class="TimeLine__timeStart current ">0:00</div>
                            <div class="TimeLine__timeEnd  duration">3:43</div>
                        
                        </div>

                    </div>
                </div>

                <div class="ContainerMusica__lista">
                    <div class="Lista__title cerrar-lista">
                        <div class="Lista__iconTitle">
                            <svg width="35" height="35" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.5 19.045V32.955C19.5 33.9517 19.955 34.71 20.865 35.23C21.775 35.75 22.6633 35.7067 23.53 35.1L34.32 28.21C35.1433 27.69 35.555 26.9533 35.555 26C35.555 25.0467 35.1433 24.31 34.32 23.79L23.53 16.9C22.6633 16.2933 21.775 16.25 20.865 16.77C19.955 17.29 19.5 18.0483 19.5 19.045ZM26 52C22.4033 52 19.0233 51.3171 15.86 49.9512C12.6967 48.5871 9.945 46.735 7.605 44.395C5.265 42.055 3.41293 39.3033 2.0488 36.14C0.682934 32.9767 0 29.5967 0 26C0 22.4033 0.682934 19.0233 2.0488 15.86C3.41293 12.6967 5.265 9.945 7.605 7.605C9.945 5.265 12.6967 3.41207 15.86 2.0462C19.0233 0.682066 22.4033 0 26 0C29.5967 0 32.9767 0.682066 36.14 2.0462C39.3033 3.41207 42.055 5.265 44.395 7.605C46.735 9.945 48.5871 12.6967 49.9512 15.86C51.3171 19.0233 52 22.4033 52 26C52 29.5967 51.3171 32.9767 49.9512 36.14C48.5871 39.3033 46.735 42.055 44.395 44.395C42.055 46.735 39.3033 48.5871 36.14 49.9512C32.9767 51.3171 29.5967 52 26 52Z" fill="white"/>
                            </svg>                        
                        </div>
                        <div class="Lista__nameList">
                            LISTA INNER DESIRE
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
            <br>
        </div>
    
    
    `;
}

export const JsContainerMusica = () =>{


    const ListaSongs = document.getElementsByClassName('Lista__songs');
    const Songs = ['1. My Own Demon','2. Following Dreams', '3. Silence', '4. Conspiracy', '5. Behaving the Madness', '6. Supremacy', '7. In my Mind']

    ListaSongs[0].innerHTML="";
    Songs.map((element,index)=>{

        let Element  =  `
                        
            <div class="Lista__song cerrar-lista" style="cursor:pointer;">

                <div class="caratulaSong">
                    <img height="100%" src="${element === Songs[0] ? '/assets/music-page/img-my-own-demon.png' : '/assets/music-page/other.png'}" alt="" srcset="">
                </div>

                <div class="iconSong">
                    <svg class="${element === Songs[0] && 'icon_play'}" width="20" height="25" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.01234 24.6525C2.35391 25.0895 1.68691 25.1143 1.01136 24.7271C0.33712 24.3412 0 23.7448 0 22.938V2.06252C0 1.25574 0.33712 0.658718 1.01136 0.271462C1.68691 -0.114449 2.35391 -0.088901 3.01234 0.348107L19.1111 10.7859C19.7037 11.1893 20 11.7607 20 12.5003C20 13.2398 19.7037 13.8113 19.1111 14.2147L3.01234 24.6525Z" fill="white"/>
                    </svg>
                    <svg class="${element === Songs[0] && 'icon_pause'} d-none" width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 25C14.175 25 13.469 24.6506 12.882 23.9518C12.294 23.2518 12 22.4107 12 21.4286V3.57143C12 2.58929 12.294 1.74881 12.882 1.05C13.469 0.35 14.175 0 15 0H18C18.825 0 19.5315 0.35 20.1195 1.05C20.7065 1.74881 21 2.58929 21 3.57143V21.4286C21 22.4107 20.7065 23.2518 20.1195 23.9518C19.5315 24.6506 18.825 25 18 25H15ZM3 25C2.175 25 1.469 24.6506 0.882 23.9518C0.294 23.2518 0 22.4107 0 21.4286V3.57143C0 2.58929 0.294 1.74881 0.882 1.05C1.469 0.35 2.175 0 3 0H6C6.825 0 7.5315 0.35 8.1195 1.05C8.7065 1.74881 9 2.58929 9 3.57143V21.4286C9 22.4107 8.7065 23.2518 8.1195 23.9518C7.5315 24.6506 6.825 25 6 25H3Z" fill="white"/>
                    </svg>

                        
                </div>

                <div class="nameSong" style="${element !== Songs[0] && 'text-decoration-line: line-through;'} ">
                ${element}
                </div>

                <div class="timeSong">

                    ${element !== Songs[0] ? '---' : '<span class="current duration">03:33</span>' }
                    
                </div>

            </div>
        
        `;

        ListaSongs[0].insertAdjacentHTML('beforeend',Element)
    });

    const list = document.getElementsByClassName('ContainerMusica__lista'); 
    const btnCerrar = document.getElementsByClassName('cerrar-lista'); 
    const btnList = document.getElementsByClassName('Reproductor__btnList');

    btnList[0].addEventListener('click',()=>{

        list[0].style.display = "block";

    });    

    for(let i =0; i< btnCerrar.length;i++){

        btnCerrar[i].addEventListener('click',()=>{

            console.log(window.innerWidth);
             window.innerWidth < 800 &&  (list[0].style.display = "none");
    
        });
    }

    
    const btnPlay = document.getElementsByClassName('icon_play');
    const btnPause = document.getElementsByClassName('icon_pause');
    const progresClircle = document.getElementsByClassName('TimeLine__circle')[0];
    const progresLine = document.getElementsByClassName('Line')[0];
    const volumeIcon = document.getElementsByClassName('Reproductor__sound')[0];
    const rangeVol = document.getElementById('vol');
    const elemDuration = document.getElementsByClassName('duration');
    const elemCurrent = document.getElementsByClassName('current');
    const timeLines = document.getElementsByClassName('TimeLine__Line');
    const RepTimeLines = document.getElementsByClassName('Reproductor__TimeLine');




    for(let i=0; i< btnPlay.length;i++){

        btnPlay[i].addEventListener('click',()=>{  

            reproductor.PlayPause(btnPlay,btnPause);
     
            
        });
    
        btnPause[i].addEventListener('click',()=>{  
    
            reproductor.PlayPause(btnPlay,btnPause);
    
            
        });
    
    
        if(!reproductor.audio.paused){
            
            btnPause[i].classList.remove('d-none');
            btnPlay[i].classList.add('d-none');
        }

        reproductor.Update([progresClircle,progresLine],elemCurrent,btnPlay,btnPause);

    }







    volumeIcon.addEventListener('mouseenter',()=>{

        rangeVol.classList.remove('d-none');
        reproductor.Volume(rangeVol);
    });

    volumeIcon.addEventListener('mouseleave',()=>{

        rangeVol.classList.add('d-none');
    });



    timeLines[0].addEventListener('click',(e)=>{
         
        reproductor.UpdateTimeline(timeLines[0].clientWidth,e.offsetX);
    });






    function DragPointer(e){

        reproductor.UpdateTimeline(timeLines[0].clientWidth,e.offsetX);

    }

    RepTimeLines[0].addEventListener('mousedown',()=>{

       
        timeLines[0].addEventListener('mousemove',DragPointer)
       

    });

    RepTimeLines[0].addEventListener('mouseup',()=>{

        timeLines[0].removeEventListener('mousemove',DragPointer);
    });

    



    



    
    reproductor.UpdateDuration(elemDuration);
    

}


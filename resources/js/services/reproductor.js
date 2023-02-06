export class Reproductor{

    constructor(audio){

        this.audio = new Audio(audio);
    }

    PlayPause(btnPlay,btnPause){

        if(this.audio.paused){

            this.audio.play();
            for(let h =0; h< btnPlay.length;h++){

                btnPlay[h].classList.add('d-none');
                btnPause[h].classList.remove('d-none');
            }
            
        }else{

            this.audio.pause();
            for(let l =0; l< btnPause.length;l++){
                btnPlay[l].classList.remove('d-none');
                btnPause[l].classList.add('d-none');
            }
        }
        
    }

    Volume(range){

        range.addEventListener('click',()=>{
            
            this.audio.volume = range.value;

        });
        
    }

    Update(progresBar,elemCurrentTime,btnPlay,btnPause){

        this.audio.addEventListener('timeupdate',()=>{

            this.#ProgresBar(progresBar);
            this.#UpdateCurrentTime(elemCurrentTime,btnPlay,btnPause);
        });

        
    }


    #ProgresBar(elemProgressBar){

        let current = this.audio.currentTime;
        let duration = this.audio.duration;
        let progress = parseInt(current.toFixed()) * 100 / parseInt(duration.toFixed());
        elemProgressBar[0].style.left = `calc(${progress}% - 4px)`;
        elemProgressBar[1].style.width = `calc(${progress}% + 2px)`;

       
    }

    UpdateDuration(elements){

        setTimeout(()=>{
           
            let minutes = parseInt(this.audio.duration / 60, 10);
            let seconds = parseInt(this.audio.duration % 60);

            seconds < 10 && (seconds = `0${seconds}`);
            minutes < 10 && (minutes = `0${minutes}`);
           
            for(let i =0; i< elements.length;i++){
    
                elements[i].innerHTML = "";
                elements[i].innerHTML = `${minutes}:${seconds}`;
            }
        },1200);

    }

    #UpdateCurrentTime(elements,btnPlay,btnPause){

        let minutes = parseInt(this.audio.currentTime / 60, 10);
        let seconds = parseInt(this.audio.currentTime % 60);

        seconds < 10 && (seconds = `0${seconds}`);
        minutes < 10 && (minutes = `0${minutes}`);


        for(let i =0; i< elements.length;i++){
    
            elements[i].innerHTML = "";
            elements[i].innerHTML = `${minutes}:${seconds}`;
        }

        this.audio.currentTime === this.audio.duration 
        &&
        this.PlayPause(btnPlay,btnPause);
    }

    UpdateTimeline(width,currentWidth){


        let duration = this.audio.duration;
        let currentTime = parseInt(duration.toFixed()) * currentWidth / width;
        console.log(currentTime);
        this.audio.currentTime = Math.round(currentTime);

    }
}
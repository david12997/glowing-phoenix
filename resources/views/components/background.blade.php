{{--
     <style>

    .Background{

        position: absolute;
    }

    .Background > #video{

        position:fixed;
        min-height:100%;
        min-width: 100%;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        z-index: -1;
        overflow: hidden;

    }


    .Background > .my-bg-black{

        width:100vw ;
        height: 100vh;
        background: rgba(0,0,0,0.5); 
        position: absolute;
    }

</style>
    
--}}


<div class="Background" style="width:100vw;height:100vh">

    <video id="video" muted webkit-playsinline loop autoplay preload="none" poster>
        <source src="/assets/Secuencia-coro-1.mp4" />
    </video>

     <div class="my-bg-black"></div>
</div>
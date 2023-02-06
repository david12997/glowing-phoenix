export class Router{

    constructor(location,arrRoutes){

        this.location = location;
        this.routes = arrRoutes;
    }

    get getPath(){
        return this.location.pathname;
    }
    
    get getHostName(){

        return this.location.hostname;
    }

    get getUrl(){

        return this.location.href;
    }


    set setLocation(location){

        this.location = location;
    }


    Navigate(arrElemDom,indexRoute,arrComponents,arrScriptComponents){

        const screenContainer = document.getElementById('screen-render');

        this.routes.forEach((element,index)=>{

            console.log(indexRoute);

            if(indexRoute === index){

                this.#UpdateUrl(indexRoute);
                this.#PaintMarkers(arrElemDom,indexRoute,'selected');
                screenContainer.innerHTML = "";
                screenContainer.innerHTML = arrComponents[indexRoute]();
                arrScriptComponents[indexRoute]();
                this.#ClosePage(screenContainer,arrComponents,arrElemDom,index);

            }else{
                
                if(indexRoute === -1){


                    screenContainer.innerHTML = "";
                    this.getPath === '/' 
                    ? 
                    screenContainer.innerHTML = arrComponents[4]()
                    :
                    screenContainer.innerHTML = arrComponents[5]();

                    this.#ClosePage(screenContainer,arrComponents,arrElemDom,index);
                }
                this.#PaintMarkers(arrElemDom,index,'unselected');

            }
             
            
             
         })
       
    }


    #PaintMarkers(arrElemDom,index, type){

        const ElemDom = arrElemDom[index].children[0].children[0].children;
    
        for(let f =0; f < ElemDom.length;f++){
            
            type === 'selected'
            ?
            ElemDom[f].style.fill = "rgb(212 1 21)"
            :
            ElemDom[f].style.fill = ""

        }
    
    }

    #UpdateUrl(indexRoute){

        window.history.replaceState(null,null,this.routes[indexRoute]);

    }

    #ClosePage(screenContainer,arrComponents,arrElemDom,index){
    
        const closePageIcon = document.getElementsByClassName('ContainerInicio__icon')[0];

        this.getPath !== '/' && closePageIcon.addEventListener('click',()=>{

            window.history.replaceState(null,null,'/');
            screenContainer.innerHTML = "";
            screenContainer.innerHTML = arrComponents[4]();
            this.#PaintMarkers(arrElemDom,index,'unselected')
        })
    }



}
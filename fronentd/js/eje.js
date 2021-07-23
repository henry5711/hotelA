
import {camteam} from "./tema.js";


const d=document;

function desplegablemenu(btpanel,panel,menulink)
{
    d.addEventListener("click",e=>{
        if(e.target.matches(btpanel) || e.target.matches(`${btpanel} *`))
        {
            d.querySelector(panel).classList.toggle("is-active")
        }

        if(e.target.matches(menulink))
        {
            d.querySelector(panel).classList.remove("is-active");
            d.querySelector(btpanel).classList.remove("is-active");
        }
    })
    
}

d.addEventListener("DOMContentLoaded",(e)=>{
    desplegablemenu(".panel-btn",".panel",".menu a");
   
});


camteam(".btnteam","temdark");

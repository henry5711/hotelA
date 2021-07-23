export default function desplegablemenu(btpanel,panel)
{
    const d=document;
    d.addEventListener("click",e=>{
        if(e.target.matches(btpanel))
        {
            d.querySelector(panel).classList.toggle("is-active")
        }
    })
}
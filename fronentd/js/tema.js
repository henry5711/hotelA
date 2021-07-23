let d=document,
ls=localStorage;

export function camteam(btn,classdark)
{
  const  $btn=d.querySelector(btn),
  $selector=d.querySelectorAll("[data-dark]");
  let $sol="☀",$luna="🌙";

  const darkmode=()=>
  {
    $selector.forEach(el=>el.classList.add(classdark));
    $btn.textContent=$sol;
    ls.setItem("tema","dark")
  }

  const lightmode=()=>
  {
    $selector.forEach(el=>el.classList.remove(classdark));
    $btn.textContent=$luna;
    ls.setItem("tema","light")
     
  }

  d.addEventListener("click",(e)=>
  {
      if(e.target.matches(btn))
      {
          if($btn.textContent===$luna)
          {
              //ciclo for para agg el modo oscuro al arreglo
              darkmode();
          }
          else
          {
           lightmode();
          }
      }
  })

  d.addEventListener("DOMContentLoaded",(e)=>
  {
          if(ls.getItem("tema")===null)
          {
              ls.setItem("tema","light");

          }

          if(ls.getItem("tema")==="light")
          {
              lightmode();
          }
          if(ls.getItem("tema")==="dark")
          {
              darkmode();
          }
  })
}
window.addEventListener("load", addEventos)

function addEventos(){
  let btnVoltar = document.querySelector("#btnVoltar")
  btnVoltar.addEventListener("click", voltarTela)

  function voltarTela(){
    window.history.go(-1)
  }
}
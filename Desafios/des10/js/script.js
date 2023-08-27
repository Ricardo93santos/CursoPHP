window.addEventListener("load", addEventos)

function addEventos(){
  function mudarValor(){
    porcento.innerText = porcentagem.value
  }
  mudarValor()
  
  porcento = document.querySelector("#porcento")
  porcentagem = document.querySelector("#porcentagem")
  porcentagem.addEventListener("input", mudarValor)
}

const endereco = document.getElementById('endereco')
const bairro = document.getElementById('bairro')
const cidade = document.getElementById('cidade')
const uf = document.getElementById('estado')
let progresso = document.getElementById('progresso')

document.addEventListener('DOMContentLoaded', (evt)=>{

    const cep = document.getElementById('cep')

    cep.addEventListener('change', (evt)=>{
           buscarEndereco(evt.target.value)
    })
})

const limparForm = () => {
    endereco.value = ''
    bairro.value = ''
    cidade.value = ''
    uf.value = ''
}

const  buscarEndereco = (cep) => {

    limparForm()
    
    progresso.style.display = 'block'


    if (cep.length < 10) {
    const URI = `http://cep.republicavirtual.com.br/web_cep.php?cep=${cep}&formato=json`
      fetch(URI)
      .then( r => r.json())
      .then( r => {
            endereco.value = r.tipo_logradouro + ' ' + r.logradouro
            bairro.value = r.bairro
            cidade.value = r.cidade
            uf.value = r.uf
         })
         .finally( e => {
            progresso.style.display = 'none'
         })
     }
}

const formularioBuscar  =   document.querySelector('#searchform #s')
if(formularioBuscar){
    formularioBuscar.className += ' form-control mb-2'
    const botonBuscar   =   document.querySelector('#searchsubmit')
    botonBuscar.className   +=  ' btn btn-warning btn-block'
}

const listawid  =   document.querySelector('.ken ul')
if(listawid){
    listawid.className  +=  ' list-group'
    listawid.querySelectorAll('li').forEach(item => {
        item.className  +=  ' list-group-item'
    })
}
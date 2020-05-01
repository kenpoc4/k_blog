
const formularioBuscar  =   document.querySelector('#searchform #s')
// console.log(formularioBuscar)
formularioBuscar.className += ' form-control mb-2'

const botonBuscar   =   document.querySelector('#searchsubmit')
// console.log(botonBuscar)
botonBuscar.className   +=  ' btn btn-warning btn-block'

const listawid  =   document.querySelector('.ken ul')
// console.log(listawid)
listawid.className  +=  ' list-group'

listawid.querySelectorAll('li').forEach(item => {
    item.className  +=  ' list-group-item'
})
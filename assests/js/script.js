
function cancela(id){
    let tag = document.querySelector(id);
    console.log('tag ', tag);
    tag.value = '';
}

function bt_cancelar(){
    console.log('Test');
    cancela('#box_modelo');    
    cancela('#box_marca');
    cancela('#box_ano');
    cancela('#box_preco');
}

function deletar(id){
    console.log('Deletar ', id);
}

function editar(id) {
    console.log('Editar ', id);
}
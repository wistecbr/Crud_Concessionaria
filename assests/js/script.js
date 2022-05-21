
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

function bt_cancelar_up(){
    window.location.assign('./carros.php');
}

function deletar(id){   
    console.log('remover ', id);
    window.location.assign('./lib/valida.php?remover=' + id)
}

function editar(id) {
    console.log('Editar ', id);
    window.location.assign('./lib/valida.php?editar=' + id)
}
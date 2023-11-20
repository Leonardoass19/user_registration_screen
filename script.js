function mascara_cpf(){
    var cpf = document.getElementById('cpf')

    ///// JEITO DE CRIAR  MASCARCA ANTIGA
    // if(cpf.value.length == 3 || cpf.value.length == 7){
    //     cpf.value += "."
    // }
    // if (cpf.value.length == 11){
    //     cpf.value += "-"
    // }

//// JEITO CORRETO (KELVÃO)
    cpf.value = cpf.value.replace(/\D/g, '');

    // Aplicar a máscara
    if (cpf.value.length <= 11) {
        cpf.value = cpf.value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
    } else {
        cpf.value = cpf.value.substring(0, 11);
    }
}
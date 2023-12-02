function mostrarInfoServico() {
    var select = document.getElementById("servico");
    var detalhesTextarea = document.getElementById("detalhes");

    // Obtém o valor selecionado
    var servicoSelecionado = select.options[select.selectedIndex].value;

    // Array associativo com informações sobre os serviços
    var servicosInfo = {
        "polimento": {
            descricao: "Polimento profissional.",
            valor: "R$ 100,00"
        },
        "cristalizacao": {
            descricao: "Cristalização para proteção da pintura.",
            valor: "R$ 150,00"
        }
        // Adicione mais serviços conforme necessário
    };

    // Exibe as informações se o serviço for válido
    if (servicosInfo[servicoSelecionado]) {
        var descricao = servicosInfo[servicoSelecionado].descricao;
        var valor = servicosInfo[servicoSelecionado].valor;

        // Atualiza o conteúdo do 'detalhes' com informações sobre o serviço
        detalhesTextarea.value = "Descrição: " + descricao + "\n\n" +
                                "Valor: " + valor;
    }
}

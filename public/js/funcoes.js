$(function() {
    $("#dataInicio").datepicker();
    $("#dataFim").datepicker();
});
$(function() {
    $("#btMostrarFiltros").click(function(e) {
        e.preventDefault();
        el = $(this).data('element');
        $(el).toggle();
    });
});
$(function() {
    $("#btCadastrarEmpresa").click(function(e) {
        e.preventDefault();
        el = $(this).data('element');
        $(el).toggle();
        $("#listagem").toggle();
        $("#btMostrarFiltros").toggle();
        $("#filtros").hide();
    });
});
$(function() {
    $("#dataInicio").mask("9999-99-99", {placeholder: " "});
    $("#dataFim").mask("9999-99-99", {placeholder: " "});
    $("#dataPagamento").mask("99", {placeholder: " "});
    $("#cpf").mask("999.999.999-99", {placeholder: " "});
    $("#cnpj").mask("99.999.999/9999-99", {placeholder: " "});
});
function valorMaior(valor) {
    if ((valor > '31') || (valor < 1)) {
        alert('Valor Digitado Incorreto');
    }
}
;
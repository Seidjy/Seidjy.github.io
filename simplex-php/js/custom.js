/****************GLOBAL CUSTOM JQUERY-JAVASCRIPTS****************/

$(function () {
	// add option max e min.
    $('#add_field').click (function(e) {
            e.preventDefault();     // prevenir novos clicks.
            $('#container').append('<div class="row">\
				<div class="form-group inicial col-sm-offset-4 col-sm-4">\
					<label for="">O Objetivo da Função é:</label>\
					<select class="form-control" required="required" name="objetivo[]">\
						<optgroup label="Objetivo é:">\
							<option value="1">Maxmizar</option>\
							<option value="2">Minimizar</option>\
						</optgroup>\
					</select>\
				</div>\
			</div><br>');
    });
    // add inputs variáveis.
    $('#add_field').click (function(e) {
        var qtdLin = $("#variavel").val();
    	for (var i = 0; i < qtdLin; i++) {
            e.preventDefault();     // prevenir novos clicks.
            $('#container').append('<div class="row">\
			<div class="form-group inicial col-sm-offset-4 col-sm-4">\
				<label for="">Função</label>\
	            <div class="input-group">\
	                <input type="number" name="vlr_fv[]" class="form-control" placeholder="Valor">\
	                <span class="input-group-addon" id="sizing-addon2">... +</span>\
	            </div>\
			</div>\
			</div>');
        }
    });
    // add inputs restrições.
    $('#add_field').click (function(e) {
        var qtdLin = $("#restricao").val();
    	for (var i = 0; i < qtdLin; i++) {
            e.preventDefault();     // prevenir novos clicks.
            $('#container').append('<div class="row itens">\
			<div class="form-group inicial col-sm-offset-4 col-sm-4">\
				<label for="">Restrições</label>\
	            <div class="input-group">\
	                <input type="number" name="vlr_v[]" class="form-control" placeholder="Valor">\
	                <span class="input-group-addon" id="sizing-addon2">... +</span>\
	            </div>\
	            <select class="form-control" name="opcao[]">\
					<optgroup>\
						<option value="1">maior</option>\
						<option value="2">menor</option>\
						<option value="3">igual</option>\
					</optgroup>\
				</select>\
				<br>\
	            <div class="input-group">\
	                <input type="number" name="vlr_r[]" class="form-control" placeholder="Valor">\
	                <span class="input-group-addon" id="sizing-addon2">...</span>\
	            </div>\
	            <hr>\
			</div>');
        }
    });
    // add botao.
    $('#add_field').click (function(e) {
        e.preventDefault();     // prevenir novos clicks.
        $('#container').append('<div class="row">\
			<div class="botao col-sm-offset-4 col-sm-4">\
				<button type="submit" class="btn btn-primary">Concluir</button>\
			</div>\
		</div>');
    });
    // ancora deslizante.
    var $doc = $('html, body');
	$('.scrollSuave').click(function() {
	    $doc.animate({
	        scrollTop: $( $.attr(this, 'href') ).offset().top
	    }, 700);
	    return false;
	});
});


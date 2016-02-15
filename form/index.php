<?php
session_start();

//TOKEN FORM
$_SESSION['tokensubmit'] = md5(session_id() . time());

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Formulário de inscrição do atleta</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/jquery.maskedinput-1.1.4.pack.js"></script>
<script type="text/JavaScript">

	$(document).ready(function () {
		$("#saude_tx_tr").attr('style', 'display: none');
		$("#contusao_tx_tr").attr('style', 'display: none');
		$("#cirurgia_tx_tr").attr('style', 'display: none');
		$("#medicamento_tx_tr").attr('style', 'display: none');
		$("#alergia_tx_tr").attr('style', 'display: none');
		$("#cep").mask("99.999-999");
		$("#telefone_num").mask("(99) 9999-9999");
		$("#telefone_emerg").mask("(99) 9999-9999");
		$("#nascimento_data").mask("99/99/9999");

		$("#saude").change(function () {
			if (this.value == 1) {
				$("#saude_tx_tr").removeAttr('style');
			} else {
				$("#saude_tx_tr").attr('style', 'display: none');
			};
		});
		$("#contusao").change(function () {
			if (this.value == 1) {
				$("#contusao_tx_tr").removeAttr('style');
			} else {
				$("#contusao_tx_tr").attr('style', 'display: none');
			};
		});
		$("#cirurgia").change(function () {
			if (this.value == 1) {
				$("#cirurgia_tx_tr").removeAttr('style');
			} else {
				$("#cirurgia_tx_tr").attr('style', 'display: none');
			};
		});
		$("#medicamento").change(function () {
			if (this.value == 1) {
				$("#medicamento_tx_tr").removeAttr('style');
			} else {
				$("#medicamento_tx_tr").attr('style', 'display: none');
			};
		});
		$("#alergia").change(function () {
			if (this.value == 1) {
				$("#alergia_tx_tr").removeAttr('style');
			} else {
				$("#alergia_tx_tr").attr('style', 'display: none');
			};
		});
	});
	
</script>
</head>
<body>
<style type="text/css">
	.master { width: 98%; margin: 10px;}

	.formulario { width: 900px; margin: 0 auto; }

	.formulario p { text-align: center;	font-weight: bold; font-family: arial; color: #5c69a3; font-size: 2em;}

	.form	{ margin: 10px; }
	.form label {	color: #327dcd; }
	.form input { display: inline; }
	.form .infoHeader { text-align: right; padding-left: 5px;}
	.form .infoValue { text-align: left; }

	#uf { text-transform: uppercase;}

	#anamnese {	margin: 10px; }
	#anamnese span { color: gray; }

	#patologias {	margin: 10px; }

	.menssagemRetorno { font-weight: bold; text-align: center; }

	#capa { width: 100%; height: 350px; background: url("imagens/10986424_1104647872894023_1434167042202530542_o.jpg") no-repeat;}

</style>
	<div class="master">
		<div id="capa"></div>
	  <div class="menssagemRetorno alert alert-success" role="alert">
	  	<?php 
	  	if ($menssagem) {
	  		echo $menssagem;
	  		unset($menssagem);
	  	}
	  	 ?>
	  </div>
		<div id="formulario" class="formulario">
			<h3><span class="label label-primary">Dados Pessoais</span></h3>
			<form action="receive.php" id="formAkipa" name="formAkipa" method="post">
				<input type="hidden" id="funcao" name="funcao" value="salvar" />
				<input type="hidden" id="tokensubmit" name="tokensubmit" value="<?php echo $_SESSION['tokensubmit']; ?>" />
				<table class="table" id="form" class="form" cellpadding="0" cellspacing="0" border='0'>
					<tr>
						<td class="infoHeader">
							<label for="nome">Nome completo</label>
						</td>
						<td class="infoValue">
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="endereco">Endereço residencial </label>
						</td>
						<td>
							<input type="text" name="endereco" id="endereco" class="form-control" placeholder="Endereço Residencial" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="bairro">Bairro </label>
						</td>
						<td class="infoValue">
							<input type="text" name="bairro" id="bairro" class="form-control" placeholder="Bairro" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="cidade">Cidade </label>
						</td>
						<td class="infoValue">
							<input type="text" name="cidade" id="cidade" class="form-control" placeholder="Cidade" aria-describedby="sizing-addon3"/>
						</td>
						<td class="infoHeader">
							<label for="cep">CEP </label>
						</td>
						<td class="infoValue">
							<input type="text" name="cep" id="cep" size="10" placeholder="CEP" class="form-control" aria-describedby="sizing-addon3"/>
						</td>
						<td class="infoHeader">
							<label for="uf">UF </label>
						</td>
						<td class="infoValue">
							<input type="text" name="uf" id="uf" size="2" maxlength="2" placeholder="UF" class="form-control" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="nacionalidade">Nacionalidade </label>
						</td>
						<td class="infoValue">
							<input type="text" name="nacionalidade" id="nacionalidade" class="form-control" placeholder="Nacionalidade" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="naturalidade">Naturalidade </label>
						</td>
						<td class="infoValue">
							<input type="text" name="naturalidade" id="naturalidade" class="form-control" placeholder="Naturalidade" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="nome_pai">Nome do Pai </label>
						</td>
						<td class="infoValue">
							<input type="text" name="nome_pai" id="nome_pai" class="form-control" placeholder="Nome do Pai" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="nome_mae">Nome da Mãe </label>
						</td>
						<td class="infoValue">
							<input type="text" name="nome_mae" id="nome_mae" class="form-control" placeholder="Nome da Mãe" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					
					<tr>
						<td class="infoHeader">
							<label for="nascimento_data">Data de nascimento </label>
						</td>
						<td class="infoValue">
							<input type="text" name="nascimento_data" id="nascimento_data" placeholder="Data de nascimento" class="form-control" aria-describedby="sizing-addon3"/>
						</td>
						<td class="infoHeader">
							<label for="sexo">Sexo </label>
						</td>
						<td class="infoValue">
							<input type="radio" name="sexo" id="sexo" value="M" class="form"/> Masculino&nbsp;&nbsp;
							<input type="radio" name="sexo" id="sexo" value="F" class="form"/> Feminino
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="telefone_ddd">Telefone </label>
						</td>
						<td class="infoValue">
							<input type="text" name="telefone_num" id="telefone_num" placeholder="Telefone" class="form-control" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="email">Email </label>
						</td>
						<td class="infoValue">
							<input type="text" name="email" id="email" placeholder="Email" class="form-control" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="tipo_sanguineo">Tipo Sanguíneo </label>
						</td>
						<td class="infoValue">
							<!-- <input type="text" name="tipo_sanguineo" id="tipo_sanguineo" placeholder="Tipo sanguíneo" class="form-control" aria-describedby="sizing-addon3"/> -->
							<select name="tipo_sanguineo" id="tipo_sanguineo" class="form-control" aria-describedby="sizing-addon3">
								<option value="">Escolha um item</option>
								<option value="A">A</option>
								<option value="AB">AB</option>
								<option value="B">B</option>
								<option value="O">O</option>
							</select>
						</td>
						<td class="infoHeader">
							<label for="sanguineo_rh">Rh </label>
						</td>
						<td class="infoValue">
							<!-- <input type="text" name="sanguineo_rh" id="sanguineo_rh" placeholder="Fator RH" class="form-control" aria-describedby="sizing-addon3"/> -->
							<select name="sanguineo_rh" id="sanguineo_rh" class="form-control" aria-describedby="sizing-addon3">
								<option value="">Escolha um item</option>
								<option value="P">Positivo(rh+)</option>
								<option value="N">Negativo(rh-)</option>
							</select>
						</td>
					</tr>
					<tr>
						<td ><span class="label label-danger">Em caso de emergência</span></td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="contato_emerg">Nome </label>
						</td>
						<td class="infoValue">
							<input type="text" name="contato_emerg" id="contato_emerg" class="form-control" placeholder="Nome" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="telefone_emerg">Telefone </label>
						</td>
						<td class="infoValue">
							<input type="text" name="telefone_emerg" id="telefone_emerg" class="form-control" placeholder="Telefone" aria-describedby="sizing-addon3"/>
						</td>
					</tr>
				</table>
				<br><br>
				<h3><span class="label label-primary">Ficha de anamnese saúde geral</span></h3>
				<table class="table" id="anamnese" cellpadding="0" cellspacing="0">
					<tr>
						<td class="infoHeader">
							<label for="saude">Tem algum problema de saúde </label>
						</td>
						<td class="infoValue">
							<select name="saude" id="saude" class="form-control" aria-describedby="sizing-addon3">
								<option value="">Escolha um item</option>
								<option value="1">Sim</option>
								<option value="0">Não</option>
							</select>
						</td>
					</tr>
					<tr id="saude_tx_tr">
						<td class="infoHeader">
							<label for="saude_tx">Qual </label>
						</td>
						<td class="infoValue">
							<input type="text" name="saude_tx" id="saude_tx" class="form-control" aria-describedby="sizing-addon3">
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="contusao">Sofreu alguma fratura ou contusão </label>
						</td>
						<td class="infoValue">
							<select name="contusao" id="contusao" class="form-control" aria-describedby="sizing-addon3" >
								<option value="">Escolha um item</option>
								<option value="1">Sim</option>
								<option value="0">Não</option>
							</select>
						</td>
					</tr>
					<tr id="contusao_tx_tr">
						<td class="infoHeader">
							<label for="contusao_tx">Qual </label>
						</td>
						<td class="infoValue">
							<input type="text" name="contusao_tx" id="contusao_tx" class="form-control" aria-describedby="sizing-addon3">
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="cirurgia">Já fez alguma cirurgia </label>
						</td>
						<td class="infoValue">
							<select name="cirurgia" id="cirurgia" class="form-control" aria-describedby="sizing-addon3">
								<option value="">Escolha um item</option>
								<option value="1">Sim</option>
								<option value="0">Não</option>
							</select>
						</td>
					</tr>
					<tr id="cirurgia_tx_tr">
						<td class="infoHeader">
							<label for="cirurgia_tx">Em que parte do corpo </label>
						</td>
						<td class="infoValue">
							<input type="text" name="cirurgia_tx" id="cirurgia_tx" class="form-control" aria-describedby="sizing-addon3">
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="medicamento">Toma medicamento de uso contínuo </label>
						</td>
						<td class="infoValue">
							<select name="medicamento" id="medicamento" class="form-control" aria-describedby="sizing-addon3">
								<option value="">Escolha um item</option>
								<option value="1">Sim</option>
								<option value="0">Não</option>
							</select>
						</td>
					</tr>
					<tr id="medicamento_tx_tr">
						<td class="infoHeader">
							<label for="medicamento_tx">Qual </label>
						</td>
						<td class="infoValue">
							<input type="text" name="medicamento_tx" id="medicamento_tx" class="form-control" aria-describedby="sizing-addon3">
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="alergia">Possui algum tipo de alergia <span>(a medicamento, pó, comida, etc)</span> </label>
						</td>
						<td class="infoValue">
							<select name="alergia" id="alergia" class="form-control" aria-describedby="sizing-addon3">
								<option value="">Escolha um item</option>
								<option value="1">Sim</option>
								<option value="0">Não</option>
							</select>
						</td>
					</tr>
					<tr id="alergia_tx_tr">
						<td class="infoHeader">
							<label for="alergia_tx">A(o) quê </label>
						</td>
						<td class="infoValue">
							<input type="text" name="alergia_tx" id="alergia_tx" class="form-control" aria-describedby="sizing-addon3">
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="sangramento">Costuma sangrar muito quando se machuca </label>
						</td>
						<td class="infoValue">
							<select name="sangramento" id="sangramento" class="form-control" aria-describedby="sizing-addon3">
								<option value="">Escolha um item</option>
								<option value="1">Sim</option>
								<option value="0">Não</option>
							</select>
						</td>
					</tr>
					<tr>
						<td class="infoHeader">
							<label for="cicatrizacao">Demora para cicatrizar </label>
						</td>
						<td class="infoValue">
							<select name="cicatrizacao" id="cicatrizacao" class="form-control" aria-describedby="sizing-addon3">
								<option value="">Escolha um item</option>
								<option value="1">Sim</option>
								<option value="0">Não</option>
							</select>
						</td>
					</tr>
				</table>
				<table class="table" cellpadding="0" cellspacing="0" id="patologias">
					<tr>
						<td colspan="6">
							<h3><span class="label label-primary">Tem ou teve recentemente uma ou mais das patologias abaixo</span></h3>
						</td>
					</tr>
					<tr>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="problemas cardiacos"></td>
						<td class="infoValue"><label for="patologia">Problemas cardíacos</label></td>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="Problemas pulmonares"></td>
						<td class="infoValue"><label for="patologia">Problemas pulmonares</label></td>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="Tonturas"></td>
						<td class="infoValue"><label for="patologia">Tonturas</label></td>
					</tr>
					<tr>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="Hipertensão"></td>
						<td class="infoValue"><label for="patologia">Hipertensão</label></td>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="Bronquite"></td>
						<td class="infoValue"><label for="patologia">Bronquite</label></td>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="Asma"></td>
						<td class="infoValue"><label for="patologia">Asma</label></td>
					</tr>
					<tr>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="Colesterol elevado"></td>
						<td class="infoValue"><label for="patologia">Colesterol elevado</label></td>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="Glicose elevada"></td>
						<td class="infoValue"><label for="patologia">Glicose elevada</label></td>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="Diabetes"></td>
						<td class="infoValue"><label for="patologia">Diabetes</label></td>
					</tr>
					<tr>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="Convulsões"></td>
						<td class="infoValue"><label for="patologia">Convulsões</label></td>
						<td class="infoHeader"><input type="checkbox" name="patologia[]" id="patologias[]" value="Dores de cabeça frequentes"></td>
						<td class="infoValue"><label for="patologia">Dores de cabeça frequentes</label></td>
					</tr>
					<tr>
						<td colspan="6">
							<input type="submit" class="btn btn-success" name="enviar" value="Salvar dados">
							<input type="button" class="btn btn-info" name="limpar" value="limpar" onClick="$('#formAkipa').trigger('reset');">
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>


</body>
</html>
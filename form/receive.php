<?php
ob_start();
session_start();
include ('../form/conn.php');
include ('../form/util.php');

if (isset($_POST['tokensubmit'])) {
  if (isset($_SESSION['tokensubmit'])) {
    if ($_SESSION['tokensubmit'] != $_POST['tokensubmit']) {
      header("Location:/index.php");
    } else {
      if (count($_POST['patologia']) > 0) {
        $sPatologias = implode(', ', $_POST['patologia']);
      }

      if ($_POST['funcao'] == 'salvar') { 

        $SQL = "INSERT INTO formAkipa (nome,
                                       nome_pai,
                                       nome_mae,
                                       contato_emerg,
                                       endereco,
                                       bairro,
                                       cidade,
                                       uf,
                                       cep,
                                       nacionalidade,
                                       naturalidade,
                                       nascimento_data,
                                       sexo,
                                       telefone_num,
                                       email,
                                       tipo_sanguineo,
                                       sanguineo_rh,
                                       telefone_emerg,
                                       saude,
                                       saude_tx,
                                       contusao,
                                       contusao_tx,
                                       cirurgia,
                                       cirurgia_tx,
                                       medicamento,
                                       medicamento_tx,
                                       alergia,
                                       alergia_tx,
                                       sangramento,
                                       sangramento_tx,
                                       cicatrizacao,
                                       cicatrizacao_tx,
                                       patologia) 
                     VALUES
                                       (\"".mb_strtoupper($_POST['nome'])."\",
                                        \"".mb_strtoupper($_POST['nome_pai'])."\",
                                        \"".mb_strtoupper($_POST['nome_mae'])."\",
                                        \"".mb_strtoupper($_POST['contato_emerg'])."\",
                                        \"".mb_strtoupper($_POST['endereco'])."\",
                                        \"".mb_strtoupper($_POST['bairro'])."\",
                                        \"".mb_strtoupper($_POST['cidade'])."\",
                                        \"".strtoupper($_POST['uf'])."\",
                                        \"".$_POST['cep']."\",
                                        \"".mb_strtoupper($_POST['nacionalidade'])."\",
                                        \"".mb_strtoupper($_POST['naturalidade'])."\",
                                        \"".$_POST['nascimento_data']."\",
                                        \"".$_POST['sexo']."\",
                                        \"".$_POST['telefone_num']."\",
                                        \"".mb_strtolower($_POST['email'])."\",
                                        \"".$_POST['tipo_sanguineo']."\",
                                        \"".$_POST['sanguineo_rh']."\",
                                        \"".$_POST['telefone_emerg']."\",
                                        \"".$_POST['saude']."\",
                                        \"".mb_strtoupper($_POST['saude_tx'])."\",
                                        \"".$_POST['contusao']."\",
                                        \"".mb_strtoupper($_POST['contusao_tx'])."\",
                                        \"".$_POST['cirurgia']."\",
                                        \"".mb_strtoupper($_POST['cirurgia_tx'])."\",
                                        \"".$_POST['medicamento']."\",
                                        \"".mb_strtoupper($_POST['medicamento_tx'])."\",
                                        \"".$_POST['alergia']."\",
                                        \"".mb_strtoupper($_POST['alergia_tx'])."\",
                                        \"".$_POST['sangramento']."\",
                                        \"".mb_strtoupper($_POST['sangramento_tx'])."\",
                                        \"".$_POST['cicatrizacao']."\",
                                        \"".mb_strtoupper($_POST['cicatrizacao_tx'])."\",
                                        \"".$sPatologias."\")";

        $resultado = mysql_query($SQL);

        if ($resultado === false) {
          $menssagem = mysql_error();
        } else {
          ob_end_clean();
          $menssagem = "Dados cadastrados com sucesso.";
          header("Location:index.php?menssagem=$menssagem");
        }
        mysql_close();
      }

    }
  }
}
?>
<?php
echo $_REQUEST['email'];
if (isset($_REQUEST['email'])){
 
        //Variaveis de POST, Alterar somente se necessário 
        //====================================================
        $nome = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $subject = $_REQUEST['subject'];
        $message = $_REQUEST['message'];
        //====================================================
 
 
        //REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
        //====================================================
        $email_remetente = "kobukan@kobukan.com.br"; // deve ser um email do dominio
        //====================================================
 
 
        //Configurações do email, ajustar conforme necessidade
        //====================================================
        $email_destinatario = "contato@kobukan.com.br"; // qualquer email pode receber os dados
        $email_reply = "$email";
        $email_assunto = "[contaot enviado pelo site] ".$subject;;
        //====================================================
 
 
        //Monta o Corpo da Mensagem
        //====================================================
        $email_conteudo = "Nome = $nome \n";
        $email_conteudo .= "Email = $email \n";
        $email_conteudo .=  "Assunto = $subject \n";
        $email_conteudo .=  "Mensagem = $message \n";
        //====================================================
 
 
        //Seta os Headers (Alerar somente caso necessario)
        //====================================================
        $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Subject: $email_assunto","Return-Path:  $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
        //====================================================
 
 
        //Enviando o email
        //====================================================
        if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){
            // echo "</b>E-Mail enviado com sucesso!</b>";
        	$arrResult = array ('response'=>'success');
        }
        else{
            // echo "</b>Falha no envio do E-Mail!</b>";
            $arrResult = array ('response'=>'error no envio');
        }
        //====================================================
        echo json_encode($arrResult);
} else {
	$arrResult = array ('response'=>'error no botão.');
	echo json_encode($arrResult);
}
?>
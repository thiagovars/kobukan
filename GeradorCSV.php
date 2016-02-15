<?php

// arquivos e sites para instalar o servidor XAMPP:
// http://www.apachefriends.org/en/xampp-windows.html#646
// http://www.apachefriends.org/download.php?xampp-portable-win32-1.8.2-1-VC9-installer.exe

header('content-type: text/html; charset=utf-8');


const DS = DIRECTORY_SEPARATOR;
define("NEW_LINE", "
");

$bulk_folder = str_replace('/',DS,dirname($_SERVER['SCRIPT_FILENAME']));

if(!is_dir($bulk_folder.DS.'processado')){
    mkdir($bulk_folder.DS.'processado');
}

if(!is_dir($bulk_folder.DS.'bulk')){
    mkdir($bulk_folder.DS.'bulk');
}


$conteudo = array();
$conteudo[] = 'No. NF;DATA EMISSAO;VALOR IPI;NOME ARQUIVO XML';

$nfes_processados = array();


$pasta_leitura_nfe = $bulk_folder.DS.'bulk';
try {

    $iterator = new RecursiveDirectoryIterator($pasta_leitura_nfe);

    foreach (new RecursiveIteratorIterator($iterator) as $filename => $cur) {
        $entry = $filename;

        if (!in_array($entry, $nfes_processados) && $entry != "." && $entry != ".." && !is_dir($bulk_folder.DS.$entry) && strtolower(substr($entry,-4))=='.xml') {
            $nfes_processados[] = $entry;


            // lê arquivo xml
            $xml_string = file_get_contents($entry);
            if(empty($xml_string) || $xml_string===false){
                continue;
            }

            $xml = new SimpleXmlElement($xml_string);

            $numeroNotaFiscal = $xml->NFe->infNFe->ide->nNF;
            $dataEmissao = $xml->NFe->infNFe->ide->dEmi;
            if (empty($dataEmissao)) {
                $dataEmissao = $xml->NFe->infNFe->ide->dhEmi;
            }

            // itera sobre lista de produtos
            foreach ($xml->NFe->infNFe->det as $key => $value) {

                if ($value->prod->CFOP == '5910') {
                    $CFOP = $value->prod->CFOP;
                    $valorIPI = $value->imposto->IPI->IPITrib->vIPI;
                    if (empty($valorIPI)) {
                        $valorIPI = 0;
                    }

                    $conteudo[] = 'NF '.$numeroNotaFiscal.';'.$dataEmissao.';'.$valorIPI.';'.basename($entry);
                }

            }


            if (empty($indice['inicio'])) {
              $indice['inicio'] = $numeroNotaFiscal;
            } else {
              $indice['fim'] = $numeroNotaFiscal;
            }
        }
    }

    $caminhoDoArquivo = salvaArquivo($handle, $bulk_folder, $indice, $conteudo);

    if ($caminhoDoArquivo) {
      die("Arquivo Gerado com sucesso em: " . $caminhoDoArquivo);
    } else {
      die("Não foi possível gerar o arquivo. ");
    }


} catch(Exception $e) {
    $caminhoDoArquivo = salvaArquivo($handle, $bulk_folder, $indice, $conteudo);

    die('Erro no arquivo "'.$entry.'": <b>'.$e->getMessage().'</b>.');
    // para debugar o contéudo do arquivo, utilizar variável $xml_string.

    // die('Erro: não foi possível abrir pasta "'.$pasta_leitura_nfe.'" no computador. Certifique-se de ter configurado o 
    //     local de acesso aos arquivos conforme as seguintes orientações:');
}

function salvaArquivo($handle, $bulk_folder, $indice, $conteudo){

    $caminhoDoArquivo = $bulk_folder.DS.'processado'.DS."NotasFiscais-".$indice['inicio']."_ate_".$indice['fim'].".csv";
    $handle = fopen($caminhoDoArquivo, "w");
    $string = implode(NEW_LINE, $conteudo);

    $arquivoGerado = fwrite($handle, $string);
    fclose($handle);

    return $caminhoDoArquivo;
}
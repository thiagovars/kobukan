<?php

// arquivos e sites para instalar o servidor XAMPP:
// http://www.apachefriends.org/en/xampp-windows.html#646
// http://www.apachefriends.org/download.php?xampp-portable-win32-1.8.2-1-VC9-installer.exe

const DS = DIRECTORY_SEPARATOR;
$bulk_folder = str_replace('/',DS,dirname($_SERVER['SCRIPT_FILENAME']).DS.'bulk');

// verifica se não existe pastas de nfe e cte
if(!is_dir($bulk_folder.DS.'nfe')){
    mkdir($bulk_folder.DS.'nfe');
}
if(!is_dir($bulk_folder.DS.'processados')){
    mkdir($bulk_folder.DS.'processados');
}
define("new_line", "
");
// varre pastas dentro de um diretório específico

$conteudo = array();
$conteudo[] = 'No. NF;DATA EMISSAO;VALOR IPI';
if ($handle = opendir($bulk_folder)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && !is_dir($bulk_folder.DS.$entry) && strtolower(substr($entry,-4))=='.xml') {
            $entry_path = $bulk_folder.DS.$entry;

            // lê arquivo xml
            $xml = new SimpleXmlElement(file_get_contents($entry_path));
            $numeroNotaFiscal = $xml->NFe->infNFe->ide->nNF;
            $dataEmissao = $xml->NFe->infNFe->ide->dEmi;
            $CFOP = $xml->NFe->infNFe->det->prod->CFOP;
            $linhaNF = 'NF '.$numeroNotaFiscal.';'.$dataEmissao;
            if ($CFOP == '5910') {
                $valorIPI = $xml->NFe->infNFe->det->imposto->IPI->IPITrib->vIPI;
                $linhaNF .= ';R$ '.$valorIPI;
                unset($valorIPI);
            }

            if (empty($indice['inicio'])) {
              $indice['inicio'] = $numeroNotaFiscal;
            } else {
              $indice['fim'] = $numeroNotaFiscal;
            }
            $conteudo[] = $linhaNF;
        }
    }

    closedir($handle);
    $caminhoDoArquivo = $bulk_folder.DS.'processados'.DS."NotasFiscais-".$indice['inicio']."_ate_".$indice['fim'].".csv";
    $handle = fopen($caminhoDoArquivo, "w");
    $string = implode(new_line, $conteudo);
    
    $arquivoGerado = fwrite($handle, $string);
    if ($arquivoGerado) {
      die("Arquivo Gerado com sucesso em: " . $caminhoDoArquivo);
    } else {
      die("Não foi possível gerar o arquivo. ");
    }
    fclose($handle);

} else {
    die('Não foi possível abrir pasta XML.');
}



/**
  *  Função que retira caracteres latinos impróprios.
  *
  *  @param string $texto Texto a ser limpo
  *  @param string $subst Informa char para substituir ocorrências inválidas.
  *  @return string Texto limpo de caracteres impróprios. 
  *
  */
function limpaString($texto,$subst=''){
    $texto = str_replace(array(" ","\$",'%',',',';',"'",'"'),$subst,stripslashes(strip_tags($texto)));
    $acentos =  array(
        'Ã§','Ã‡',//ç
        'Ã±','Ã‘',//Nn
        'Ã£','Ã¡','Ã ','Ã¢','Ã¤',//a
        'Ã©','Ã¨','Ãª','Ã«',//e
        'Ã¬','Ã®','Ã¯',//i
        'Ãµ','Ã³','Ã²','Ã´','Ã¶',//o
        'Ãº','Ã¹','Ã»','Ã¼',//u
        'Ãƒ','Ã','Ã€','Ã‚','Ã„',//A
        'Ã‰','Ãˆ','ÃŠ','Ã‹',//E
        'Ã','ÃŒ','ÃŽ','Ã',//I
        'Ã•','Ã“','Ã’','Ã”','Ã–',//O
        'Ãš','Ã™','Ã›','Ãœ',//U
    );
    $substits = array(
        'c','C',
        'n','N',
        'a','a','a','a','a',
        'e','e','e','e',
        'i','i','i',
        'o','o','o','o','o',
        'u','u','u','u',
        'A','A','A','A','A',
        'E','E','E','E',
        'I','I','I','I',
        'O','O','O','O','O',
        'U','U','U','U'
    );
    $texto = str_replace($acentos,$substits,$texto);
    $ntexto = '';
    $permitidos = 'abcdefghijklmnopqrstuvxywzABCDEFGHIJKLMNOPQRSTUVXYWZ0123456789.-_';
    for($x=0; $x<strlen($texto); $x++){
        if(strpos($permitidos,$texto[$x]) !== false){
            $ntexto .= $texto[$x];
        }
    }
    return $ntexto;
}
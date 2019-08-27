Classe de Mascára

Usage

// Caminho do arquivo
include './mascara.php';

$mascara = new Mascara('12345678910', '###.###.###-##');
$mascara = $mascara->doMask(); /// Valor com a mascara aplicada

echo $mascara; 
/// tela 123.456.789-10

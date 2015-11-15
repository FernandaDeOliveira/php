<?php
$num=$_GET["num"];
///chamar o diretorio por source
//ver uma forma de gerar um grafico de numero d pessoas naquele mes
//foreach (glob("img/3/*.jpg") as $filename) {
  /*/ echo "<img src='$filename' width='100' height='100'><br>";
  
while($num=3){
?>
<div>
<img src="img/3"></div>
<?php
  $dir = "img/";
  $files = scandir($dir);
  foreach ($files as $file){
     // diretório + nome do arquivo de imagem
     $caminho_completo = $dir.$file;
     // eliminando o '.' e '..'
     if ($file != '.' && $file != '..'){
        echo "<img src='{$caminho_completo}' alt='Fotos' />";
     }	
   }
   $fileName="3";
foreach ((array)glob("{*jpg,*png,*gif}", GLOB_BRACE) as $fileName )
{
<p>
    <a rel="lightbox" href="<?php echo $fileName; ?>">
        <img alt="imagem" src="<?php echo $fileName; ?>" />
    </a>
</p>
<?php
}
}

?>
}*/
if($num=3){
$dir = "3/";
$pasta= opendir($dir);
while ($arquivo = readdir($pasta)){
if ($arquivo != ‘.’ && $arquivo != ‘..’){
echo $arquivo . ‘<br />’;

		}

	}
}
?>



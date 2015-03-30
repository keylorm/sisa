
<?php
if ($items){
$imagen ="";
?>
<!-- Place somewhere in the <body> of your page -->
<?php for ($i=0; $i < count($items); $i++) {
	$url = "";

	if (isset($items[$i]['field_logo_link']['#items'][0]['value'])){
			$url = $items[$i]['field_logo_link']['#items'][0]['value'];
		}
		if($i==(count($items)-1)){
			$last="logo-marca-last";
		}else{
		$last="";
		}
		if($i==0){
			$first="logo-marca-first";
		}else{
		$first="";
		}
		if($url != ''){
			$imagen .= "<li class=\"logo-marca logo-marca-".($i+1)." ".$first." ".$last."\">
			<a href=\"".$url."\" target=\"_blank\"><img src=\"/sites/default/files/imagen_marca/".$items[$i]['field_logo_marca']['#items'][0]['filename']."\" /></a>
			</li>";
		}else{
			$imagen .= "<li class=\"logo-marca logo-marca-".($i+1)." ".$first." ".$last."\">
			<img src=\"/sites/default/files/imagen_marca/".$items[$i]['field_logo_marca']['#items'][0]['filename']."\" />
			</li>";
	}
} ?>
<div class="marcas">
	<h3>Representantes exclusivos de las marcas:</h3>
		<ul class="listado-marcas">
		<?php print $imagen ?>
	</ul>
</div>
<?php } ?>
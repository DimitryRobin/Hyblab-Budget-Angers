<?php
echo '
<FOOTER class="main-section">
	<!--Fin du scroll jule et la dette-->
	<!--jule-->
	<DIV class="container"><!--Slide entière-->
		<DIV class="row"><!--image du personnage-->
			<FIGURE class="text-right wow fadeInUp delay-02s">
				<IMG src="" alt="jules" />
			</FIGURE>
		</DIV>
	<DIV><!--Bulle-->
		<P class="bulle"><!--texte a afficher-->Lorem ipsum dolor sit alet, 
			<SPAN class="cover"</SPAN>
		</P>
	</DIV>
	<!--Ancre vers la carte-->
	<!--Ancre vers le haut de la page-->
	
	</DIV><!--Fin de la slide-->
	<SCRIPT text="javascript">
		var $p = $("p.bulle"),
		$cover = $(".cover"),
		width = $p.width(),
		decrement = width / $p.text().length;
		addChar();
	</SCRIPT>
</FOOTER>';
?>
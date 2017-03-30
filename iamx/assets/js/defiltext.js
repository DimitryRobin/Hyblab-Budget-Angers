
	// --------------------------------------------------------------
	// Text Defil
	// --------------------------------------------------------------
	
	var activeIntro;
	$timeout = 50;
	var $messageIntro = 'Salut, moi, c\'est Jules, j\'ai 16 ans et je suis passionné de basket, que je pratique deux fois par semaine au parc des sports de la Baumette. Mes parents, ma soeur Chloé et moi allons souvent voir les matchs du SCO d\'Angers le weekend au stade Jean Bouin récemment renommé Raymond Kopa.'.split('').reverse(),
		$textePere1 = 'Bonjour, nous sommes les parents de Jules et Chloé Nous habitons boulevard Henri Arnauld près du quai.'.split('').reverse(),
		$textemere1 = 'Je m\'appelle Sophie, j\'ai 42 ans et je travaille au centre des congrès d\'Angers depuis maintenant 13 ans, en tant que chargée d\'évènementiel.'.split('').reverse(),
		$textecloe1 = 'Coucou, je m\'appelle Chloé, j\'ai sept ans et je fais du patin à glace depuis 2 ans. J\'adore ça, mais je trouve que la patinoire est trop loin de ma maison et trop petite.'.split('').reverse(),
		$textecloe2 = 'Dis Jules, j\'ai vu quelqu\'un jeter un papier par terre, j\'ai fait pareil, mais la maîtresse a dit que ce n\'était pas bien, pourquoi ?'.split('').reverse(),
		$textejule2 = 'Elle a raison ta maîtresse, tu ne dois pas jeter de déchets par terre, car cela pollue, mais aussi parce que des gens sont payés pour nettoyer et toi, tu ne respectes par leur travail si tu fais ça. ça fait partie des nombreuses dépenses assurées par la ville au quotidien.'.split('').reverse(),
		$texteJule3 = 'Mais quand la ville dépense de l\'argent elle en gagne aussi, par exemple quand papa et maman gare la voiture rue Rabelais, ils doivent payer le stationnement, cela rapporte donc de l\'argent à la ville.'.split('').reverse()
	
	
	
	inView('p#intro').on("enter", function()
	{
		activeIntro=true;
		if(activeIntro)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#intro').append($messageIntro.pop());
				
				if ($messageIntro.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, $timeout);
		}
		else clearInterval(outputSlowly);
	})
	.on("exit", function()
	{
		$('p#intro').replaceWith('<p id="intro"></p>');
		activeIntro = false;
	});
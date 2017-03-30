
	// --------------------------------------------------------------
	// Text Defil
	// --------------------------------------------------------------
	
	var activeIntro,
		activeCloe1,
		activeCloe2,
		activePere1,
		activeMere1,
		activeJule2,
		activeJule3,
		activeCloePatine,
		activeMereCongres,
		activeSCO,
		activeMaine,
		activeInvest,
		activeJuleDette,
		activePereDette,
		
		
		
	timeout = 50;
	var messageIntro = 'Salut, moi, c\'est Jules, j\'ai 16 ans et je suis passionné de basket, que je pratique deux fois par semaine au parc des sports de la Baumette. Mes parents, ma soeur Chloé et moi allons souvent voir les matchs du SCO d\'Angers le weekend au stade Jean Bouin récemment renommé Raymond Kopa.'.split('').reverse(),
		messagePere1 = 'Bonjour, nous sommes les parents de Jules et Chloé Nous habitons boulevard Henri Arnauld près du quai.'.split('').reverse(),
		messageMere1 = 'Je m\'appelle Sophie, j\'ai 42 ans et je travaille au centre des congrès d\'Angers depuis maintenant 13 ans, en tant que chargée d\'évènementiel.'.split('').reverse(),
		messageCloe1 = 'Coucou, je m\'appelle Chloé, j\'ai sept ans et je fais du patin à glace depuis 2 ans. J\'adore ça, mais je trouve que la patinoire est trop loin de ma maison et trop petite.'.split('').reverse(),
		messageCloe2 = 'Dis Jules, j\'ai vu quelqu\'un jeter un papier par terre, j\'ai fait pareil, mais la maîtresse a dit que ce n\'était pas bien, pourquoi ?'.split('').reverse(),
		messageJule2 = 'Elle a raison ta maîtresse, tu ne dois pas jeter de déchets par terre, car cela pollue, mais aussi parce que des gens sont payés pour nettoyer et toi, tu ne respectes par leur travail si tu fais ça. ça fait partie des nombreuses dépenses assurées par la ville au quotidien.'.split('').reverse(),
		messageJule3 = 'Mais quand la ville dépense de l\'argent elle en gagne aussi, par exemple quand papa et maman gare la voiture rue Rabelais, ils doivent payer le stationnement, cela rapporte donc de l\'argent à la ville.'.split('').reverse()
		messageCloePatine = 'Oh trop cool, une nouvelle patinoire'.split('').reverse(),
		messageMereCongres= 'La rénovation permettra de mettre en valeur les événements à venir'.split('').reverse(),
		messageSCO = 'ALLEZ LE SCO !!'.split('').reverse(),
		messageJuleTennis = 'Hâte, mais stressé pour mon tournoi de tennis demain'.split('').reverse(),
		messagePereMaine = 'Ce sera plus agréable de rejoindre le centre-ville à pied'.split('').reverse(),
		messageJuleInvest = 'Ces 5 projets ne sont pas les seuls investissements de la ville, il y en a de nombreux autres que nous pouvons classer par catégories.'.split('').reverse(),
		messageJuleDette = 'Papa à force d\'emprunter la ville prend-elle des risques ?'.split('').reverse(),
		messagePereDette = 'Jules tu sais, emprunter c\'est construire pour l\'avenir aussi.'.split('').reverse(),
	
	inView('p#intro').on("enter", function()
	{
		//$('p#intro').innerHTML(messageIntro).show();
		activeIntro=true;
		if(activeIntro)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#intro').append(messageIntro.pop());
				
				if (messageIntro.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#pere1').on("enter", function()
	{
		//$('p#intro').innerHTML(messageIntro).show();
		if(activePere1)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#pere1').append(messagePere1.pop());
				
				if (messageIntro.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#mere1').on("enter", function()
	{
		//$('p#intro').innerHTML(messageIntro).show();
		if(activeMere1)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#mere1').append(messageMere1.pop());
				
				if (messageMere1.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#cloe1').on("enter", function()
	{
		//$('p#intro').innerHTML(messageIntro).show();
		if(activeCloe1)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#cloe1').append(messageCloe1.pop());
				
				if (messageCloe1.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#cloe2').on("enter", function()
	{
		//$('p#intro').innerHTML(messageIntro).show();
		activeCloe2=true;
		if(activeCloe2)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#cloe2').append(messageCloe2.pop());
				
				if (messageCloe2.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);
					activeJule2=true;					
					if(activeJule2)
					{
						var outputSlowly = setInterval(function() {
						
							$('p#jule2').append(messageJule2.pop());
							
							if (messageJule2.length === 0) 
							{
								// No more characters. Break out.
								clearInterval(outputSlowly);   
							}
							
						}, timeout);
					}
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#jule2').on("enter", function()
	{
		if(activeJule2)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#jule2').append(messageJule2.pop());
				
				if (messageJule2.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		//$('p#intro').innerHTML(messageIntro).show();
		
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#jule3').on("enter", function()
	{
		//$('p#intro').innerHTML(messageIntro).show();
		activeJule3=true;
		if(activeJule3)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#jule3').append(messageJule3.pop());
				
				if (messageJule3.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#cloepatine').on("enter", function()
	{
		//$('p#intro').innerHTML(messageIntro).show();
		activeCloePatine=true;
		if(activeCloePatine)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#cloepatine').append(messageCloePatine.pop());
				
				if (messageCloePatine.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#merecongres').on("enter", function()
	{
		//$('p#intro').innerHTML($messageIntro).show();
		activeMereCongres=true;
		if(activeMereCongres)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#merecongres').append(messageMereCongres.pop());
				
				if (messageMereCongres.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#groupesco').on("enter", function()
	{
		//$('p#intro').innerHTML(messageIntro).show();
		activeSCO=true;
		if(activeSCO)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#groupesco').append(messageMereCongres.pop());
				
				if (messageMereCongres.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#juletennis').on("enter", function()
	{
		//$('p#intro').innerHTML(messageIntro).show();
		activeTennis=true;
		if(activeTennis)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#juletennis').append(messageJuleTennis.pop());
				
				if (messageJuleTennis.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#peremaine').on("enter", function()
	{
		//$('p#intro').innerHTML(messageIntro).show();
		activeMaine=true;
		if(activeMaine)
		{
			var outputSlowly = setInterval(function() {
			
				$('p#peremaine').append(messagePereMaine.pop());
				
				if (messagePereMaine.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
				}
				
			}, timeout);
		}
		else clearInterval(outputSlowly);
	})
	/*.on("exit", function()
	{
		//$('p#intro').hide();
		activeIntro = false;
	})*/;
	
	inView('p#juleinvest').on("enter", function()
	{
		activeInvest=true;
		if(activeInvest)
		{
			var outputSlowly = setInterval(function() 
			{
				$('p#juleinvest').append(messageJuleInvest.pop());
				
				if (messageJuleInvest.length === 0) 
				{
					// No more characters. Break out.
					clearInterval(outputSlowly);   
					activeJuleDette = true;
					if(activeJuleDette)
					{
						var outputSlowly = setInterval(function() 
						{
							$('p#juledette').append(messageJuleDette.pop());					
							if (messageJuleDette.length === 0) 
							{
								// No more characters. Break out.
								clearInterval(outputSlowly);
								activePereDette = true;
								if(activePereDette)
								{
									var outputSlowly = setInterval(function() 
									{
										$('p#peredette').append(messagePereDette.pop());								
										if (messagePereDette.length === 0) 
										{
											// No more characters. Break out.
											clearInterval(outputSlowly);
										}
									}, timeout);
								}
							}
						}, timeout);
					}
				}
			}, timeout);
		}
		else clearInterval(outputSlowly);
	});
//Caso o js esteja desativado
	var root = document.documentElement;
	root.className += ' js'; 

	//Função para coletar a altura dos elementos
	function boxTop(idBox){

		/*Offset pega os valores de left e top
		depois selecionamos o idbox e escolhemos o topo*/

		var boxOffset = $(idBox).offset().top;

		return boxOffset;

	}

	$(document).ready(function (){

		//Elementos que vamos animar no caso a clase anime
		var $target = $('.anime');

		//Classe de animação durante o scroll
		animationClass = 'anime-init';

		//A altura total da janela
		windowHeight = $(window).height();

		offset = windowHeight - (windowHeight / 4);

		function animeScroll(){

			//Distância total entre o scroll e o topo da página
			var documentTop = $(document).scrollTop();

			//Cada classe animada será selecionada com o each

			$target.each(function(){

			//Caso a altura seja maior adicione a classe de animação
			if(documentTop > boxTop(this) - offset){

				$(this).addClass(animationClass);

			//Caso o contrário remova
			}else{

				$(this).removeClass(animationClass);

			}

		})

		}

		//Ativando a Função
		animeScroll();

		//Sempre que o usuário der scroll ative a função novamente
		$(document).scroll(function(){

			animeScroll();
			
		});



	});
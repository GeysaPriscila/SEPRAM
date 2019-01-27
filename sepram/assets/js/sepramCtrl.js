
		var app = angular.module("sepram", []);
		app.controller("sepramCtrl", function($scope, $http){
			$scope.app = "sepram";
            
            // posts do feed
            $scope.posts = [

                {autor: "Ítalo Sousa", autorPage: "perfil.php",fotoAutor: "img/perf.png", localidade: "Recife-PE", imagem: "img/box1.png", titulo: " Avaliação de Transtornos Mentais Graves", subtitulo: "Precisamos de pessoas com habilidades nas áreas de psiquiatria, bioquímica e/ ou química e estatisca para uma comparação entre pessoas ...", tag1: "#psiquiatria", tag2: "#estatística", tag3: "#bioquímica", vagas: "09", linkDetalhe: "projeto_user.php", horas: "4 horas semanais", data: "29/07/2017", email: "italusousa@gmail.com", descricao: "Precisamos de pessoas com habilidades nas áreas de psiquiatria, bioquímica e/ ou química e estatisca para uma comparação entre pessoas com transtornos mentais graves e pessoas saudáveis. Este projeto tem como objetivo comparar o perfil metabólico de indivíduos com esquizofrenia, transtorno bipolar e dependência de crack com indivíduos saudáveis. Será uma analise com 90 pessoas (30 com esquizofrenia, 30 com transtorno bipolar e 30 com dependência de crack) comparando com 30 pessoas saudáveis. Para a realização deste projeto é necessário pessoas com habilidades nas áreas de psiquiatria, bioquímica e/ ou química e estatista. Vagas Limitadas!"},
                
                {autor: "Arthur Pedro", autorPage: "perfil_arthur.php", fotoAutor: "img/perf2.png", localidade: "Recife-PE", imagem: "img/box2.png", titulo: "Autismo, Dança e Educação", subtitulo: "Precisamos de psicopedagogos, professor de dança e profissional na área de educação com o objetivo de...", tag1: "#psicopedagogia", tag2: "#dança", tag3: "#educação", vagas: "06", linkDetalhe: "#", horas: "", data: "", email: "", descricao: ""},
                
                {autor: "Geysa Priscila", autorPage: "perfil_geysa.php", fotoAutor: "img/perf4.png", localidade: "Recife-PE", imagem: "img/box4.png", titulo: "Tecnologia da Educação", subtitulo: "Estamos à procura de pessoas, com habilidades necessárias, que desejam se voluntariar contribuindo com...", tag1: "#educação", tag2: "#pedagogia", tag3: "#tecnologia", vagas: "05", linkDetalhe: "te.php", horas: "3 horas semanais", data: "05/06/2017", email: "geysa.pri@gmail.com", descricao: "Estamos à procura de pessoas, com habilidades necessárias, que desejam se voluntariar contribuindo com o desenvolvimento do nosso projeto. O objetivo é desenvolver maneiras de utilizar a tecnologia na sala de aula de uma forma diferente e que os alunos consigam aprender através de tecnologias que atualmente vem cada vez mais se inovando."},  
                
                {autor: "Róbson José", autorPage: "perfil_robson.php", fotoAutor: "img/perf3.png", localidade: "Recife-PE", imagem: "img/box3.png", titulo: "Aplicativo para Estimulação de Crianças com Síndrome de Down", subtitulo: "Precisamos de pessoas com habilidades nas áreas sistema de informação e design computação visando desenvolver um aplicativo...", tag1: "#design", tag2: "#programador ", tag3: "#educação", vagas: "04", linkDetalhe: "#", horas: "", data: "", email: "", descricao: ""}                    
            ];
            
            //usuarios
            $scope.notificacoes2 = [
                {nome: "Ítalo Sousa", email: "italusousa@gmail.com", localidade: "Recife-PE", sobre: "Desenvolvedor front-end que participou do s2b em 2017 na trilha Web Design. Proativo e cheio de vontade de colocar ideias para frente!", hab1: "html5", hab2: "css3", hab3: "angularJs", foto: "img/perf.png"},

                {nome: "Arthur Pedro", email: "arthurpedro995@gmail.com", localidade: "Recife-PE", sobre: "Estudante de design gráfico do IFPE campus Recife. Atuo na área de branding e identidade visual.", hab1: "design", hab2: "UI/UX", hab3: "branding", foto: "img/perf2.png"},

                {nome: "Geysa Priscila", email: "geysapriscilasz@gmail.com", localidade: "Recife-PE", sobre: "Estudante de Gestão de TI na Estácio, Técnico em MSI no IFPE, atuo como voluntária numa ONG na area administrativa.", hab1: "html5", hab2: "javaScript", hab3: "administracao", foto: "img/perf4.png"},

                {nome: "Róbson José", email: "robbinho.jose2014@gmail.com", localidade: "Recife-PE", sobre: "Estudante de direito disponível para projetos sociais envolvendo a educação brasileira e as leis de inclusão social dos menos favorecidos.", hab1: "direito", hab2: "educação", hab3: "esporte", foto: "img/perf3.png"}
            ];

            // notificacoes
            $scope.notificacoes = [
                {foto: "img/perf4.png", nome: "Geysa Priscila ", txt: 'solicitou para participar do seu projeto: "Avaliação de Transtornos Mentais Graves".', link: "projeto_user.php"},
                {foto: "img/perf3.png", nome: "Róbson José ", txt: 'solicitou para participar do seu projeto: "Avaliação de Transtornos Mentais Graves".', link: "projeto_user.php"},
                {foto: "img/perf2.png", nome: "Arthur Pedro ", txt: 'solicitou para participar do seu projeto: "Avaliação de Transtornos Mentais Graves".', link: "projeto_user.php"},
                {foto: "img/se.png", nome: "Equipe Sepram ", txt: 'Enviou uma mensagem: "Bem vindo a nossa comunidade de ideias!"', link: "main.php"},
            ];
            
            //usuarios
            

		});

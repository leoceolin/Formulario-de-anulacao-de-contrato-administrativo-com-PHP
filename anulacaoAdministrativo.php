<?php

	/*$nome = 'Leonel Ceolin Farias';
	$nacionalidade = 'brasileiro';
	$estado_civil = 'solteiro';
	$profissao = 'programador';
	$cpf = '017.581.341-86';	
	$rg = 1625624;
	$endereco = 'Rua: Cláudio Goelzer nº: 1168  Bairro: Parque Alvorada  CEP:79822-492  UF: Dourados-MS';
	$representante_legal = 'Projud Tecnologia';
	$cidade_Advogado = 'Dourados';
	$endereco_Advogado = 'Rua: Antonio Emilio de Figueiredo nº: 1010  Bairro: Jardim Clímax  CEP:79845-123  UF-MS';
	$cidade_INPI = 'Dourados';
	$endereco_INPI = 'Avenida: Marcelino Pires nº: 8080  Bairro: centro  CEP:45781-654  UF: Dourados-MS';
	$empresa_requerida = 'Solucionare'; //razão social é o nome da empresa ?
	$endereco_empresa_requerida = 'Avenida: Presidente Vargas nº: 1080  Bairro: centro  CEP:54891-774  UF: Belo Horizonte/MG';

	$cpf_cnpj_requerente = '01758134186';
	$atividade_requerente = 'Recorte de publicações';
	$produto_requerente = 'Publicações para advogados';

	$carta_Patente_Requerido = 123456789;

	$carta_Patente_Anulada = 999999999;*/
	
	$valor_Extenso = 'dois mil reais';
	
	$nome_Advogado = 'Eder Vieira';
	$oab = 12345;
	$uf_OAB = 'MS';

	// Cria uma variável que terá os dados do erro
	$erro = false;

	$nome = $_POST["nomeCompleto"];
	$nacionalidade = $_POST["nacionalidade"];
	$estado_civil = $_POST["estadoCivil"];
	$profissao = $_POST["profissao"];
	$cpf = $_POST["cpf"];
	$rg = $_POST["rg"];
	$endereco = $_POST["endereco"];
	$representante_legal = $_POST["representanteLegal"];
	$cidade_Advogado = $_POST["cidadeAdvogado"];
	$endereco_Advogado = $_POST["enderecoAdvogado"];
	$cidade_INPI = $_POST["cidadeINPI"];
	$endereco_INPI = $_POST["enderecoINPI"];

	$empresa_requerida = $_POST["empresaRequerida"];
	$endereco_empresa_requerida = $_POST["enderecoRequerido"];

	$cpf_cnpj_requerente = $_POST["cnpjRequerente"];
	$atividade_requerente = $_POST["atividadeIndustrial"];
	$produto_requerente = $_POST["produtoRequerente"];

	$carta_Patente_Requerido = $_POST["numeroCartaPatenteRequerido"];
	$carta_Patente_Anulada = $_POST["numeroCartaPatenteAnulada"];
	$valor_Extenso = $_POST["valorExtenso"];
	//$nome_Advogado = $_POST["nome_Advogado"];
	//$oab = $_POST["oab"];
	//$uf_OAB = $_POST["uf_OAB"];s
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Anulação de ato administrativo</title>		
		<link rel="stylesheet" href="/css/style.php">
	</head>
	<body>
		<div class='container'> 
			<h1 class='titulo'>EXCELENTÍSSIMO SENHOR DOUTOR JUIZ DE DIREITO DA 1ª VARA DA JUSTIÇA¹ FEDERAL DE DOURADOS/MS</h1>
			<div class='espaco'></div>
			<div>
				<p class='texto'> <?php echo '<b>'.$nome.'</b>' ?>, <?php echo $nacionalidade ?>, <?php echo $estado_civil ?>, <?php echo $profissao ?>, portador da cédula de identidade RG nº <?php echo $rg ?> e inscrito no CPF/MF sob nº <?php echo $cpf ?>, residente e domiciliado na <?php echo $endereco ?>, representante legal da pessoa jurídica de direito privado denominada <?php echo '<b>'.$representante_legal.'</b>' ?>, por seu Advogado e bastante procurador ao final assinado, conforme instrumento de mandato em anexo (doc. ...), com escritório profissional na cidade de <?php echo $cidade_Advogado ?> na <?php echo $endereco_Advogado ?>, onde recebe correspondências e intimações para os atos processuais, vem, respeitosamente, à honrosa presença de Vossa Excelência, com fulcro na Lei nº 9.279/96, propor a presente</p>
			</div>

			<div>
				<h1 class='subtitulos'>AÇÃO DE ANULAÇÃO DE ATO ADMINISTRATIVO</h1>
				<p class='texto'>em face de INPI – INSTITUTO NACIONAL DE PROPRIEDADE INDUSTRIAL, Autarquia Federal do Ministério da Justiça, como sede na cidade de <?php echo $cidade_INPI ?>, na <?php echo $endereco_INPI ?>, e <?php echo '<b>'.$empresa_requerida.'</b>' ?> (razão social da empresa requerida), localizada na <?php echo $endereco_empresa_requerida ?>, pelas razões de fato e de direito que passa a expor.</p>
			</div>

			<div>
				<h1 class='subtitulos'>I – DOS FATOS</h1>
				<p class='texto'>A Requerente é devidamente inscrita na Junta Comercial com CNPJ/MF nº <?php echo $cpf_cnpj_requerente ?> e tem como atividade industrial e comercial, conforme contrato social anexo (doc. nº ...), a produção de <?php echo $atividade_requerente ?> objetivar conforme estiver disposto no contrato social).
				</p>

				<p class='texto'>Também tem autorização para fabricar e comercializar <?php echo $produto_requerente ?> cuja fabricação é muito simples, de modo que não requereu a patente deste produto.	
				</p>

				<p class='texto'>Surpreendentemente a empresa do Requerido, acima qualificada, requereu a patente e obteve o privilégio sobre o mesmo produto, conforme Carta Patente MU nº <?php echo $carta_Patente_Requerido ?> concedido nos termos da Lei nº 9.279/96. Com tais documentos, o Requerido propôs ação de contrafação em face do Requerente e com o pedido de penalidade.		
				</p>
			</div>

			<div>
				<h1 class='subtitulos'>II – DO DIREITO</h1>
				<p class='texto'>O Requerente tem seus direitos protegidos pela Lei de Patentes, sendo o processo administrativo de nulidade regulado pelos artigos 165 e 167 da LPI.	
				</p>

				<p class='texto'>“....................” (descrever doutrina e jurisprudência que afirmam a nulidade do ato de concessão da patente.) </p>
			</div>

			<div>
				<h1 class='subtitulos'>III – DO PEDIDO</h1>
				<p class='texto'>Diante do acima exposto, requer a citação dos Requeridos nos endereços declinados no preâmbulo desta Exordial, para que contestem a ação no prazo legal, com a advertência de que não o fazendo ser-lhe-ão aplicados os efeitos da confissão e revelia quanto à matéria de fato.
				</p>

				<p class='texto'>Requer provar o alegado por todos os meios de provas em direito admitidas, especialmente pelos depoimentos pessoais dos Requeridos, por intermédio de seus representantes, oitiva de testemunhas, juntada de documentos, expedição de ofícios e precatórias, perícias e demais provas pertinentes.</p>

				<p class='texto'>Requer ao final que a presente seja julgada PROCEDENTE, para anular-se a Carta Patente MU nº <?php echo $carta_Patente_Anulada ?>, condenando-se os Requeridos nas despesas processuais e verba honorária de sucumbência.</p>

				<p class='texto'>Atribui-se à presente o valor de R$ <?php echo $valor_Extenso ?> para efeitos fiscais.</p>				
			</div>
			<div class='assinatura'>				
				<p>Nestes termos,</p>
				<p>Pede deferimento,</p>
				<p>........................., ........ de .............. de ........</p>

				<p>Advogado <?php echo $nome_Advogado ?></p>
				<p>OAB/<?php echo $uf_OAB ?> nº: <?php echo $oab ?> </p>
			</div>

			
		</div>
	</body>
	<p class='rodape'>¹ A ação de nulidade de patente será ajuizada no foro da Justiça Federal, haja vista o art. 175 da Lei nº 9.279, de 14-5-1996, que regula os direitos e obrigação relativos à propriedade industrial.</p> 
</html>
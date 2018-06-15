<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Identity by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<span>
								<p><strong><h2>Dados Pessoais</h2></strong></p>
							</span>
						</header>
						
						<form method="post" action="#">
							<div class="field">
								<input type="text" name="nome" id="name" placeholder="Name" />
							</div>
							<div class="field">
								<input type="text" name="rg" id="rg" placeholder="RG" />
							</div>
							<div class="field">
								<input type="text" name="cpf" id="cpf" placeholder="CPF" />
							</div>
							<div class="field">
								<input type="text" name="nasc" id="nasc" placeholder="Nascimento - DD/MM/AAAA" />
							</div>
							<div class="field">
								<input type="text" name="end" id="end" placeholder="Endereço" />
							</div>
							<div class="field">
								<input type="text" name="num" id="num" placeholder="Nº" />
							</div>
							<div class="field">
								<input type="text" name="bairro" id="bairro" placeholder="Bairro" />
							</div>
							<div class="field">
								<input type="text" name="cidade" id="cidade" placeholder="Cidade" />
							</div>
							<div class="field">
								<input type="text" name="tel" id="tel" placeholder="Telefone" />
							</div>
							<div class="field">
								<input type="text" name="cel" id="cel" placeholder="Celular/WhatsApp" />
							</div>
							<div class="field">
								<input type="text" name="emergencia" id="emergencia" placeholder="Contato de emergência" />
							</div>
							<div class="field">
								<input type="email" name="e-mail" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<div class="select-wrapper">
									<select name="department" id="department">
										<option value="">Tipo de usuário</option>
										<option value="sales">Adminstração</option>
										<option value="tech">Aluno</option>
										<option value="null">Professor</option>
									</select>
								</div>
							</div>
						</form>
						<hr />
						<span>
							<p><strong><h2>Plano contratado</h2></strong></p>
						</span>
						<form method="post" action="#">
							<div class="field">
								<input type="text" name="nome" id="name" placeholder="Name" />
							</div>
							<div class="field">
								<input type="text" name="rg" id="rg" placeholder="RG" />
							</div>
							<div class="field">
								<input type="text" name="cpf" id="cpf" placeholder="CPF" />
							</div>
							<div class="field">
								<input type="text" name="nasc" id="nasc" placeholder="Nascimento - DD/MM/AAAA" />
							</div>
							<div class="field">
								<input type="text" name="end" id="end" placeholder="Endereço" />
							</div>
							<div class="field">
								<input type="text" name="num" id="num" placeholder="Nº" />
							</div>
							<div class="field">
								<input type="text" name="bairro" id="bairro" placeholder="Bairro" />
							</div>
							<div class="field">
								<input type="text" name="cidade" id="cidade" placeholder="Cidade" />
							</div>
							<div class="field">
								<input type="text" name="tel" id="tel" placeholder="Telefone" />
							</div>
							<div class="field">
								<input type="text" name="cel" id="cel" placeholder="Celular/WhatsApp" />
							</div>
							<div class="field">
								<input type="text" name="emergencia" id="emergencia" placeholder="Contato de emergência" />
							</div>
							<div class="field">
								<input type="email" name="e-mail" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<div class="select-wrapper">
									<select name="department" id="department">
										<option value="">Tipo de usuário</option>
										<option value="sales">Adminstração</option>
										<option value="tech">Aluno</option>
										<option value="null">Professor</option>
									</select>
								</div>
							</div>
							<ul class="actions">
								<li><a href="#" class="button">Cadastrar</a></li>
							</ul>
						</form>
						<hr />
						<footer>
							<ul class="icons">
								<li><a href="#" class="fa-twitter">Twitter</a></li>
								<li><a href="#" class="fa-instagram">Instagram</a></li>
								<li><a href="#" class="fa-facebook">Facebook</a></li>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; Jane Doe</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>
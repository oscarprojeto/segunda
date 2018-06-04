<?	
session_start();
$titulo = "Quem somos";
include("controller/controller.php");
include("controller/class/login.class.php");
include("controller/class/controller.class.php");
include("view/views/head.php");
include("view/views/menu.php");
include("view/class/view.class.php");

Controller::dadosClinica();


?>
	 
	<!--about-->
	<div class="contact">
		<div class="container">
			<div class="work-title">
				<h3>CONTACTA<span><? echo NOME; ?></span></h3>
			</div>
			<div class="contact-infom">
				<h4>Onde estamos:</h4>
				<p>Com um atendimento 24/24, e serviços domiciliar, estamos localizado na avenida 21 de Janeiro </p>
			</div>
			<div class="address">
				<div class="col-md-4 address-grids">
					<h4>Endereço :</h4>
					<ul>
						<li class="home"> </li>
						<li><p>Avenida 21 de Janeiro<br>
								Antes do Banco BIC<br>
								Luanda, Futungo de Belas</p>
						</li>
					</ul>
				</div>
				<div class="col-md-4 address-grids">
					<h4>Contacto  :</h4>
					<p><span class="phn"></span>+244 925 054 487</p>
					<p><span class="fax"></span>+244 992 054 487</p>
				</div>
				<div class="col-md-4 address-grids">
					<h4>EMAIL :</h4>
					<p><span class="mail"></span><a href="mailto:example@mail.com">hospital@gmail.com</a></p>
				</div>
				<div class="clearfix"> </div>
			</div>		
			<div class="contact-form">
				<h4>FORMULÁRIO DE CONTACTO</h4>
				<form class="falaConosco" method="POST">
					<input name="nome" type="text" value="Nome" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input name="email" type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input name="telefone" type="text" value="Telefone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telefone';}" required="">
					<textarea name="mensagem" type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mensagem...';}" required="">Mensagem...</textarea>
					<button class="btn1">Enviar</button>
					
				</form>
			</div>	
		</div>
		<div class="container">
			<div class="work-title">
				<h3>ESTAMOS <span>AQUI</span></h3>
			</div>
		</div>
		<div class="map">	
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d441.17765470722225!2d13.18698194598087!3d-8.896928897399274!2m3!1f0!2f41.616765461567105!3f0!3m2!1i1024!2i768!4f20!3m3!1m2!1s0x0%3A0x71dfb11b3e6d086a!2sCl%C3%ADnica+Multiperfil!5e1!3m2!1sen!2s!4v1477737473112" width="600" height="450" frameborder="0" style="border:0"  ></iframe>
		</div>
	</div>

	<!--//about-->	
	<? View::footer(CABONTECH_SITE,CABONTECH,NOME,HOME); ?>
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
	<div class="about">
		<div class="container">
			<div class="work-title">
				<h3>Quem<span>Somos</span></h3>
			</div>
			<div class="about-text">
				<div class="col-md-4 about-text-left">
					<img src="images/img14.jpg" alt=""/>
				</div>
				<div class="col-md-8 about-text-right">
					<h4><? Controller::getNomeClinica();  ?> </h4>
					<p>A <? Controller::getNomeClinica(); ?> uma Cínica Angolana fundada em 1998 
						está expandindo sua estrutura para duplicar a capacidade de atendimento, criando novas unidades de tratamento, centros cirúrgicos, alas especializadas e mais leitos. O projeto visa também ampliar as atividades de apoio ao Sistema Único de Saúde (SUS), a cooperação público-p​rivada​​ e as ações de ensino e pesquisa da instituição.</p>
						<p></p>
						<p>O perfil dos colaboradores que trabalham na 
						<? Controller::getNomeClinica(); ?> é de pessoas determinadas a crescer, 
						a se desenvolver e, sobretudo, a praticar medicina com alma, pautada em 
						princípios éticos e humanos. Profissionais que, assim como a instituição,
						 colocam as pessoas em primeiro lugar.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?  View::nossoTeam(); 
				viEW::porqueNos();
			?>
		
		</div>
	</div>
	<!--//about-->	
	<? View::footer(CABONTECH_SITE,CABONTECH,NOME,HOME); ?>
<?php
	//conexão com banco de dados
	$host = "localhost";
	$user = "root";
	$pass = "root";
	$db   = "clinica";

	$conn = new mysqli($host,$user,$pass,$db);

	//páginas
	switch (@$_REQUEST["page"]) {
		//paciente
		case 'cad-paciente':
			include('paciente/cadastrar-paciente.php');
			break;		
		case 'lis-paciente':
			include('paciente/listar-paciente.php');
			break;
		case 'edi-paciente':
			include('paciente/editar-paciente.php');
			break;		
		case 'sal-paciente':
			include('paciente/salvar-paciente.php');
			break;

		//medico
		case 'cad-medico':
			include('medico/cadastrar-medico.php');
			break;		
		case 'lis-medico':
			include('medico/listar-medico.php');
			break;
		case 'edi-medico':
			include('medico/editar-medico.php');
			break;		
		case 'sal-medico':
			include('medico/salvar-medico.php');
			break;

		//prontuario
		case 'cad-prontuario':
			include('prontuario/cadastrar-prontuario.php');
			break;		
		case 'lis-prontuario':
			include('prontuario/listar-prontuario.php');
			break;
		case 'edi-prontuario':
			include('prontuario/editar-prontuario.php');
			break;		
		case 'sal-prontuario':
			include('prontuario/salvar-prontuario.php');
			break;

		default:
			include('dashboard.php');
	}
?>
<?php 

if (isset($_REQUEST['btnAccion'])) {
	switch ($_REQUEST['btnAccion']) {
		case 'Calcular_Porcentaje':
			if (!empty($_POST)) {
				$alert_error='';
				if (!empty($_POST['Ausensia'])) {
					$Ausensia=$_POST['Ausensia'];
                    $Mes=30;
					$Ausensia=abs($Mes-$Ausensia);
					$porcentaje=ceil($Ausensia*100/$Mes);
                    
                    $alert='<p class="msg_save"><i class="fas fa-user-graduate fa-2x"></i> El estudiante ha estado presente el '.$porcentaje.'% durante el mes.</p>';
				}
				if (!empty($_POST['Excusa'])) {
                    $Excusa=$_POST['Excusa'];
                    $Mes=30;
					$ExcusaTotal=ceil($Excusa/3);
					$AusensiaTotal=$ExcusaTotal;
                    $Ausensia=abs($Mes-$AusensiaTotal);
					$porcentaje=ceil($Ausensia*100/$Mes);
                    
                    $alert='<p class="msg_save"><i class="fas fa-user-graduate fa-2x"></i> El estudiante ha estado presente el '.$porcentaje.'% durante el mes.</p>';
				}
				if (empty($_POST['Ausensia']) || empty($_POST['Excusa'])) {
					$alert_error='<p class="msg_error"><i class="fas fa-exclamation fa-2x"></i> Debe de llenar al menos un campo.</p>';
				}else{
					$Ausensia=$_POST['Ausensia'];
					$Excusa=$_POST['Excusa'];
                    $Mes=30;
					$ExcusaTotal=ceil($Excusa/3);
					$AusensiaTotal=$Ausensia+$ExcusaTotal;

					$Ausensia=abs($Mes-$AusensiaTotal);
					$porcentaje=ceil($Ausensia*100/$Mes);
                    
                    $alert='<p class="msg_save"><i class="fas fa-user-graduate fa-2x"></i> El estudiante ha estado presente el '.$porcentaje.'% durante el mes.</p>';
				}
				
			}
			break;
	}
}

 ?>
<?php

class contactController {
	
	const CLASSDIR = 'model/';

	public function generateTable() {
		require_once(self::CLASSDIR.'/Contact.php');

		echo "
		<table class=\"table\">
			<tr>
				<th>Prénom</th>
				<th>Nom</th>
				<th>Société</th>
				<th>E-Mail</th>
				<th>N° de Téléphone</th>
			</tr>";

		$instance = databaseController::instance();
		$connection = $instance->connection();

		$sql = ('SELECT id FROM contact');
		$request = $connection->query($sql);
		
		while ($result = $request->fetch()){

			$contact = new Contact($result['id']);

			$firstName = $contact->getFirstName();
			$lastName = $contact->getLastName();
			$company = $contact->getCompany();
			$mail = $contact->getMail();
			$phone = $contact->getPhone();

			echo "
				<tr>
					<td>".$firstName."</td>
					<td>".$lastName."</td>
					<td>".$company."</td>
					<td>".$mail."</td>
					<td>".$phone."</td>
				</tr>";	
		}

		echo "</table>";
	}

}

?>
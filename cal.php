<?php

function square( $number ){
	$newNumber = $number * $number;
	return $newNumber;
	}
function cube( $number ){
	$newNumber = $number * $number * $number;
	return $newNumber;
	}

$chhut=$_POST['chhut'];

	if ($do == "Belhna"){
		if (($_POST['this'] != "") && ($_POST['that'] != "")) {
			$result = intval($_POST['this']) + intval($_POST['that']);
		} else {
			$buaina = "<font color=\"red\">Number eng emaw tal ziak ve la.</font>";
			$result = "N/A";
		}
	} elseif ($chhut == "Paihna"){
	
		if (($_POST['this'] != "") && ($_POST['that'] != "")) {
			$result = intval($_POST['this']) - intval($_POST['that']);
		} else {
			$buaina = "<font color=\"red\">Number eng emaw tal ziak ve la.</font>";
			$result = "N/A";
		}
	} elseif ($chhut == "Puntirna"){
	
		if (($_POST['this'] != "") && ($_POST['that'] != "")) {
			$result = intval($_POST['this']) * intval($_POST['that']);
		} else {
			$buaina = "<font color=\"red\">Number eng emaw tal ziak ve la.</font>";
			$result = "N/A";
		}
	} elseif ($chhut == "Semna"){
	
		if (($_POST['this'] != "") && ($_POST['that'] != "")) {
			$result = intval($_POST['this']) / intval($_POST['that']);
		} else {
			$buaina = "<font color=\"red\">Number eng emaw tal ziak ve la.</font>";
			$result = "N/A";
		}
	} elseif ($chhut == "SquareZawnna"){
	
		if ($_POST['this'] != "") {
			$result = intval(square ( $_POST['this'] ));
			$that = "";
		} else {
			$buaina = "<font color=\"red\">Field hmasa zawk a ruak tlat mai!</font>";
			$result = "N/A";
		}
	} elseif ($chhut == "SquareRootZawnna"){

		if ($_POST['this'] != "") {
			$result = number_format(sqrt(intval($_POST['this'])),2);
			$that = "";
		} else {
			$buaina = "<font color=\"red\">Field hmasa zawk a ruak tlat mai!</font>";
			$result = "N/A";
		}
	} elseif ($chhut == "CubeZawnna"){

		if ($_POST['this'] != "") {
			$result = cube ( intval($_POST['this']) );
			$that = "";
		} else {
			$buaina = "<font color=\"red\">Field hmasa zawk a ruak tlat mai!</font>";
			$result = "N/A";
		}
	}
?>

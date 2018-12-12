<?php

//symptom_list_model
//gets list of symptom screens

//$s_query = "SELECT * from screenlist 
//						WHERE seq LIKE '_003_001____'
//						AND s_type = 'screen'";
//$s_result = mysqli_query($link, $s_query);	

$s_query = "SELECT * from screenlist, cancerlist, cancer_symptoms
			WHERE seq LIKE '_003_001____'
			AND cancerlist.cancer = '".$cancer_type."'
			AND cancerlist.id = cancer_symptoms.cancer_id
			AND seq LIKE CONCAT('%', cancer_symptoms.symptom_id)
			AND s_type = 'screen'";
$s_result = mysqli_query($link, $s_query);

$symptom_array = array();

while($s_row = mysqli_fetch_array($s_result, MYSQLI_BOTH)){
	$symptom_array[$s_row["seq"]] = $s_row;
}

?>
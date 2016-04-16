<?php

function selectCountries( ){
	$query = "SELECT * FROM country_";
	$res = mysql_query ($query);
	$countries = array ();
	while($row = mysql_fetch_assoc($res)){
		$countries[] = $row;
	}
	return $countries;
}

function selectRegion(){
	$countryval = (int)$_POST['countryval'];
	$query = "SELECT * FROM region_ WHERE id_country = $countryval";
	$res = mysql_query($query);
	$return = "<option value='0'>Выберите тип вашего заказа</option>";
	while($row = mysql_fetch_assoc($res)){
		$return .= "<option value='{$row['id_region']}'>{$row['region_name_ru']}</option>";
	}
	return $return;
}

?>
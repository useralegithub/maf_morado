<?php
$id_term_expositores=43;
$current_year=get_terms('expositores',array('parent'=>$id_term_expositores,'order'=>'DESC'))[1];
header("Location:".home_url()."/expositores/".$current_year->name."/");
?>
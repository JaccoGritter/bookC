<?php

Class Book {
    public $titel;
    public $auteur;
    public $taal;
    public $paginas;
    public $opmerkingen;
    function __construct($titel, $auteur, $taal, $paginas, $opmerkingen) {
        $this->titel = $titel;
        $this->auteur = $auteur;
        $this->taal = $taal;
        $this->paginas = $paginas;
        $this->opmerkingen = $opmerkingen;
    }

    // // GETTERS
    // public function get_titel()
	// {
	// 	return $this->titel;
    // }
    
    // public function get_auteur()
	// {
	// 	return $this->auteur;
    // }
    
    // public function get_taal()
	// {
	// 	return $this->taal;
    // }
    
    // public function get_paginas()
	// {
	// 	return $this->paginas;
	// }

    // public function get_opmerkingen()
	// {
	// 	return $this->opmerkingen;
    // }

    // // SETTERS    
    // public function set_titel($titel)
	// {
	// 	$this->titel = $titel;
    // }
    
    // public function set_auteur($auteur)
	// {
	// 	$this->auteur = $auteur;
    // }
    
    // public function set_taal($taal)
	// {
	// 	$this->taal = $taal;
    // }
    
    // public function set_paginas($paginas)
	// {
	// 	$this->paginas = $paginas;
	// }

    // public function set_opmerkingen()
	// {
	// 	return $this->opmerkingen;
	// }

}

<?php
/**
 * Creacion de la clase ia. Ana Asins.
 */
class ia
{
    //Propiedades Fila i Columna
  public $Columna = '2';
  public $Fila = '3';

    //Declaracion de los metodos

  public function getColumna() {
    return $this->Columna;
  }

  public function getFila() {
    return $this->Fila;
  }
//Creación de setters
  public function setFila($fil) {
    $this->Fila = $fil;
  }
  public function setColumna($col) {
    $this->Columna = $col;
  }
  //Random
  public function RandomPos(){
    
  }
}

 ?>

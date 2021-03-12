<?php


/**
 *
 */
class RegistroLibreta
{
  private $nombre;
  private $direccion;
  private $numero_telefono;
  private $email;

  function __construct($entrada)
  {
    $this-> $nombre = $entrada['nombre'];
    $this-> $direccion = $entrada['direccion'];
    $this-> $numero_telefono = $entrada['numero'];
    $this-> $email = $entrada['email'];
  }

  public function  getInformacion()
    {
      $informacion['nombre'] = $this->nombre;
      $informacion['direccion'] = $this->direccion;
      $informacion['numero'] = $this->numero;
      $informacion['email'] = $this->email;
      return $informacion;
    }
  public function setInformacion($arreglo_informacion)
    {
      $this->nombre = $arreglo_informacion['nombre'];
       $this->direccion = $arreglo_informacion['direccion'] ;
       $this->numero = $arreglo_informacion['numero'] ;
       $this->email = $arreglo_informacion['email'] ;
    }

}

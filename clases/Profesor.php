<?php
require_once 'Miembro.php';

class Profesor extends Miembro {
 protected bool $titular = false;
 protected string $asignatura;

 #[Override]
 public function __construct(int $id, string $nombre, string $apellidos, string $email, string $asignatura)
 {
    return parent::__construct($id, $nombre, $apellidos, $email);
 }


 public static function crearProfesoresDeMuestra(): array {
 return[
   new Profesor (1,"Steve", "Wozniak", "steve@apple.com", "DWES."),
   new Profesor (2,"Ada", "Lovelace", "ada@gmail.com", "DIW."),
   new Profesor(3,"Taylor", "Otwell","taylor@laravel.com", "DWEC"),
   new Profesor(4,"Rasmus","Lerdoff"," rasmus@php.com","DAW")
 ];

 }

}
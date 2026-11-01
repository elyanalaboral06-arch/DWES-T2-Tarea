<?php
class Asignatura{
// Propiedades de la clase Asignatura
protected int $id;
public string $nombre;
public int $creditos;
// Constructor de la clase Asignatura

 public function __construct(int $id, string $nombre, int $creditos) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }
  // Métodos getter y setter para las propiedades de la clase Asignatura
    public function getId(): int {
        return $this->id;
    }
   

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getCreditos(): int {
        return $this->creditos;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function setCreditos(int $creditos): void {
        $this->creditos = $creditos;
    }

    
// Método para crear asignaturas de muestra
public static function crearAsignaturaDeMuestra(): array{
    return[
    new Asignatura (1,"DWES",7),
    new Asignatura (2,"DWEC",6),
    new Asignatura (3,"DIW",4),
    new Asignatura (4,"DAW",4),
    ];
}



}
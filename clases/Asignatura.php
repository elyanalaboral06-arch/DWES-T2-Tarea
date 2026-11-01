<?php
class Asignatura{

protected int $id;
public string $nombre;
public string $creditos;

 public function __construct(int $id, string $nombre, string $creditos) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->creditos = $creditos;
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function getCreditos(): string {
        return $this->creditos;
    }

public static function crearAsignaruraDeMuestra(): array{
    return[
    new Asignatura (1,"DWES","7 creditos"),
    new Asignatura (2,"DWEC","6 creditos"),
    new Asignatura (3,"DIW","4 creditos"),
    new Asignatura (4,"DAW","4 creditos"),
    ];
}



}
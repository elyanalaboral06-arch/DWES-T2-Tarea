<?php
require_once 'Miembro.php';
require_once 'Asignatura.php';

 class Alumno extends Miembro{
    private int $edad;
    protected array $asignaturas = [];
    protected bool $cursoAbonado = false;

    #[Override]
    public function __construct(int $id, string $nombre, string $apellidos, string $email, int $edad)
    {
        return parent::__construct($id, $nombre, $apellidos, $email);
    }

    public function abonarCurso(): bool{
        return $this->cursoAbonado;
    }

   public function matricularseEnAsignatura(Asignatura $nuevAsig ): bool {

    foreach ($this -> asignaturas as $asignaturaMatr){
        if($asignaturaMatr->getNombre() === $nuevAsig->getNombre()){
            return false;//porque ya esta matriculado
        }

    }
    $this->asignaturas[] = $nuevAsig;
    return true;
   }

   public static function crearAlumnoDeMuestra(): array{
    return [

        new Alumno (1, "Laura", "Martínez", "laura.martinez@email.com", 22 ),
        new Alumno (2, "Sergio", "López", "sergio.lopez@email.com", 25 ),
        new Alumno (3, "Carlos", "García", "carlos.garcia@email.com", 24 ),
        new Alumno (4, "Marta", "Sánchez", "marta.sanchez@email.com", 23 ),
        new Alumno (5, "Alba", "Fernández", "alba.fernandez@email.com", 21), 
        new Alumno (6, "David", "Rodríguez", "david.rodriguez@email.com", 26 ),
        new Alumno (7,"Lucía", "Jiménez", "lucia.jimenez@email.com", 20 ),
        new Alumno (8, "Jorge", "Pérez", "jorge.perez@email.com", 22 ),
        new Alumno (9, "Elena", "Romero", "elena.romero@email.com", 23 ),
        new Alumno (10, "Pablo", "Torres", "pablo.torres@email.com", 24)
           

    ];
   }

   

 }
<?php
require_once 'clases/Alumno.php';
require_once 'clases/Asignatura.php';

$alumnos = Alumno::crearAlumnoDeMuestra();
$asignaturas = Asignatura::crearAsignaturaDeMuestra();

$alumnos[0]->matricularEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularEnAsignatura($asignaturas[0]);
$alumnos[1]->matricularEnAsignatura($asignaturas[1]);
$alumnos[2]->matricularEnAsignatura($asignaturas[0]);
$alumnos[2]->matricularEnAsignatura($asignaturas[2]);
$alumnos[3]->matricularEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularEnAsignatura($asignaturas[0]);
$alumnos[4]->matricularEnAsignatura($asignaturas[1]);
$alumnos[4]->matricularEnAsignatura($asignaturas[2]);
$alumnos[5]->matricularEnAsignatura($asignaturas[0]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);
$alumnos[6]->matricularEnAsignatura($asignaturas[1]);
$alumnos[7]->matricularEnAsignatura($asignaturas[2]);
$alumnos[8]->matricularEnAsignatura($asignaturas[1]);
$alumnos[9]->matricularEnAsignatura($asignaturas[0]);

// Alumnos con al menos dos asignaturas
$conDosOMas = array_filter($alumnos, fn($a) => count($a->getAsignaturas()) >= 2);

// Asignaturas con algún alumno matriculado
$conAlumnos = array_filter($asignaturas, function ($asignatura) use ($alumnos) {
    foreach ($alumnos as $alumno) {
        foreach ($alumno->getAsignaturas() as $alumnoAsignatura) {
            if ($alumnoAsignatura->getId() === $asignatura->getId()) {
                return true;
            }
        }
    }
    return false;
});
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    //listado de alumnos
    <h1>Alumnos</h1>
    <ul>
        <?php
        require_once 'clases/Alumno.php';
        $alumnos = Alumno::crearAlumnoDeMuestra();
        foreach ($alumnos as $alumno) {
            echo "<li>Nombre: \t " . $alumno->getNombre() . " " . $alumno->getApellidos() . ",\t\t Email: " . $alumno->getEmail() . "</li>";
        }
        ?>
    </ul>
    
    //listado de profesores
    <h1>Profesores</h1>
    <ul>
        <?php
        require_once 'clases/Profesor.php';
        $profesores = Profesor::crearProfesoresDeMuestra();
        foreach ($profesores as $profesor) {
            echo "<li>Nombre: \t " . $profesor->getNombre() . " " . $profesor->getApellidos() . ",\t\t Email: " . $profesor->getEmail() . "</li>";
        }
        ?>
    </ul>

    <h1>Asignaturas</h1>
    <ul>
        <?php
        require_once 'clases/Asignatura.php';
        $asignaturas = Asignatura::crearAsignaturaDeMuestra();
        foreach ($asignaturas as $asignatura) {
            echo "<li>Nombre: \t " . $asignatura->getNombre() . ",\t\t Créditos: " . $asignatura->getCreditos() . "</li>";
        }
        ?>
    </ul>

    <h1>Alumnos <= 23</h1>
       <ul>
        <?php
        $alumnos = Alumno::crearAlumnoDeMuestra();
        foreach ($alumnos as $alumno) {
            if ($alumno->getEdad() <= 23) {
                echo "<li>Nombre: \t " . $alumno->getNombre() . " " . $alumno->getApellidos() . ",\t\t Email: " . $alumno->getEmail() . ",\t\t Edad: " . $alumno->getEdad() . "</li>";
            }
        }
        ?>
       </ul>
        

   <h1>Alumnos con al menos dos asignaturas</h1>
            <ul>
              <?php foreach ($conDosOMas as $alumno): ?>
                     <li>
                     Nombre: <?= $alumno->getNombre() ?> <?= $alumno->getApellidos() ?>,
                     Email: <?= $alumno->getEmail() ?>
                 </li>
              <?php endforeach; ?>
            </ul>

   <h2>Asignaturas con algún alumno matriculado</h2>
       <ul>
        <?php foreach ($conAlumnos as $asignatura): ?>
        <li>Nombre:<?= $asignatura->getNombre() ?>,Creditos: <?= $asignatura->getCreditos() ?></li>
       <?php endforeach; ?>
       </ul>

       
</body>
</html>
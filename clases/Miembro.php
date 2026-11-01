<?php

abstract class Miembro {
    protected int $id;
    private  string $nombre;
    private string $apellidos;
    private string $email;

    public function __construct(int $id,string $nombre,string $apellidos, string $email)
    {
        $this ->id = $id;
        $this ->nombre = $nombre;
        $this ->apellidos= $apellidos;
        $this ->email = $email;
     }

    public function getId(): int {
        return $this->id;

    }

    public function getNombre(): string{
        return $this ->nombre;
    }

    
    public function getApellidos(): string{
        return $this ->apellidos;
    }

    
    public function getEmail(): string{
        return $this ->email;
    }

    public function setId(int $id):void{
        $this->id = $id;
    }

   public function setNombre(string $nombre):void{
        $this->nombre = $nombre;
    }

     public function setApellidos(string $apellidos):void{
        $this->apellidos = $apellidos;
    }
     public function setEmail(string $email):void{
        $this->email = $email;
    }

    public function __toString()
    {
        return "ID: " . $this ->id . ",Nombre: " . $this->nombre .", Apellidos: " . $this->apellidos .", Email:" . $this->email;
    }







    

   
}
<?php
class UsuarioView
{
    public function showUsuarios($usuarios, $isAdmin)
    {
        require_once "templates/Usuarios.phtml";
    }

    public function showDetailsUsuario($usuarios, $viaje, $isAdmin = false)
    {
        $usuario = $usuarios;
        $viajes=$viaje;
        require_once "templates/UsuariosDetalles.phtml";
    }
    public function formActualizarUsuario($usuarios, $isAdmin=false)
    {
        require_once "templates/FormActualizarUsuario.phtml";
    }
    public function formAgregarUsuario($usuario, $isAdmin=false)
    {
        $Usuarios = $usuario;

        require_once "templates/FormAgregarUsuario.phtml";
    }
    public function showError($error)
    {
        $errores = $error;
        require_once "templates/Errores.phtml";
    }
}
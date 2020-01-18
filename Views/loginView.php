<?php
require_once('libs/Smarty.class.php');

class LoginView{

    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty();
        $autenticador = new Autenticacion();
        $admin=$autenticador->isAdmin();

        //$this->smarty->assign('admin', admin );

        $this->smarty->assign('basehref', basehref );

    }

    public function showLogin($error = null) {
        $this->smarty->assign('titulo', 'Iniciar Sesión');
        $this->smarty->assign('error', $error);
        $this->smarty->display('Templates/login.tpl');
    }

    public function mostrarError($msgError) {
        echo "ERROR!";
        echo "{$msgError}";
    }
  
    public function showUsuarios($usuarios) {
        $autenticador = new Autenticacion();
        $admin=$autenticador->isAdmin();
        $this->smarty->assign('usuarios', $usuarios);
        $this->smarty->display('Templates/admin.tpl');
    }

    public function ShowRegistro($error = null){
        $this->smarty->assign('titulo', 'Registrarse');
        $this->smarty->assign('error', $error);
        $this->smarty->display('Templates/formRegistro.tpl');
    }

}
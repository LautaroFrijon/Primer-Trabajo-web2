<?php
    require_once('libs/Smarty.class.php');
    require_once("AyudaLogin/autenticacion.php");

    class EquipoView {

        private $smarty;

        public function __construct() {
            
            $this->smarty = new Smarty();

            $this->smarty->assign('basehref', basehref);
        }

        public function showEquipos($equipos) {
            $this->smarty->assign('titulo', 'Equipos');
            $this->smarty->assign('equipos', $equipos);
            $this->smarty->display('Templates/equipos.tpl');
        }

    /**
         * Construye el html que permite visualizar el detalle de una notica determinada.
         */
        public function mostrarEquipo($equipo) {
            $this->smarty->assign('titulo', 'Detalle de equipo');
            $this->smarty->assign('equipo', $equipo);

            $this->smarty->display('Templates/detallesEquipo.tpl');
        }

        public function mostrarError($msgError) {
            echo "ERROR!";
            echo "{$msgError}";
        }

        public function showFormEquipo(){
            $autenticador = new Autenticacion();
            $admin=$autenticador->isAdmin();
            $this->smarty->assign('titulo', 'Agregar Equipo');
            $this->smarty->display('Templates/formEquipo.tpl');
        }

        public function showFormEditarEquipo($equipo){
            $autenticador = new Autenticacion();
            $admin=$autenticador->isAdmin();
            $this->smarty->assign('titulo', 'Editar Equipo');
            $this->smarty->assign('equipo', $equipo);
            $this->smarty->display('Templates/formEditarEquipo.tpl');
        }

    }
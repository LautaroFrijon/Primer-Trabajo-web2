<?php
    require_once('libs/Smarty.class.php');
    require_once("AyudaLogin/autenticacion.php");

    class NoticiaView {

        private $smarty;

        public function __construct() {
            $this->smarty = new Smarty();

            $this->smarty->assign('basehref',basehref);
        }

        public function mostrarNoticias($noticias) {
            $this->smarty->assign('titulo', 'Lista de noticias');
            $this->smarty->assign('noticias', $noticias);

            $this->smarty->display('Templates/noticias.tpl');
        }

        /**
         * Construye el html que permite visualizar el detalle de una tarea determinada.
         */
        public function mostrarNoticia($noticia) {
            $this->smarty->assign('titulo', 'Detalles de la noticia');
            $this->smarty->assign('noticia', $noticia);

            $this->smarty->display('Templates/detallesNoticia.tpl');
        }

        public function mostrarError($msgError) {
            echo "ERROR!";
            echo "{$msgError}";
        }

        public function showFormAgregar($noticias){
            $autenticador = new Autenticacion();
            $admin=$autenticador->isAdmin();
            $this->smarty->assign('titulo', 'Agregar noticia');
            $this->smarty->assign('noticias', $noticias);
            
            $this->smarty->display('Templates/formNoticias.tpl');
        }

        public function showFormEditar($noticia, $noticias){
            $autenticador = new Autenticacion();
            $admin=$autenticador->isAdmin();

            $this->smarty->assign('titulo', 'Editar');
            $this->smarty->assign('noticia', $noticia);
            $this->smarty->assign('noticias', $noticias);
            $this->smarty->display('Templates/formEditarNoticia.tpl');
        }
    
}
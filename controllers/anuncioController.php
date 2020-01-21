<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of anuncioController
 *
 * @author andersonfreire
 */
class anuncioController extends controller {

    function verificarUsuario() {
        if (empty($_SESSION['cLogin'])) {
            ?>
            <script type="text/javascript">window.location.href = "<?php echo BASE_URL; ?>usuario/login";</script>
            <?php
            exit;
        }
    }

    function MeusAnuncios() {

        $this->verificarUsuario();

        $a = new Anuncios();
        $anuncios = $a->getMeusAnuncios();

        $dados['anuncios'] = $anuncios;

        $this->loadTemplate('meus-anuncios', $dados);
    }

    function adicionarAnuncio() {
        $this->verificarUsuario();

        $a = new Anuncios();
        if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
            $titulo = addslashes($_POST['titulo']);
            $categoria = addslashes($_POST['categoria']);
            $valor = addslashes($_POST['valor']);
            $descricao = addslashes($_POST['descricao']);
            $estado = addslashes($_POST['estado']);

            $a->addAnuncio($titulo, $categoria, $valor, $descricao, $estado);

            ?>
            <div class="alert alert-success">
                Produto Adicionado com sucesso!
            </div>
            <?php
            
        }
        $c = new Categorias();
        $cats = $c->getLista();
        
        $dados['cats'] = $cats;
        
        $this->loadTemplate('addAnuncio', $dados);
        
        
        
    }

}

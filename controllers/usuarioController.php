<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of usuarioController
 *
 * @author andersonfreire
 */
class usuarioController extends controller {

    public function index() {
        
    }

    public function cadastrar() {
        $u = new Usuarios();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);
            $telefone = addslashes($_POST['telefone']);

            if (!empty($nome) && !empty($email) && !empty($senha)) {
                if ($u->cadastrar($nome, $email, $senha, $telefone)) {
                   ?>
                    <div class="alert alert-success">
                        <strong>Parabéns!</strong> Cadastrado com sucesso. <a href="login" class="alert-link">Faça o login agora</a>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-warning">
                        Este usuário já existe! . <a href="login" class="alert-link">Faça o login agora</a>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="alert alert-warning">
                    Preencha todos os campos
                </div>
                <?php
            }
        }
         $this->loadTemplate('cadastra-se');
    }

}
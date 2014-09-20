<?php
DEFINE("SRC", "../src/ES/");
/* Autoloader */
require_once SRC . 'Autoloader/SplClassLoader.php';
$loader = new SplClassLoader('ES', '../src');
$loader->register();

use ES\Form\Form;
use ES\Form\Validator;
use ES\Form\Request;
use ES\Form\Interfaces\iRender;
use ES\Form\Interfaces\iRadio;
use ES\Form\Interfaces\iCheckbox;
use ES\Form\Interfaces\iOptions;
use ES\Form\Fields\InputText;
use ES\Form\Fields\Email;
use ES\Form\Fields\Password;
use ES\Form\Fields\Select;
use ES\Form\Fields\TextArea;
use ES\Form\Fields\RadioButton;
use ES\Form\Fields\Checkbox;
use ES\Form\Fields\ButtonSubmit;
?>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Projeto II - Formulário dinâmico</title>

        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css">
        <link rel="stylesheet" href="assets/css/styles.css">        

    </head>
    <body>


                <?php
                $request = new Request;
                $validator = new Validator($request);
                $form = new Form($validator);


                /* === Formulário de cadastro de usuário === */
                $cadastro_user = clone $form;
                $cadastro_user->CreateField(new InputText("Seu nome", "nome"));
                $cadastro_user->CreateField($sexo = new RadioButton("Sexo", "sexo"));
                $sexo->setValues("Feminino");
                $sexo->setValues("Masculino");
                $cadastro_user->CreateField(($uf = new Select("Qual o estado?", "uf")));
                $uf->setOptions("São Paulo");
                $uf->setOptions("Rio de Janeiro");
                $uf->setOptions("Bahia");
                $cadastro_user->CreateField(new ButtonSubmit("Cadastrar"));
                $cadastro_user->setTitle("Cadastro de usuário");
                $cadastro_user->setName("cadastro");
                $cadastro_user->setAction("index.php");
                $cadastro_user->setMethod("post");
                echo $cadastro_user->Render();


                /* === Formulário de Newsletter === */
                $newsletter = clone $form;
                $newsletter->CreateField(new InputText("Nome", "nome"));
                $newsletter->CreateField(new Email("E-mail", "email"));
                $newsletter->CreateField(new ButtonSubmit("Enviar"));
                $newsletter->setTitle("Newsletter");
                $newsletter->setName("newsletter");
                $newsletter->setAction("index.php");
                $newsletter->setMethod("post");
                echo $newsletter->Render();


                /* === Formulário de Login === */
                $login = clone $form;
                $login->CreateField(new InputText("Login", "login"));
                $login->CreateField(new Password("Senha", "senha"));
                $login->CreateField($connect = new Checkbox("Permanecer Conectado?", "remember"));
                                    $connect->setValues("Sim");
                $login->CreateField(new ButtonSubmit("Logar"));
                $login->setTitle("Entre com seu usuário e senha");
                $login->setName("login");
                $login->setAction("access.php");
                $login->setMethod("post");
                echo $login->Render();


                /* === Formulário de Comentários === */
                $comment = clone $form;
                $comment->CreateField(new InputText("Nome", "nome"));
                $comment->CreateField(new Email("E-mail", "email"));
                $comment->CreateField(new TextArea("Comentário", "comentario"));
                $comment->CreateField(new ButtonSubmit("Enviar comentário"));
                $comment->setTitle("Comentários do post");
                $comment->setName("comments");
                $comment->setAction("comments.php");
                $comment->setMethod("post");
                echo $comment->Render();
                ?>

    </body>
</html>


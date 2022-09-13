<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>

    <link rel="stylesheet" href="/View/modules/User/styleUser.css">
</head>
<body>

    <div class="signup_container">
        <div class="signup_form">
            <form id="signup" method="post" action="/user/form/save">
                <h1> Cadastrar </h1>
                
                <input type="hidden" value="<?= $model->idUser ?>" name="idUser" required>

                <label for="nome"> Nome completo: </label>
                <input type="text" id="nomeUser" value="<?= $model->nomeUser ?>" name="nomeUser" require>

                <label for="emailUser"> email: </label>
                <input type="text" id="emailUser" value="<?= $model->emailUser ?>" name="emailUser" require>

                <label for="nickUser"> Nickname: </label>
                <input type="text" id="nickUser" value="<?= $model->nickUser ?>" name="nickUser" require>

                <label for="senhaUser"> Senha: </label>
                <input type="text" id="senhaUser" value="<?= $model->senhaUser ?>" name="senhaUser" require>

                <label for="dtnascimentoUser"> Data de nascimento: </label>
                <input type="date" id="dtnascimentoUser" value="<?= $model->dtnascimentoUser ?>" name="dtnascimentoUser" require>

                <label for="tipoUser"> Tipo de usuário: </label>
                <input type="text" id="tipoUser" value="<?= $model->tipoUser ?>" name="tipoUser" require>

                <input type="submit" value="Criar Usuário">
            </form>
        </div>
    </div>

</body>
</html>
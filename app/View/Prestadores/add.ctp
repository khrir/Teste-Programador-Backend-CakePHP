<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <?php

    $form = $this->Form->create(
        'Prestadores',
        array(
            'enctype' => 'multipart/form-data',
            'type' => 'post',
        )
    );
    $form .= $this->Form->input('Prestadore.nome');
    $form .= $this->Form->input('Prestadore.telefone');
    $form .= $this->Form->input('Prestadore.email');
    $form .= $this->Form->input('Prestadore.foto', ['type' => 'file']);
    $form .= $this->Form->end('Gravar');

    echo $form;

    ?>
</body>

</html>
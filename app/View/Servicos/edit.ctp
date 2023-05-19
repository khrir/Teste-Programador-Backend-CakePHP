<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>

<body>
    <?php

    $form = $this->Form->create(
        'Servicos',
        array(
            'enctype' => 'multipart/form-data',
            'type' => 'post',
        )
    );
    $form .= $this->Form->hidden('Servico.id');
    $form .= $this->Form->input('Servico.nome');
    $form .= $this->Form->input('Servico.descricao');
    $form .= $this->Form->input('Servico.preco');
    $form .= $this->Form->end('Gravar');

    echo $form;

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>

<body>
    <?php

    echo $this->Html->tag('h2', $prestador['Prestadore']['nome']);
    echo $this->Html->tag('h2', $prestador['Prestadore']['email']);
    echo $this->Html->tag('h2', $prestador['Prestadore']['telefone']);
    echo $this->Html->image($prestador['Prestadore']['foto'], array(
        'alt' => 'Foto de perfil de ' . $prestador['Prestadore']['nome'],
        'class' => 'max-width:50%',
    ));

    ?>
</body>

</html>
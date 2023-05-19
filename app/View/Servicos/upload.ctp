<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
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
    $form .= $this->Form->input('csv', array('type'=>'file','class' => 'form-control', 'label' => false));
    $form .= $this->Form->end('Enviar');
    echo $form;

    ?>
</body>
</html>
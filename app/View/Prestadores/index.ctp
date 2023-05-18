<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <?php

    echo $this->Html->link('Cadastrar', array('controller' => 'prestadores', 'action' => 'add'));
    
    $detalhe = array();
    $column_name = array();

    $column_name = array_keys($prestadores[0]['Prestadore']);

    foreach ($prestadores as $prestador) 
    {
        $editLink = $this->Html->link('Alterar', '/prestadores/edit/' . $prestador['Prestadore']['id']);
        $delLink = $this->Html->link('Deletar', '/prestadores/delete/' . $prestador['Prestadore']['id']);
        $detalhe[] = array(
            $this->Html->link($prestador['Prestadore']['id'], ['action' => 'view', $prestador['Prestadore']['id']]),
            $this->Html->link($prestador['Prestadore']['nome'], ['action' => 'view', $prestador['Prestadore']['id']]),
            $this->Html->link($prestador['Prestadore']['telefone'], ['action' => 'view', $prestador['Prestadore']['id']]),
            $this->Html->link($prestador['Prestadore']['email'], ['action' => 'view', $prestador['Prestadore']['id']]),
            $this->Html->link($prestador['Prestadore']['foto'], ['action' => 'view', $prestador['Prestadore']['id']]),
            $editLink,
            $delLink
        );
    }

    $header = $this->Html->tableHeaders($column_name);
    $body = $this->Html->tableCells($detalhe);
    // $editButton = $this->Html->link()
    echo $this->Html->tag('table', $header . $body);
    ?>
</body>

</html>
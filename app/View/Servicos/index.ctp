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

    echo $this->Html->link('Cadastrar', array('controller' => 'servicos', 'action' => 'add'));
    echo $this->Html->link(' Upload', array('controller' => 'servicos', 'action' => 'upload'));

    $detalhe = array();
    $column_name = array();

    $column_name = array_keys($servicos[0]['Servico']);

    foreach ($servicos as $servico) {
        $editLink = $this->Html->link('Alterar', '/servicos/edit/' . $servico['Servico']['id']);
        $delLink = $this->Html->link('Deletar', '/servicos/delete/' . $servico['Servico']['id']);
        $detalhe[] = array(
            $servico['Servico']['id'],
            $this->Html->link($servico['Servico']['nome'], ['action' => 'view', $servico['Servico']['id']]),
            $servico['Servico']['descricao'], 
            $servico['Servico']['preco'],
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
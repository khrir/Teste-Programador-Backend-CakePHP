<?php

$settings = array(
    'fileName' => 'report.pdf',
    'template' => array(
        'config' => array(
            'fill' => 0,
            'fontFamily' => 'Arial',
            'fontSizePt' => 10
        ),
        'header' => array(
            array('cell' => array(
                'text' => 'Prestadores Cadastrados',
                'fontSizePt' => 18,
                'align' => 'C',
                'lineHeight' => 20,
            ))
        ),
        'columnTitles' => array(
            'line1' => array('line' => array(
                'border' => 1,
                'align' => 'C',
                'fontStyle' => 'B',
                'cell1' => array('cell' => array(
                    'text' => 'ID',
                    'lineWidth' => 10
                )),
                'cell2' => array('cell' => array(
                    'text' => 'Nome',
                    'lineWidth' => 50
                )),
                'cell3' => array('cell' => array(
                    'text' => 'Telefone',
                    'lineWidth' => 30
                )),
                'cell4' => array('cell' => array(
                    'text' => 'Email',
                    'lineWidth' => 60
                )),
                'cell5' => array(
                    'cell' => 'Serviço',
                ),
            )),
        ),
        'body' => array(
            array('line' => array(
                'border' => 1,
                'align' => 'C',
                array('cell' => array(
                    'fieldName' => 'Prestadore.id',
                    'lineWidth' => 10
                )),
                array('cell' => array(
                    'fieldName' => 'Prestadore.nome',
                    'lineWidth' => 50
                )),
                array('cell' => array(
                    'fieldName' => 'Prestadore.telefone',
                    'lineWidth' => 30
                )),
                array('cell' => array(
                    'fieldName' => 'Prestadore.email',
                    'lineWidth' => 60
                )),
                array('cell' => array(
                    'fieldName' => 'Servicos.nome',
                )),
            ))
        ),
        'sumary' => array(
            array('cell' => array('text' => 'Total de Prestadores ==> [RECORD_COUNT]', 'fontStyle' => 'I', 'lineHeight' => 20)),
        ),
        'footer' => array(
            array('line' => array(
                'border' => 'T',
                'fontSizePt' => 6,
                array('cell' => 'Impresso em [DATE]'),
                array('cell' => array('text' => 'Página: [PAGE]/[PAGES]'), 'align' => 'R'),
            ))
        )
    ),
    'records' => $prestadores
);

echo $this->Report->create($settings);

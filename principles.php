<?php

$hierarquia = array(

    array(
        'nome_cargo'=>'LIFE',
        'subordinados'=>array(
            //Inicio: HEALTH
            array(
                'nome_cargo'=>'HEALTH')
                    //Termino: HEALTH    
                )
            ),
            //Inicio: MIND
            array(
                'nome_cargo'=>'MIND',
                'subordinados'=>array(
                    //Inicio: 'KNOWLEDGE'
                    array(
                        'nome_cargo'=>'KNOWDLEDGE',
                        'subordinados'=>array(
                            //Inicio: READ
                            array(
                                'nome_cargo'=>'READ'
                            )
                            //Termino: READ
                        )
                    ),
                    //Termino: KNOWLEDGE
                    //Inicio: WORK
                    array(
                        'nome_cargo'=>'WORK',
                         )
                         //Termino: WORK
                        )

                    )
                    
        );
                 

function exibe($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo[ 'nome_cargo' ];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= exibe($cargo['subordinados']);

        }

        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;

}

echo "<strong>PRINCIPLES</strong>";

echo exibe($hierarquia);

?>



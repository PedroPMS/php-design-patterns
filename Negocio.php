<?php

class Negocio
{
    public function __invoke()
    {
        $materia = new Materia('Matematica');
        $profMarcus = new Professor('Marcos');
        $alunoRafael = new Aluno('Rafael');
        $alunoVinicius = new Aluno('Vinicius');

        //Associando os observadores a materia: matematica
        $materia->attach($profMarcus);
        $materia->attach($alunoRafael);
        $materia->attach($alunoVinicius);

        $materiaPortugues = new Materia('Portugues');
        $profRenato = new Professor('Renato');
        $alunoFabio = new Aluno('Fabio');
        $alunoTiago = new Aluno('Tiago');

        //Associando os observadores a materia: portugues
        $materiaPortugues->attach($profRenato);
        $materiaPortugues->attach($alunoFabio);
        $materiaPortugues->attach($alunoTiago);

        //Removendo aluno da matematica
        $materia->detach($alunoRafael);

        //Notificando materias
        $materia->notify();

        echo 'Matematica <br>';
        echo '<pre>';
        print_r($materia->getLog());
        echo '<pre>';
        echo '<hr>';
    }
}
<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\Assistivel;

class Assistidor
{
    public function assisteCurso(Assistivel $assistivel)
    {
        $assistivel->assistir();
    }
}

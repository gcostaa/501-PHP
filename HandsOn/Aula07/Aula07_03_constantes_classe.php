<?php

class Notas
{
    protected $b1;
    protected $b2;
    protected $b3;
    protected $b4;
    protected $media;

    const MEDIA_DEFINIDA = 7;
    const MEDIA_APROVADO = 1;
    const MEDIA_REPROVADO = 2;
    const MEDIA_RECUPERACAO = 3;


    public function getMedia()
    {
        //return self::MEDIA_DEFINIDA;
        return static::MEDIA_DEFINIDA;
    }

}
echo Notas::getMedia(). '<hr>';

$media=10;

if($media >= Notas::MEDIA_DEFINIDA)
{
    echo'Passou';
}else{
    echo 'Não passou kkkkkkkkkkkkkkkkkkk';
}

?>
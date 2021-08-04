<?php
interface iTool
{
    function play();
}
class Guitar implements iTool
{
    public $key = "do major";
    public $chordQuantity;
    function __construct($key, $chordQuantity)
    {
        $this->key=(string)$key;
        $this->chordQuantity=(int)$chordQuantity;
    }

    function play()
    {
        // TODO: Implement play() method.
        echo "$this->key Guitar is playing with $this->chordQuantity<br/>";
    }
}
class Drum implements iTool
{
    public $size;
    function __construct($size)
    {
        $this->size=(float)$size;
    }
    function play()
    {
        // TODO: Implement play() method.
        echo "Drum is playing with size $this->size<br/>";
    }
}
class Trumpet implements iTool
{
    public $diametr;
    function __construct($diameter)
    {
        $this->diametr=(float)$diameter;
    }
    public function play()
    {
        // TODO: Implement play() method.
        echo "Trumpet is playing with size $this->diametr<br/>";
    }
}
$guitar = new Guitar ("Do major", 5);
$drum = new Drum(10);
$trumpet = new Trumpet(15);
$guitar->play();
$drum->play();
$trumpet->play();

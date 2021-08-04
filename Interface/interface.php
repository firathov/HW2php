<head>
    <title>The Queen</title>
</head>
<h3>Queen - We are the champions</h3>
<form method ="POST">
    <p>The number of Guitar chords : <input type="number" name="guitar" required/></p>
    <p>The size of Drum: <input type="number" name="drum" required><p/>
    <p>The Microphone's decibel: <input type="number" name="microphone" required></p>
    <input type = "submit" value="START THE SHOW!!!">
</form>
<?php
if(isset($_POST['guitar']) && isset($_POST['drum']) && isset($_POST['microphone']))
{
    $guitar=htmlentities($_POST['guitar']);
    $drum=htmlentities($_POST['drum']);
    $microphone=htmlentities($_POST['microphone']);
    if (is_numeric($guitar) && is_numeric($drum) && is_numeric($microphone))
    {
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
                echo "$this->key Brian May is playing with $this->chordQuantity chords guitar<br/>";
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
                echo "Roger Taylor is playing with $this->size size drum<br/>";
            }
        }
        class Microphone implements iTool
        {
            public $decibel;
            function __construct($decibel)
            {
                $this->decibel=(float)$decibel;
            }
            public function play()
            {
                // TODO: Implement play() method.
                echo "Freddie Mercury singing with $this->decibel decibel micro<br/><br/>";
            }
            public function sings()
            {
                echo "I've paid my dues<br/>
                        Time after time<br/>
                        I've done my sentence<br/>
                        But committed no crime<br/>
                        And bad mistakes<br/>
                        I've made a few<br/>
                        I've had my share of sand<br/>
                        Kicked in my face<br/>
                        But I've come through<br/>
                        And we mean to go on and on and on and on<br/>
                        We are the champions, my friends<br/>
                        And we'll keep on fighting till the end<br/>
                        We are the champions<br/>
                        We are the champions<br/>
                        No time for losers<br/>
                        'Cause we are the champions of the World";
            }
        }
        $guitar = new Guitar ("Do major<br/>", $_POST['guitar']);
        $drum = new Drum($_POST['drum']);
        $microphone = new Microphone($_POST['microphone']);
        $guitar->play();
        $drum->play();
        $microphone->play();
        echo '<p><a href="https://www.youtube.com/watch?v=KXw8CRapg7k">Click here to Listen</a></p>';
        $microphone->sings();
    }
    else
    {
        echo "pls dont ruin and try again with numbers";
    }
}

<?php
 class Answer {
    private string $text;
    private bool $correct;

    const BONNE_REPONSE=true;

    public function __construct($text, $correct = false) {
        $this->text = $text;
        $this->correct = $correct;
    }

    public function isCorrect() {
        return $this->correct;
    }

    public function getText() :string{
        return $this->text;
    }
}


?>
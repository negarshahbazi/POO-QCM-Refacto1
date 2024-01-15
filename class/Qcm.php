<?php
class Qcm {
   
    private array $questions = [];

 

    public function addQuestion(Question $question) :void{
        $this->questions[] = $question;
    }

    public function generate() {
        foreach ($this->questions as $index => $question) {
            echo "Question " . ($index + 1) . ": " . $question->getCorps() . "<br>";
            foreach ($question->getAnswers() as $index =>$answer) {
                echo ($index + 1)." - " . $answer->getText() . "<br>";
            }
            echo "Explications: " . $question->getExplications() . "<br><br>";
        }
    }
}
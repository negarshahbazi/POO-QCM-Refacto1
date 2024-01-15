<?php
class Question {
    private string $corps;
    private string $explications;
    private array $answers = [];

    public function __construct($corps) {
        $this->corps = $corps;
    }

    public function addAnswer(Answer $answer) :void{
        $this->answers[] = $answer;
    }

    public function setExplications(string $explications) :void{
        $this->explications = $explications;
    }

    public function getCorps() :string{
        return $this->corps;
    }

    public function getExplications() :string{
        return $this->explications;
    }

    public function getAnswers() :array{
        return $this->answers;
    }
}
?>





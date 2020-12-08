<?php


class Player
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    public function whoWin($a, $b)
    {
        $win = [
            'rock' . 'paper' => 1,
            'rock' . 'scissors' => -1,
            'scissors' . 'paper' => -1,
        ];
        return $win[$a . $b] + $win[$b . $a] * -1;
    }

    function getMove()
    {
        $arr = ['rock', 'paper', 'scissors'];
        $last_move = $arr[rand(0, 2)];
        echo $this->name . ' : ' . $last_move . '<br>';
        return $last_move;
    }

    // передали имена $sp1-Вася $sp2-Петя
    function latsPlay($sp1, $sp2)
    {
        while (($win = $this->whoWin($sp1->getMove(), $sp2->getMove())) == 0)
            echo $this->name . ': НИЧЬЯ!<br>';
        echo $this->name . ': Победил ' . ($win < 0 ? $sp1 : $sp2)->getName();
    }
}

<?php

class PriorityQueue
{

    private $queue = array();

    public function enqueue($value, $priority) : void
    {
        isset($this->queue[$priority]) || $this->queue[$priority] = array();
        array_push($this->queue[$priority], $value);
    }

    public function dequeue() :string
    {
        reset($this->queue);
        $priority = max(array_keys($this->queue));

        $arrRev = array_reverse($this->queue[$priority]);
        $item = array_pop($arrRev);
        unset($this->queue[$priority][key($this->queue[$priority])]);

        // Remove priority queue if it's empty
        if (empty($this->queue[$priority])) {
            unset($this->queue[$priority]);
        }

        return $item;
    }


    public function isEmpty() : bool
    {
        if (empty($this->queue)) {
            return true;
        }
        return false;
    }

}


$queue = new PriorityQueue();

echo "Queue empty=>".$queue->isEmpty()."\n";
$queue->enqueue("a", 1);
$queue->enqueue("b", 1);
$queue->enqueue("c", 10);
$queue->enqueue("d", 3);
echo "Queue empty=>".$queue->isEmpty()."\n";

$queue->isEmpty();

echo $queue->dequeue()."\n";
echo $queue->dequeue()."\n";
echo $queue->dequeue()."\n";
echo $queue->dequeue()."\n";
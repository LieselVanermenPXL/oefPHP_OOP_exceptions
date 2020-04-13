<?php namespace textnode;


class TextNode
{
    private $nextNode;
    private $text;

    private function __construct($text)
    {
        $this->text = $text;
        $this->nextNode = null;
    }

    public static function makeNode($text)
    {
        return new TextNode($text);
    }

    // de functie addNode voegt een TextNode toe op het einde van
    //een keten van nodes
    public function addNode($text)
    {
        // kijk of nextNode gelijk is aan null
        // indien ja: maak een nieuwe node aan en ken die toe aan nextNode
        if ($this->nextNode == null) {
            $this->nextNode = self::makeNode($text);
        } else {
            // indien nee: roep de methode addNode aan op nextNode
            $this->nextNode->addNode($text);
        }
    }

    public function printAll()
    {
        print($this->text);
        if ($this->nextNode != null) {
            $this->nextNode->printAll();
        }
    }

    public function printTextNodeAt($i) {
        if ($i >= 0 ) {
            $count = 0;
            $node = $this;
            $printed = false;

            if ($count == $i) {
                print($node->text);
                $printed = true;
            }
            else {
                while ($node->nextNode !== null) {
                    $count++;
                    $node = $node->nextNode;
                    if($count === $i) {
                        print($node->text);
                        $printed = true;
                    }
                }
            }
            if (!$printed) {
                throw new \Exception("\$i heeft een waarde groter dan het aantal bestaande nodes.");
            }
        }
        else {
            throw new \Exception("\$i mag geen negatieve waarde zijn.");
        }
    }
}


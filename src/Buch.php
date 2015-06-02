<?php

class Buch
{

    /**
     * @var string
     */
    private $title;

    /**
     * @var Autor
     */
    private $author;

    /**
     * @var int
     */
    private $year;

    /**
     * @var int
     */
    private $nrOfPages;

    /**
     * @var string
     */
    private $genre;


    /**
     * @param $title string
     * @param $author Autor
     * @param $year int
     * @param $nrOfPages int
     * @param $genre string
     *
     * @throws InvalidArgumentException
     */
    function __construct($title,Autor $author, $year, $nrOfPages, $genre)
    {
        if (is_string($title) && is_string($genre) && is_int($nrOfPages) && $nrOfPages >= 1 && is_int($year) && $year >= 0) {
            $this->author = $author;
            $this->year = $year;
            $this->nrOfPages = $nrOfPages;
            $this->genre = $genre;
            $this->title = $title;
        } else {
            throw new InvalidArgumentException('Invalid Arguments');
        }
    }

    /**
     * @return Autor
     */
    public function getAuthor()
    {
        return $this->author;
    }
}

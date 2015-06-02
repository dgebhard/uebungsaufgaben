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
     * @param string $title
     * @param Autor $author
     * @param int $year
     * @param int $nrOfPages
     * @param string $genre
     *
     * @throws InvalidArgumentException
     */
    function __construct($title, Autor $author, $year, $nrOfPages, $genre)
    {
        if (!is_string($title) || empty($title)) {
            throw new InvalidArgumentException('Der Titel "'.$title.'" ist nicht gültig');
        }

        if (!is_int($year) || $year <= 0) {
            throw new InvalidArgumentException('Das gewählte Jahr "'.$year.'" ist nicht gültig');
        }

        if (!is_int($nrOfPages) || $nrOfPages <= 0) {
            throw new InvalidArgumentException('Die eingegebene Seitenzahl"'.$nrOfPages.'" ist nicht gültig');
        }

        if (!is_string($genre)) {
            throw new InvalidArgumentException('Das eingegebene Genre"'.$genre.'" ist nicht gültig');
        }

        $this->author = $author;
        $this->year = $year;
        $this->nrOfPages = $nrOfPages;
        $this->genre = $genre;
        $this->title = $title;
    }

    /**
     * @return Autor
     */
    public function getAuthor()
    {
        return $this->author;
    }
}

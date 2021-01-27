<?php

class Book 
{
    private $author;
    private $title;
    private $pgNum;
    private $pprBack;
    private $price;

    function setBook($author, $title, $pgNum, $pprBack, $price)
    {
        $this->author = $author;
        $this->title = $title;
        $this->pgNum = $pgNum;
        $this->pprBack = $pprBack;
        $this->price = $price;
    }
    
    /**
     * Gets the author name
     * 
     * @return string
     */
    function getAuthor()
    {
        return $this->author;
    }
  
    /**
     * Gets the book title
     * 
     * @return string
     */
    function getTitle()
    {
        return $this->title;
    }

    /**
     * Gets the number of pages
     * 
     * @return int
     */
    function getPgNum()
    {
        return $this->pgNum;
    }
    
    /**
     * Checks if the book is paperback
     * 
     * @return boolean
     */
    function getPprBack()
    {
        return $this->pprBack;
    }

    /**
     * Gets the book price
     * 
     * @return double
     */
    function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the author name
     */
    function setAuthor($x)
    {
        $this->author = $x;
    }

    /**
     * Sets the book title
     */
    function setTitle($x)
    {
        $this->title = $x;
    }

    /**
     * Sets the number of pages
     */
    function setPgNum($x)
    {
        $this->pgnum = $x;
    }

    /**
     * Sets whether or not the book is paperback
     */
    function setPprBack($x)
    {
        $this->pprBack = $x;
    }

    /**
     * Sets the book's price
     */
    function setPrice($x)
    {
        $this->price = $x;
    }

}
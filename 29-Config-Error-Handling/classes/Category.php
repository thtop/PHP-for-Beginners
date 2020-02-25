<?php

/**
 * Category
 * 
 * Groupings for articles
 */
class Category
{
    /**
     * Get all the categories
     * 
     * @param object $conn Connection to the database
     * 
     * @return array An associative array of all the article records
     */
    public static function getAll($conn)
    {
        $sql = "SELECT *
                FROM category
                ORDER BY name;";

        $results = $conn->query($sql);

        return $articles = $results->fetchAll(PDO::FETCH_ASSOC);
    }
}
<?php

// src/Manager/AuthorManager.php

namespace Manager;

use Entity\Author;
use PDO;

class AuthorManager
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * Insert un auteur dans la base de données.
     *
     * @param Author $author
     */
    public function insert(Author $author)
    {

    }
}
?>
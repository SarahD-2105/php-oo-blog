<?php

// src/Repository/AuthorRepository.php

namespace Repository;

use Entity\Author;
use PDO;

class AuthorRepository
{
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    /**
     * @return Author[]
     */
    public function findAll(): array
    {
        $sql = 'SELECT id, name FROM author';

        $statement = $this->connection->query($sql);

        $authors = [];

        while (false !== $data = $statement->fetch()) {
            $author = new Author();
            $author
                ->setId($data['id'])
                ->setName($data['name']);

            $authors[] = $author;
        }

        return $authors;
    }
}
public function findOneById(int $id): ?Author
{
    $sql = 'SELECT id, name FROM author WHERE id=:id LIMIT 1';

    $statement = $this->connection->prepare($sql);

    $statement->execute([
        'id' => $id,
    ]);

    if (false !== $data = $statement->fetch()) {
        return $this->hydrate($data);
    }
    return null;
}

private function hydrate(array $data): Author
{
    $author = newAuthor();
    $author
        ->setId($data['id'])
        ->setName($data['name']);
    
    return $author;
}

?>
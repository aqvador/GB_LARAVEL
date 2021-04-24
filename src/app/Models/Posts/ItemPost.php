<?php
declare(strict_types=1);


namespace App\Models\Posts;


class ItemPost implements \JsonSerializable
{
    private int $id;
    private string $title;
    private string $description;

    /**
     * ItemPost constructor.
     * @param int $id
     * @param string $title
     * @param string $description
     */
    public function __construct(int $id, string $title, string $description)
    {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
    }


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

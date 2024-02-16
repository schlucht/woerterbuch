<?php

namespace ots\Model;

use DateTime;
use ots\Repository\WordRepository;

class WordModel
{
    private string $de;
    private string $en;
    private int $id;
    private string $desc;
    private DateTime $created_at;
    private DateTime $updated_at;
    private DateTime $deletes_at;

    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }
    public function setCreatedAt(DateTime $created_at): void
    {
        $this->created_at = $created_at;
    }
    public function getUpdatedAt(): DateTime
    {
        return $this->updated_at;
    }
    public function setUpdatedAt(DateTime $updated_at): void
    {
        $this->updated_at = $updated_at;
    }
    public function getDeletesAt(): DateTime
    {
        return $this->deletes_at;
    }
    public function setDeletesAt(DateTime $deletes_at): void
    {
        $this->deletes_at = $deletes_at;
    }

    public function getDe(): string
    {
        return $this->de;
    }

    public function setDe(string $de): void
    {
        $this->de = $de;
    }

    public function getEn(): string
    {
        return $this->en;
    }

    public function setEn(string $en): void
    {
        $this->en = $en;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getDesc(): string
    {
        return $this->desc;
    }

    public function setDesc(string $desc): void
    {
        $this->desc = $desc;
    }

    

   

}
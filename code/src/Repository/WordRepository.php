<?php

namespace ots\Repository;

interface WordRepository
{    
    public function getWords(string $word, bool $language): array;
}
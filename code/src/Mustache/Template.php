<?php

namespace ots\Mustache;

class Template
{
    private string $template = '';
    private array $data = [];

    /**
     * Get the value of template     * 
     * @return string
     */
    public function getTemplate(): string
    {
        return $this->template;
    }
    /**
     * Set the value of template     *
     * @param string $template     *
     * @return void
     */
    public function setTemplate(string $template): void
    {
        $this->template = $template;
    }
    /**
     * Get the value of data     *
     * @return array
     * 
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * Set the value of data     *
     *  @param array $data     *
     *  @return void
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }
    
    
}
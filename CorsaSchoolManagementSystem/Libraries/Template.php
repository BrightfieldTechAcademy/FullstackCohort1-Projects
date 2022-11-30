<?php 

class Template
{
    private $templateFile;
    private $templateData = [];

    public function __construct($templateFile)
    {
        $this->templateFile = $templateFile;
    }

    public function __set($key, $value)
    {
        $this->templateData[$key] = $value;
    }

    public function __get($key)
    {
        return $this->templateData[$key];
    }

    public function __toString()
    {
        ob_start();
        extract($this->templateData);
        include($this->templateFile);
        return ob_get_clean();
    }
}

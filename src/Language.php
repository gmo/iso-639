<?php

namespace Gmo\Iso639;

class Language
{
    /** @var string */
    protected $code1;
    /** @var string */
    protected $code2t;
    /** @var string */
    protected $code2b;
    /** @var string */
    protected $code3;
    /** @var string */
    protected $name;
    /** @var string */
    protected $nativeName;

    public function __construct($code1, $code2t, $code2b, $code3, $name, $nativeName)
    {
        $this->code1 = $code1;
        $this->code2t = $code2t;
        $this->code2b = $code2b;
        $this->code3 = $code3;
        $this->name = $name;
        $this->nativeName = $nativeName;
    }

    /**
     * Returns the ISO 639-1 code (two letters)
     *
     * @return string
     */
    public function code1()
    {
        return $this->code1;
    }

    /**
     * Returns the ISO 639-2/T code (three letters)
     *
     * @return string
     */
    public function code2t()
    {
        return $this->code2t;
    }

    /**
     * Returns the ISO 639-2/B code (three letters)
     *
     * @return string
     */
    public function code2b()
    {
        return $this->code2b;
    }

    /**
     * Returns the ISO 639-3 code (three letters)
     *
     * @return string
     */
    public function code3()
    {
        return $this->code3;
    }

    /**
     * Returns the language name in English
     *
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * Returns the language name in its language
     *
     * @return string
     */
    public function nativeName()
    {
        return $this->nativeName;
    }
}

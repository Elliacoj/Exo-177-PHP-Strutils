<?php

class StrUtils
{
    private string $str;
    private bool $bold;
    private bool $italic;
    private bool $underline;
    private bool $capitalize;

    /**
     * StrUtils constructor.
     * @param string $str
     */
    public function __construct(string $str)
    {
        $this->setStr($str);
        $this->setBold(false);
        $this->setItalic(false);
        $this->setUnderline(false);
        $this->setCapitalize(false);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getStr();
    }

    /**
     * Return str string
     * @return string
     */
    public function getStr(): string
    {
        return $this->str;
    }

    /**
     * Set str string
     * @param string $str
     */
    public function setStr(string $str): void
    {
        $this->str = $str;
    }

    /**
     * @return bool
     */
    public function isBold(): bool
    {
        return $this->bold;
    }

    /**
     * @param bool $bold
     */
    public function setBold(bool $bold): void
    {
        $this->bold = $bold;
    }

    /**
     * @return bool
     */
    public function isItalic(): bool
    {
        return $this->italic;
    }

    /**
     * @param bool $italic
     */
    public function setItalic(bool $italic): void
    {
        $this->italic = $italic;
    }

    /**
     * @return bool
     */
    public function isUnderline(): bool
    {
        return $this->underline;
    }

    /**
     * @param bool $underline
     */
    public function setUnderline(bool $underline): void
    {
        $this->underline = $underline;
    }

    /**
     * @return bool
     */
    public function isCapitalize(): bool
    {
        return $this->capitalize;
    }

    /**
     * @param bool $capitalize
     */
    public function setCapitalize(bool $capitalize): void
    {
        $this->capitalize = $capitalize;
    }

    /**
     *
     */
    public function uglify() {
        if($this->bold === true) {
            $this->str = "<b>" . $this->str . "</b>";
        }

        if($this->italic === true) {
            $this->str = "<i>" . $this->str . "</i>";
        }

        if($this->underline === true) {
            $this->str = "<u>" . $this->str . "</u>";
        }

        if($this->capitalize === true) {
            $this->str = "<span style='text-transform: capitalize;'>" . $this->str . "</span>";
        }

    }

    /**
     * @param bool $bold
     */
    public function bold(bool $bold) {
        $this->setBold($bold);
    }

    /**
     * @param bool $italic
     */
    public function italic(bool $italic) {
        $this->setItalic($italic);
    }

    /**
     * @param bool $underline
     */
    public function underline(bool $underline) {
        $this->setUnderline($underline);
    }

    /**
     * @param bool $capitalize
     */
    public function capitalize(bool $capitalize) {
        $this->setItalic($capitalize);
    }
}

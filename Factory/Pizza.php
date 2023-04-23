<?php

/**
 * Class Pizza
 */
abstract class Pizza
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var Teig
     */
    protected $teig;
    /**
     * @var Sosse
     */
    protected $soße;
    /**
     * @var array
     */
    protected $gemüse;
    /**
     * @var Salami
     */
    protected $salami;
    /**
     * @var Kaese
     */
    protected $käse;
    /**
     * @var Thunfisch
     */
    protected $thunfisch;
    /**
     * @var Krabben
     */
    protected $krabben;

    abstract function vorbereiten();

    public function backen()
    {
        echo "Backe 25 Minuten bei 350\n";
    }

    public function schneiden()
    {
        echo "Schneide die Pizza diagonal in Stücke\n";
    }

    public function verpacken()
    {
        echo "Packe die Pizza in die offizielle Pizzeria-Schachtel\n";
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     * todo vervollständigen
     */
    public function __toString()
    {
        $out = "--- $this->name ---\n";

        if ($this->teig) {
            $out .= $this->teig . "\n";
        }

        if ($this->soße) {
            $out .= $this->soße . "\n";
        }

        if ($this->käse) {
            $out .= $this->käse . "\n";
        }

        if ($this->salami) {
            $out .= $this->salami . "\n";
        }

        if ($this->gemüse) {
            foreach ($this->gemüse as $gemüse) {
                $out .= $gemüse . ", ";
            }
        }

        if ($this->krabben) {
            $out .= $this->krabben . "\n";
        }

        if ($this->thunfisch) {
            $out .= $this->thunfisch . "\n";
        }

        return $out;
    }

}

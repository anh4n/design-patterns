<?php

/**
 * Class SalamiPizza
 */
class SalamiPizza extends Pizza
{
    /**
     * @var PizzaZutatenFabrik
     */
    protected $zutatenFabrik;

    /**
     * @param PizzaZutatenFabrik $zutatenFabrik
     */
    public function __construct(PizzaZutatenFabrik $zutatenFabrik)
    {
        $this->zutatenFabrik = $zutatenFabrik;
    }

    public function vorbereiten()
    {
        echo "Mache $this->name\n";

        $this->teig = $this->zutatenFabrik->erstelleTeig();
        $this->soße = $this->zutatenFabrik->erstelleSoße();
        $this->salami = $this->zutatenFabrik->erstelleSalami();
        $this->käse = $this->zutatenFabrik->erstelleKäse();
    }
}

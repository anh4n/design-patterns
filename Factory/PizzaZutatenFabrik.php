<?php

/**
 * Interface PizzaZutatenFabrik
 * Abstract Factory
 */
interface PizzaZutatenFabrik
{
    /**
     * @return Salami
     */
    public function erstelleSalami();

    /**
     * @return Teig
     */
    public function erstelleTeig();

    /**
     * @return Sosse
     */
    public function erstelleSoße();

    /**
     * @return Kaese
     */
    public function erstelleKäse();

    /**
     * @return array
     */
    public function erstelleGemüse();

    /**
     * @return Thunfisch
     */
    public function erstelleThunfisch();

    /**
     * @return Krabben
     */
    public function erstelleKrabben();
}

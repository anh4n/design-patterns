<?php

/**
 * Class BerlinerPizzaZutatenFabrik
 * Abstract Factory
 */
class BerlinerPizzaZutatenFabrik implements PizzaZutatenFabrik
{
    /**
     * @return Salami
     */
    public function erstelleSalami()
    {
        return new SpanischeSalami();
    }

    /**
     * @return Teig
     */
    public function erstelleTeig()
    {
        return new TeigMitDuennerKruste();
    }

    /**
     * @return Sosse
     */
    public function erstelleSoße()
    {
        return new MarinaraSosse();
    }

    /**
     * @return Kaese
     */
    public function erstelleKäse()
    {
        return new Parmesan();
    }

    /**
     * @return array
     */
    public function erstelleGemüse()
    {
        $gemüse = array(new Knoblauch(), new Zwiebeln(), new Pilze(), new Paprika());

        return $gemüse;
    }

    /**
     * @return Thunfisch
     */
    public function erstelleThunfisch()
    {
        return new ThunfischStuecke();
    }

    /**
     * @return Krabben
     */
    public function erstelleKrabben()
    {
        return new FrischeKrabben();
    }
}

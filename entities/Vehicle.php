<?

declare(strict_types = 1);

abstract class Vehicle 
{

    protected $id,
              $name,
              $type,
              $color,
              $brand,
              $door,
              $wheel,
              $model;

    public function __construct(array $array) 
    {
        $this->hydrate($array);
    }

    /**
     * Hydratation
     *
     * @param array $donnees
     */
    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);
                
            // Si le setter correspondant existe.
            if (method_exists($this, $method))
            {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

}


?>
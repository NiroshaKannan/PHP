<?php
class Animal
{
    private $family;
    private $food;
	private $counts;
    public function __construct($family, $food, $counts)
    {
        $this->family = $family;
        $this->food   = $food;
		$this->counts = $counts; 
    }
    public function get_family()
    {
        return $this->family;
    }
    public function set_family($family)
    {
        $this->family = $family;
    }
    public function get_food()
    {
        return $this->food;
    }
    public function set_food($food)
    {
        $this->food = $food;
    }
	public function get_counts()
	{
		return $this->counts;
	}
	public function set_counts($counts)
	{
		return $this->counts;
	}
}
?> 
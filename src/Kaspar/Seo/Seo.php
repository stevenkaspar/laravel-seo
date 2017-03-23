<?php namespace Kaspar\Seo;

class Seo
{
	protected $data = [];

	public function __construct(){

	}
	public function has($key)
	{
		return isset($this->data[$key]);
	}
	public function get($key)
	{
		return isset($this->data[$key]) ? $this->data[$key] : '';
	}
	public function set($key, $value)
	{
		$this->data[$key] = $value;
	}

	private static function toScript($content){
		return "<script type='application/ld+json'>$content</script>";
	}


	public function contactPointStuct($contact_point){
		return \View::make('seo::contact_point', array('contactPoint' => $contact_point));
	}
	public function blogStruct($blog){
		return \View::make('seo::blog',           array('blog'         => $blog));
	}
	public function organizationStruct($organization){
		return \View::make('seo::organization',   array('organization' => $organization));
	}
	public function productStruct($product){
		return \View::make('seo::product',        array('product'      => $product));
	}

	// struct data
	public function Blog($blog){
		return $this->toScript($this->blogStruct($blog));
	}
	public function Organization($organization){
		return $this->toScript($this->organizationStruct($organization));
	}
	public function Product($product){
		return $this->toScript($this->productStruct($product));
	}
	// any
	public function Any($any){
		return $this->toScript(json_encode($any));
	}
	// meta tag
	public function Meta($name, $content){
		return '<meta name="'.$name.'" content="'.$content.'">';
	}
}

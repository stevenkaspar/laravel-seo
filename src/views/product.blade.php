{
  "@context" : "http://schema.org",
  "@type" :       "Product",
  "name" :        "{{ $product['name'] }}",
  "image" :       "{{ $product['image'] }}",
  "description" : "{{ $product['description'] }}",
  "url" : "{{ $product['url'] }}",
  "brand" : {
    "@type" : "Brand",
    "name" : "{{ $product['brand_name'] }}",
    "logo" : "{{ $product['brand_logo'] }}"
  },
  "offers" : {
    "@type" : "Offer",
    "price" : "{{ $product['price'] }}",
    "priceCurrency" : "USD"
  }
}

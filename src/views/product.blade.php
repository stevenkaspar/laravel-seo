{
  "@context" : "http://schema.org",
  "@type" :       "Product",
  "name" :        "{{ $product['name'] }}",
  "image" :       "{{ $product['image'] }}",
  "description" : "{{ $product['description'] }}",
  "url" : "{{ $product['url'] }}",
  "brand" : {
    "@type" : "Brand",
    "name" : "{{ $product['brandName'] }}",
    "logo" : "{{ $product['brandLogo'] }}"
  },
  "offers" : {
    "@type" : "Offer",
    "price" : "{{ $product['price'] }}",
    "priceCurrency" : "USD"
  }
}

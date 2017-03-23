
{ "@context" :    "http://schema.org",
  "@type" :       "Blog",
  "url" :         "{{ $blog['url'] }}",
  "dateCreated":  "{{ $blog['dateCreated'] }}",
  "dateModified": "{{ $blog['dateModified'] }}",
  "name":         "{{ $blog['name'] }}",
  "headline":     "{{ ($blog['headline'])?:$blog['name'] }}",
  "image":        "{{ $blog['image'] }}",
  "keywords":     "{{ $blog['keywords'] }}"
}

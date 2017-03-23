
{ "@context" : "http://schema.org",
  "@type" : "Blog",
  "url" :        "{{ $blog['url'] }}",
  "dateCreated": "{{ $blog['date_created'] }}",
  "dateModified": "{{ $blog['date_modified'] }}",
  "name":        "{{ $blog['name'] }}",
  "headline":    "{{ ($blog['headline'])?:$blog['name'] }}",
  "image":       "{{ $blog['image'] }}",
  "keywords":    "{{ $blog['keywords'] }}"
}


[
  @if (is_array($contact_point))
    @foreach($contact_point as $index => $contact)
      {
      @foreach($contact as $property => $value)
        "{{ $property }}" : "{{ $value }}",
      @endforeach
        "@type" : "ContactPoint"
      }{{ ($index > 0)?',':'' }}
    @endforeach
  @endif
]

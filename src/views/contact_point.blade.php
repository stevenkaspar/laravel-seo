
[
  @if (is_array($contactPoint))
    @foreach($contactPoint as $index => $contact)
      {
      @foreach($contact as $property => $value)
        "{{ $property }}" : "{{ $value }}",
      @endforeach
        "@type" : "ContactPoint"
      }{{ ($index > 0)?',':'' }}
    @endforeach
  @endif
]

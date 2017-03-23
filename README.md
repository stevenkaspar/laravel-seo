

### Example Usage

Include an **Organization** JSON-LD [schema](http://schema.org/Organization)

*layouts.partials.header*

    @include('layouts.partials.seo')

*layouts.partials.seo*

    {{
      Seo::Organization(array(
        'url' => 'https://example.com',
        'contactPoint' => Seo::contactPointStuct(array(
          array(
            'email' =>       'support@example.com',
            'contactType' => 'Customer Service',
            'url' =>          action('WebsiteController@contact')
          )
        ))
      ))
    }}

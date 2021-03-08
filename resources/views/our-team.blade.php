@extends ('layouts.app')
@section ('content')
  @include ('sections.other-hero', [
    'data' => (object)([
      'hero_height' => '546px',
      'title' => 'Our Team',
      'content' => 'Our learning solutions aim to help develop talent, build skills, knowledge and capability and help support growth of your organisation. Focusing on Adult Learning Principles, we create customised, engaging workshops that speak to all types of learners.'
    ])
  ])
  @include ('sections.team')
@endsection

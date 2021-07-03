@php
  $logo_id = get_theme_mod( 'custom_logo' );
  $logo_url = 'https://elamanpuoti.fi/wp-content/uploads/2020/04/cropped-puoti-logo.png'; // wp_get_attachment_image_url( $logo_id , 'full' );
@endphp
@if(!empty($logo_url))
  <img class="max-h-full" src="{{ esc_url($logo_url) }}" alt="{{ get_bloginfo('name', 'display') }}">
@else
  {{ get_bloginfo('name', 'display') }}
@endif

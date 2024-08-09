@props(['active' => false])

<li class="nav-item"><a class="{{ $active ? 'nav-link active' : 'nav-link' }}"
        aria-current="{{ $active ? 'page' : 'false' }}" {{ $attributes }}>{{ $slot }}</a>
</li>

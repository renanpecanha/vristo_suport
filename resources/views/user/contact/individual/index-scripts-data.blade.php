@isset($ContactsIndividuals)
    @foreach ($ContactsIndividuals as $ContactIndividual)
        [
        {{ $ContactIndividual->id }},
        '{{ $ContactIndividual->name }}',
        '{{ $ContactIndividual->whatsapp }}',
        '{{ $ContactIndividual->email }}',
        '{{ $ContactIndividual->phone }}',
        '{{ $ContactIndividual->address }}',
        '{{ __("contacts/individual.gender.$ContactIndividual->gender.value") }}',
        '{{ $ContactIndividual->birth_date ? $ContactIndividual->birth_date->format('d/m/Y') : null }}',
        '<span class="badge badge-outline-{{ __("contacts/individual.status.$ContactIndividual->active.color") }}">{{ __("contacts/individual.status.$ContactIndividual->active.value") }} </span>',
        @include(config('custom.others.user_theme') . '.contact.individual.index-scripts-data-actions'),
        ],
    @endforeach
@endisset

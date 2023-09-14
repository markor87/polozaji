<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <input type="text" wire:model="search" placeholder="Search Polozaji...">
    <ul>
        @foreach($polozaji as $polozaj)
            <li>{{ $polozaj->id }}</li>
        @endforeach
    </ul>
</div>

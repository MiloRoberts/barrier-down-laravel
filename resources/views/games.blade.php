<x-layout>
    @foreach ($games as $game)
        <h3>
            {{ $game->game_title->english_title }}
        </h3>
        <h3>
            {{ $game->game_title->japanese_title }}
        </h3>
        <h3>
            <a href="/gameconsoles/{{ $game->game_console_id }}">
                {{ $game->game_console->console_manufacturer->manufacturer }} 
                <span>
                    {{ $game->game_console->console_name->name }}
                </span>
            </a>
        </h3>
        <hr>
    @endforeach
</x-layout>
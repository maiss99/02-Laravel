@extends('base')

@section('title', '🎮 Game Details')

@section('content')

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Game name</th>
                <th>Platform</th>
                <th>Genre</th>
                <th>Rating</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>{{ $game->game_name }}</td>
                <td>{{ $game->platform }}</td>
                <td>{{ $game->genre }}</td>
                <td>{{ $game->rating }}/10</td>
            </tr>
        </tbody>
    </table>

@endsection
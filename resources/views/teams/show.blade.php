@extends('layouts.app', ['title' => 'Team', 'page_heading' => 'Teams'])

@section('content')
<div>
    <div class="py-1 mx-auto max-w-7xl">
        @livewire('teams.update-team-name-form', ['team' => $team])

        @livewire('teams.team-member-manager', ['team' => $team])

        @if (Gate::check('delete', $team) && ! $team->personal_team)
            <x-section-border />

            <div class="mt-10 sm:mt-0">
                @livewire('teams.delete-team-form', ['team' => $team])
            </div>
        @endif
    </div>
</div>
@endsection


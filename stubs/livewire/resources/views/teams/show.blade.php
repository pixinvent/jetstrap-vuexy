@extends('layouts.contentLayoutMaster')

@php
$breadcrumbs = [['link' => 'home', 'name' => 'Home'], ['name' => 'Team Settings']];
@endphp

@section('title', 'Team Settings')

@section('content')
  @livewire('teams.update-team-name-form', ['team' => $team])

  @livewire('teams.team-member-manager', ['team' => $team])

  @if (Gate::check('delete', $team) && !$team->personal_team)

    @livewire('teams.delete-team-form', ['team' => $team])
  @endif
@endsection

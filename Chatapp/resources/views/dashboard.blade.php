<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <h1>Chat List</h1>
    <ul>

        @forelse ($users as $user)
        <li><a href="{{ url('/chat/' . $user->id) }}" class="btn btn-primary">{{ $user->name }} </a></li>
        @empty
            <h3>No user Found</h3>
        @endforelse
    </ul>
</x-app-layout>

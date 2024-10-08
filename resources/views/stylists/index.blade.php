<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stylists') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('stylists.create') }}" class="btn btn-primary mb-4">Create New Stylist</a>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Bio</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stylists as $stylist)
                                <tr>
                                    <td class="border px-4 py-2">{{ $stylist->name }}</td>
                                    <td class="border px-4 py-2">{{ Str::limit($stylist->bio, 50) }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('stylists.show', $stylist->id) }}" class="btn btn-secondary">View</a>
                                        <a href="{{ route('stylists.edit', $stylist->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('stylists.destroy', $stylist->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

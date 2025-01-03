<x-layout>

    <div class="bg-white p-8 rounded-lg shadow-md w-full">
        <h3 class="text-3xl text-center font-bold mb-4">
            My Job Listings
        </h3>


        @forelse ($jobs as $job)
            <!-- Listing 1 -->
            <div class="flex justify-between items-center border-b-2 border-gray-200 py-2">
                <div>
                    <h3 class="text-xl font-semibold">
                        {{ $job->title }}
                    </h3>
                    <p class="text-gray-700">{{ $job->type }}</p>
                </div>
                <div class="flex gap-3">
                    <a href="{{ route('jobs.edit', ['job' => $job->id]) }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded text-sm">Edit</a>
                    <form method="POST" action="{{ route('jobs.destroy', $job->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded text-sm">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <p>Jobs not found</p>
        @endforelse
    </div>

</x-layout>

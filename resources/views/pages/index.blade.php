<x-layout>
    <h2 class="text-center text-3xl mt-4 mb-4font-bold border border-gray-300 p-3">
        Welcome to workopia
    </h2>
    <main class="container mx-auto p-4 mt-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
            @forelse ($jobs as $job)
                <x-job-card :job="$job"></x-job-card>
            @empty
                <p>Jobs not found</p>
            @endforelse
        </div>
        <a href="{{ route('jobs') }}" class="block text-xl text-center mb-4"><i class="fa fa-arrow-alt-circle-right"></i>
            Show
            all jobs</a>
    </main>
</x-layout>

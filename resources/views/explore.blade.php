<x-app-layout>
    <div class="flex-1 mx-10">
        <div class="bg-white rounded-xl border-b">
            @foreach($users as $user)
                <div class="flex items-center justify-between p-4 {{ $loop->last ? '' : 'border-b' }}">
                    <div class="flex items-center">
                        <a href="{{ $user->path() }}" class="focus:outline-none">
                            <img class="rounded-full mr-4" src="https://i.pravatar.cc/40" alt="profile image">
                        </a>
                        <div>
                            <span class="font-bold mb-1">{{ $user->name }}</span>
                            <span class="text-gray-400">{{ '@' . $user->username }}</span>
                        </div>
                    </div>
                    <div class="text-gray-700">
                        Joined
                        {{ $user->created_at->diffForHumans() }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

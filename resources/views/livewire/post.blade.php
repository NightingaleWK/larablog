<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">Title</th>
                <th scope="col" class="px-6 py-3">Content</th>
                <th scope="col" class="px-6 py-3">actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr wire:key='{{ $post->id }}' class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $post->title }}
                    </th>
                    <td class="px-6 py-4">
                        {{ str($post->content)->words(8) }}
                    </td>
                    <td class="px-6 py-4">
                        <button type="button" wire:click="delete({{ $post->id }})" wire:confirm="确定删除吗？"
                            class="px-3 py-2 text-xs font-medium text-center text-white bg-red-700 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                            删除</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<x-app-layout>
    <div class="py-12">
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-6">

                <div class="flex items-center gap-2 mb-6">
                    <a href="{{ route('category.index') }}" class="text-gray-400 hover:text-gray-600">‹</a>
                    <h2 class="text-xl font-bold">Edit Category</h2>
                </div>

                <form method="POST" action="{{ route('category.update', $category->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label class="block text-sm font-medium mb-1">Category</label>
                        <input type="text" name="name" value="{{ old('name', $category->name) }}"
                            class="w-full border border-gray-300 dark:border-gray-600 rounded-lg px-3 py-2 text-sm 
                            text-gray-900 dark:text-white
                            dark:bg-gray-700 @error('name') border-red-500 @enderror">
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex justify-end gap-2">
                        <a href="{{ route('category.index') }}"
                           class="px-4 py-2 text-sm border rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">Cancel</a>
                        <button type="submit"
                                class="px-4 py-2 text-sm bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                            Save Category
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
<div class="max-w-2xl mx-auto p-4">
    <form class="space-y-6" method="post" action="{{ route('talks.store') }}">
        @csrf
        <div>
            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
            <input type="text" id="title" name="title"
                   class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-600 focus:ring-opacity-50"
                   placeholder="How to save a life">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Type</label>
                <select id="type" name="type"
                        class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-600 focus:ring-opacity-50">
                    <option>Lightning</option>
                    <option>Standard</option>
                    <option>Keynote</option>
                </select>
            </div>

            <div>
                <label for="length" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Length</label>
                <input type="text" id="length" name="length"
                       class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-600 focus:ring-opacity-50">
                <x-input-error :messages="$errors->get('length')" />
                <p class="mt-1 text-sm text-red-600 dark:text-red-400" id="length-error">Error message here.</p>
            </div>
        </div>

        <div>
            <label for="abstract" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Abstract</label>
            <textarea id="abstract" name="abstract" rows="4"
                      class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-600 focus:ring-opacity-50"></textarea>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Describe the talk in a few sentences, in a way that's compelling and informative and could be presented to the public.</p>
        </div>

        <div>
            <label for="organizer_notes" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Organizer Notes</label>
            <textarea id="organizer_notes" name="organizer_notes" rows="4"
                      class="mt-1 block w-full rounded-md border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 dark:focus:border-indigo-400 focus:ring focus:ring-indigo-200 dark:focus:ring-indigo-600 focus:ring-opacity-50"></textarea>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Write any notes you may want to pass to an event organizer about this talk.</p>
        </div>

        <div class="flex justify-end">
            <button type="button"
                    class="mr-2 px-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm text-sm font-medium text-gray-700 dark:text-gray-300 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-indigo-400">
                Cancel
            </button>
            <button type="submit"
                    class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-indigo-400">
                Save
            </button>
        </div>
    </form>
</div>

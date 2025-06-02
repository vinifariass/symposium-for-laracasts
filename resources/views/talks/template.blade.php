<div class="mx-auto max-w-2xl p-4">
    @csrf
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Title</label>
        <input type="text" id="title" name="title" value="{{ old('title',$talk->title) }}"
            class="mt-1 block w-full rounded-md border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:focus:border-indigo-400 dark:focus:ring-indigo-600"
            placeholder="How to save a life" />
    </div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <label for="type" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Type</label>
            <select id="type" name="type"
                class="mt-1 block w-full rounded-md border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:focus:border-indigo-400 dark:focus:ring-indigo-600">
                @foreach (App\Enums\TalkType::cases() as $talkType)
                    <option value="{{ $talkType->value }}" {{ old('type') == $talkType->value ? 'selected' : '' }}>
                        {{ ucwords($talkType->value) }}
                    </option>
                @endforeach
                <option>Lightning</option>
                <option>Standard</option>
                <option>Keynote</option>
            </select>
        </div>

        <div>
            <label for="length" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Length</label>
            <input type="text" id="length" name="length" value="{{ old('length') }}"
                class="mt-1 block w-full rounded-md border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:focus:border-indigo-400 dark:focus:ring-indigo-600" />
            <x-input-error :messages="$errors->get('length')" />
            <p class="mt-1 text-sm text-red-600 dark:text-red-400" id="length-error">Error message here.</p>
        </div>
    </div>

    <div>
        <label for="abstract" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Abstract</label>
        <textarea id="abstract" name="abstract" rows="4"
            class="mt-1 block w-full rounded-md border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:focus:border-indigo-400 dark:focus:ring-indigo-600">{{ old('abstract') }}</textarea
            >
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                Describe the talk in a few sentences, in a way that's compelling and informative and could be presented
                to the public.
            </p>
        </div>

        <div>
            <label for="organizer_notes" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                Organizer Notes
            </label>
            <textarea
                id="organizer_notes"
                name="organizer_notes"
                rows="4"
                class="mt-1 block w-full rounded-md border border-gray-300 bg-white text-gray-900 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-100 dark:focus:border-indigo-400 dark:focus:ring-indigo-600"
            >{{ old('organizer_notes') }}</textarea>
        <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
            Write any notes you may want to pass to an event organizer about this talk.
        </p>
    </div>

    <div class="flex justify-end">
        <button type="button"
            class="mr-2 rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300 dark:hover:bg-gray-700 dark:focus:ring-indigo-400">
            Cancel
        </button>
        <button type="submit"
            class="rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-indigo-400">
            Save
        </button>
    </div>
</div>
</form>

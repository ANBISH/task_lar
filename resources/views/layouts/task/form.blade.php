@extends('common.home')


@section('content')
    <form class="max-w-sm mx-auto" method="POST"
        action="{{ route('task.update', ['id' => $task->id, 'slug' => $category_slug]) }}">
        @csrf
        @method('PUT')
        <div class="mb-5">
            <label for="username-success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">
                {{ __('task/form.title') }}
            </label>
            <input type="text" id="username-success" name='title'
                class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500"
                placeholder="Bonnie Green">
            <p class="mt-2 text-sm text-green-600 dark:text-green-500"><span class="font-medium">Alright!</span> Username
                available!</p>
        </div>
        {{-- <div class="mb-5">
            <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">
                {{ __('task/form.title') }}
            </label>
            <input type="text" id="username-error"
                class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500"
                placeholder="Bonnie Green">
            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already
                taken!</p>
        </div> --}}
        <div class="mb-5">

            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{ __('task/form.description') }}</label>
            <textarea id="message" rows="4" name='description'
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your thoughts here..."></textarea>

        </div>
        <div class="mb-5">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                {{ __('task/form.priority') }}
            </label>
            <select id="countries" name='priority'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                @foreach ( $priority as $p )
                    <option value='{{ $p->id }}'>{{ $p->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="relative max-w-sm">
            <label for="datepicker-autohide" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                {{ __('task/form.date_due') }}
            </label>
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 mt-6 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                </svg>
            </div>
            <input id="datepicker-autohide" datepicker datepicker-autohide type="text" name='date_due'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Select date">
        </div>

        <div class="mt-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg">{{ __('task/form.button') }}</button>
        </div>
    </form>
@endsection

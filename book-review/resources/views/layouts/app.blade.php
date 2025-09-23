<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Review</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>

    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .book-item {
            @apply text-sm rounded-md bg-white p-4 leading-6 text-slate-900 shadow-md shadow-black/5 ring-1 ring-slate-700/10;
        }

        .book-title {
            @apply text-lg font-semibold text-slate-800 hover:text-slate-600;
        }

        .book-author {
            @apply block text-slate-600;
        }

        .book-rating {
            @apply text-sm font-medium text-slate-700;
        }

        .book-review-count {
            @apply text-xs text-slate-500;
        }

        .empty-book-item {
            @apply text-sm rounded-md bg-white py-10 px-4 text-center leading-6 text-slate-900 shadow-md shadow-black/5 ring-1 ring-slate-700/10;
        }

        .empty-text {
            @apply font-medium text-slate-500;
        }

        .reset-link {
            @apply text-slate-500 underline;
        }
    </style>

    {{-- blade-formatter-enable --}}
</head>
<body class="container mx-auto mt-10 mb-10 max-w-3xl">
    @yield('content')
</body>
</html>

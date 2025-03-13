<x-mail::message>
    # Hello, you have receive an email

    Hello, you have receive an email!

    <x-mail::button :url="$url">
        View more details
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
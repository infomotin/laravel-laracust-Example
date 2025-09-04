<x-mail::message>
# Issue Created

A new issue has been created Name: {{ $issue->name }}.

<x-mail::button :url="''">
Priority: {{ $issue->priority }}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

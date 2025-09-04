@component('mail::message')
# Issue {{ ucfirst($action) }}

An issue has been **{{ $action }}**.

**Title:** {{ $issue->title }}
**Description:** {{ $issue->description }}

Thanks,
{{ config('app.name') }}
@endcomponent

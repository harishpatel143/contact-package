@component('mail::message')
# Introduction

New Query from {{$name ?? '-'}}
{{$message ?? '-'}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

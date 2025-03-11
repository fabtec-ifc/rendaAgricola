@extends('app')

@section('body')
    
<div class="py-12">
    
    @include('profile.partials.update-profile-information-form')

    @include('profile.partials.update-password-form')

    @include('profile.partials.delete-user-form')

</div>

@endsection

@push('validation')
    @vite(['resources/js/validation/profile-update.js', 'resources/js/validation/profile-password-update.js', 'resources/js/validation/profile-delete.js'])
@endpush

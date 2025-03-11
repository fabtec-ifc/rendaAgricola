@vite('resources/js/showToast.js')

@php
    switch ($type) {
        case 'success':
            $classesToast = 'toast align-items-center text-bg-light-blue border-blue';
            $classText = 'text-blue';
            $icon = '<i class="ri-checkbox-circle-line ri-lg"></i>';
            break;

        case 'warning':
            $classesToast = 'toast align-items-center text-bg-light-orange border-orange';
            $classText = 'text-orange';
            $icon = '<i class="ri-error-warning-line ri-lg"></i>';
            break;

        case 'danger':
            $classesToast = 'toast align-items-center text-bg-light-red border-red';
            $classText = 'text-red';
            $icon = '<i class="ri-alarm-warning-line ri-lg"></i>';
            break;
    }
@endphp

<div class="toast-container position-fixed top-0 end-0 p-3">
    <div 
        id="liveToast" 
        role="alert" 
        aria-live="assertive" 
        aria-atomic="true"
        {{ $attributes->merge(['class' => $classesToast]) }} 
    >
        <div class="d-flex">
            <div class="toast-body {{ $classText }}">
                <div class="d-inline-flex align-items-center gap-1">
                    <span>
                        {!! $icon !!}
                    </span>
                    {{ $message }}
                </div>
            </div>
        </div>
    </div>
</div>
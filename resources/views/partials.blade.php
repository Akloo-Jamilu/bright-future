<div>
    @php
        $currentHour = now()->hour;
        $timeOfDay = 'morning';
        if ($currentHour >= 12 && $currentHour < 18) {
            $timeOfDay = 'afternoon';
        } elseif ($currentHour >= 18) {
            $timeOfDay = 'evening';
        }
    @endphp
    <p>Hello, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}! Good {{ $timeOfDay }}.</p>
</div>

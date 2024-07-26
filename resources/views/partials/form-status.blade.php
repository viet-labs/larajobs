@if (session('status'))
    @php $status = session('status'); @endphp
    <p class="rounded px-4 py-3 text-white {{ $status['type'] == 'error' ? 'bg-red-500' : 'bg-blue-500' }}">
        {{ $status['message'] }}
    </p>
@endif

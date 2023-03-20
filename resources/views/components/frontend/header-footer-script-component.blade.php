@if($script)
    @if($type == 'header')
        {!! $script->header_script !!}
    @endif
    @if($type == 'footer')
        {!! $script->footer_script !!}
    @endif
@endif

<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="{{ asset('picture/logo2.png') }}" class="jbeauty-logo" width="100px" alt="Laravel Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

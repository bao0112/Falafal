<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="../../../../../public/full_logo.svg" class="logo" alt="Falafal Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

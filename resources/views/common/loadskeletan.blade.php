@php
    $columns = 10;
    $loopCount = $loopCount ?? 6;
@endphp

@for ($i = 0; $i < $loopCount; $i++)
<tr>
    @for ($j = 0; $j < $columns; $j++)
    <td class="placeholder-wave" style="padding:16px">
        <div class="placeholder rounded" style="width:99%; height:20px; background:#0000001f;"></div>
    </td>
    @endfor
</tr>
@endfor

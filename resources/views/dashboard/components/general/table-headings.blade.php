<thead>
<tr>
    <th class="text-center" style="min-width: 50px;">#</th>
    @foreach($headings as $key=>$value)
        <th style="min-width: 100px;">{{ $value }}</th>
    @endforeach
    <th class="text-center" style="min-width: 150px;">
        {{__('general.action')}}
    </th>
</tr>
</thead>

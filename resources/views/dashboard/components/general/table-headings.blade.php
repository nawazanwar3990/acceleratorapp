<thead>
<tr>
    <th class="text-center" style="min-width: 50px;">#</th>
    @foreach($headings as $key=>$value)
        <th style="min-width: 100px;">{{ $value }}</th>
        @if(in_array($key,[\App\Enum\TableHeadings\MeetingTableHeadingEnum::MEETING_ORGANIZED_FOR,\App\Enum\TableHeadings\MeetingTableHeadingEnum::MEETING_ORGANIZED_LOCATION]))
            <th style="min-width: 300px;">{{ $value }}</th>
        @endif
    @endforeach
    <th class="text-center" style="min-width: 150px;">
        {{__('general.action')}}
    </th>
</tr>
</thead>

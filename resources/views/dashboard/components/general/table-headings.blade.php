<thead>
<tr>
    <th class="text-center" style="min-width: 50px;">#</th>
    @foreach($headings as $key=>$value)
        @if(in_array($key,[
            \App\Enum\TableHeadings\MeetingTableHeadingEnum::MEETING_ORGANIZED_FOR,
            \App\Enum\TableHeadings\MeetingTableHeadingEnum::MEETING_ORGANIZED_LOCATION,
            \App\Enum\TableHeadings\MeetingTableHeadingEnum::MEETING_MODE
         ]))
            <th style="min-width: 200px;">{{ $value }}</th>
        @else
            <th style="min-width: 100px;">{{ $value }}</th>
        @endif
    @endforeach
    <th class="text-center" style="min-width: 150px;">
        {{__('general.action')}}
    </th>
</tr>
</thead>

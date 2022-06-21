{{-- Capital --}}
<tr>
    <td>
        <h5 class="fw-bold text-purple">{{ __('general.capital') }}</h5>
    </td>
    <td>&nbsp;</td>
</tr>
@php
    $total_eqt = 0;
@endphp
@for($i=0;$i<count($equityCapital);$i++)
    @php $headName = $equityCapital[$i]->HeadName;
         $oResultTrial = \App\Services\Accounts\BalanceSheetService::capital($startDate, $endDate, $headName);
    @endphp

    @foreach ($oResultTrial as $result)
        <tr>
            <td>{!! str_repeat('&nbsp;', 3) !!}{{ $result->HeadName }}</td>
            <td class="text-right fw-bold">
                @php
                    $GLOBALS['totalLiabEqPL'] +=  $result->amount;
                    $total_eqt = \App\Services\GeneralService::ledgerBalanceType($result->amount,true);
                @endphp
                <h5>{{ $total_eqt }}</h5>
            </td>
        </tr>
    @endforeach
@endfor

{{-- Drawing --}}
<tr class="table_data">
    <td>
        <h5 class="fw-bold text-purple">{{ __('general.drawings') }}</h5>
    </td>
    <td>&nbsp;</td>
</tr>
@php
    $total_eqt = 0;
@endphp
@for($i=0;$i<count($equityDrawings);$i++)
    @php $headName = $equityDrawings[$i]->HeadName;
         $oResultTrial = \App\Services\Accounts\BalanceSheetService::drawings($start_date, $end_date,$headName);
    @endphp

    @foreach ($oResultTrial as $result)
        <tr class="table_data">
            <td>{!! str_repeat('&nbsp;', 3) !!}{{ $result->HeadName }}</td>
            <td class="text-right">
                @php   $GLOBALS['totalLiabEqPL'] +=  $result->amount;
                            $total_eqt = \App\Services\GeneralService::ledgerBalanceType($result->amount,true);
                @endphp
                <b>{{$total_eqt }}</b>
            </td>
        </tr>
    @endforeach
@endfor

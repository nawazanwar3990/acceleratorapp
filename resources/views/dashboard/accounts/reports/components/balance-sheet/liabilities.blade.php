<div style="width:48%;">
    <h3 class="fw-bold text-purple mb-1">{{ __('general.liabilities_equity') }}</h3>
    <hr class="border border-2 full-color border-primary mt-1">

<table style="width: 100%;">
    <tbody>
        @foreach ($liabilities as $liability)
            @php
                $total_liab = 0;
            $liab_head_data = \App\Services\Accounts\QueryService::liabilitiesInfo($liability->HeadName);
            @endphp
            <tr>
                <td><h5 class="fw-bold text-purple">{{$liability->HeadName}}</h5></td>
                <td>
                </td>
            </tr>

            @foreach ($liab_head_data as $liab_head)

                @if ($liab_head->HeadName == 'Tax')
                    @php $child_liability = \App\Services\Accounts\QueryService::liabilitiesInfoTax($liab_head->HeadName); @endphp
                @else
                    @php $child_liability = \App\Services\Accounts\QueryService::liabilitiesInfo($liab_head->HeadName); @endphp
                @endif

                @if ($liab_head->HeadName != 'Tax')
                    <tr>
                        <td class="fw-bold">{!! str_repeat('&nbsp;', 3) !!}{{$liab_head->HeadName}}</td>
                        <td class="text-right">
                            @php
                                $total_liab += 0;
                            @endphp
                        </td>
                    </tr>
                @endif

                @foreach ($child_liability as $chliab_head)
                    @php $liab_balance = \App\Services\Accounts\QueryService::liabilitiesBalance($chliab_head->HeadCode, $startDate, $endDate); @endphp
                    @if (!empty($liab_balance->balance) && $liab_balance->balance <> 0)
                        <tr>
                            <td>{!! str_repeat('&nbsp;', 5) !!}{{ $chliab_head->HeadName }}</td>

                            <td class="text-right">
                                {{ \App\Services\GeneralService::ledgerBalanceType($liab_balance->balance,true) }}
                                @php $total_liab += $liab_balance->balance; @endphp

                            </td>
                        </tr>
                    @endif

                @endforeach
            @endforeach
            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr>
                <td class="thick-primary-border-bottom">
                    <h5 class="fw-bold text-purple">{{ __('general.total') }} <?php echo $liability->HeadName; ?></h5>
                </td>

                <td class="text-right thick-primary-border-bottom">
                    <h5 class="fw-bold text-purple">{{ \App\Services\GeneralService::ledgerBalanceType($total_liab,true) }}</h5>
                    @php  $GLOBALS['totalLiabEqPL']   +=  $total_liab; @endphp
                </td>
            </tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        @endforeach

        @include('dashboard.accounts.reports.components.balance-sheet.equity',['totalLiabEqPL'=>$GLOBALS['totalLiabEqPL'] ])
        @include('dashboard.accounts.reports.components.balance-sheet.profit-loss',['totalLiabEqPL'=>$GLOBALS['totalLiabEqPL'] ])

        <tr>
            <td class="thick-primary-border-bottom">&nbsp;</td>
            <td class="thick-primary-border-bottom">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <h3 class="text-purple">{{ __('general.total_liabilities') }}</h3>
            </td>
            <td class="text-right">
                <h3 class="text-purple">{{\App\Services\GeneralService::ledgerBalanceType($GLOBALS['totalLiabEqPL'],true ,2)}}</h3></td>
        </tr>
    </tbody>
</table>
</div>

<div style="width: 48%">
    <h3 class="fw-bold text-purple mb-1">{{ __('general.assets') }}</h3>
    <hr class="border border-2 full-color border-primary mt-1">

<table style="width: 100%;">
    <tbody>
        @foreach ($fixedAssets as $assets)
            @php
                $total_assets = 0;
                $head_data = \App\Services\Accounts\QueryService::assetsInfo($assets->HeadName);
            @endphp
            <tr>
                <td><h5 class="fw-bold text-purple">{{$assets->HeadName}}</h5></td>
                <td></td>
            </tr>
            @foreach ($head_data as $assets_head)

                @php $ass_balance = \App\Services\Accounts\QueryService::assetsBalance($assets_head[0]->HeadCode, $startDate, $endDate); @endphp
                @if ($assets_head[0]->PHeadName == 'Current Asset' || $assets_head[0]->PHeadName == 'Non Current Assets')
                    @php

                        if($assets_head[0]->PHeadName == 'Non Current Assets'){
                           $child_head_current = \App\Services\Accounts\QueryService::assetChilds($assets_head[0]->HeadName, $startDate, $endDate);
                        }
                        else{
                            if($assets_head[0]->HeadName == 'Inventory'){
                                 $child_head_current = \App\Services\Accounts\QueryService::assetNonCurrentChilds($assets_head[0]->HeadName, $startDate, $endDate);
                            }
                            else{
                                $child_head_current = \App\Services\Accounts\QueryService::assetChilds($assets_head[0]->HeadName, $startDate, $endDate);
                            }

                        }
                    @endphp
                    @foreach ($child_head_current as $cchead)

                        @php
                            $cur_ass_balance = \App\Services\Accounts\QueryService::assetsBalance($cchead[0]->HeadCode, $startDate, $endDate);

                            if($assets_head[0]->PHeadName == 'Non Current Assets'){
                                $schild_head_current = \App\Services\Accounts\QueryService::assetNonCurrentChilds($cchead[0]->HeadName, $startDate, $endDate);
                            }
                            elseif($assets_head[0]->HeadName == 'Inventory'){
                                $schild_head_current = \App\Services\Accounts\QueryService::assetNonCurrentChilds($cchead[0]->HeadName, $startDate, $endDate);
                            }
                            else{
                                $schild_head_current = \App\Services\Accounts\QueryService::assetChilds($cchead[0]->HeadName, $startDate, $endDate);
                            }

                        @endphp
                        @if ($cur_ass_balance->balance <> 0)
                            <tr>
                                <td>{!! str_repeat('&nbsp;', 3) !!}{{ $cchead[0]->HeadName }}</td>

                                <td class="text-right">
                                    {{ \App\Services\GeneralService::ledgerBalanceType($cur_ass_balance->balance,true) }}
                                    @php $total_assets += $cur_ass_balance->balance; @endphp

                                </td>
                            </tr>
                        @endif

                        @if ($cchead[0]->HeadName == 'Cash At Bank' || $cchead[0]->HeadName == 'Cash In Hand' || $cchead[0]->HeadName == 'Account Receivable' || $cchead[0]->HeadName == 'Customer Receivable' || $cchead[0]->HeadName == 'Loan Receivable')
                            @foreach ($schild_head_current as $scchild)
                                @php $cur_bank_balance = \App\Services\Accounts\QueryService::assetsBalance($scchild[0]->HeadCode, $startDate, $endDate) @endphp

                                @if ($cur_bank_balance->balance <> 0)
                                    <tr>
                                        <td>
                                            {!! str_repeat('&nbsp;', 3) !!}{{$scchild[0]->HeadName}}
                                        </td>

                                        <td class="text-right">
                                            {{ \App\Services\GeneralService::ledgerBalanceType($cur_bank_balance->balance,true) }}
                                            @php $total_assets += $cur_bank_balance->balance; @endphp

                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endif
            @endforeach

            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
            <tr>
                <td class="thick-primary-border-bottom">
                    <h5 class="fw-bold text-purple">{{ __('general.total') }} {{$assets->HeadName}}</h5>
                </td>
                <td class="text-right thick-primary-border-bottom">
                    <h5 class="fw-bold text-purple">{{ \App\Services\GeneralService::ledgerBalanceType($total_assets,true)}}</h5>
                    @php  $GLOBALS['totalAssets'] += $total_assets; @endphp
                </td>
            </tr>
            <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
        @endforeach
        <tr>
            <td>
                <h3 class="text-purple">{{ __('general.total_assets') }}</h3>
            </td>
            <td class="text-right">
                <h3 class="text-purple">{{\App\Services\GeneralService::ledgerBalanceType($GLOBALS['totalAssets'],true)}}</h3>
            </td>
        </tr>
    </tbody>
</table>
</div>
<div style="width:4%;"></div>

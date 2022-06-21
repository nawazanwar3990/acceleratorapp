@php
    $GLOBALS['TotalAssertF']   = 0;
    $GLOBALS['TotalLiabilityF']= 0;
    $GLOBALS['Revenue']   = 0;
    $GLOBALS['CGS']   = 0;
    $GLOBALS['oIncome']   = 0;
    $GLOBALS['Expenses']   = 0;
@endphp
@include('dashboard.accounts.reports.components.profit-loss.revenue')
@include('dashboard.accounts.reports.components.profit-loss.cost-of-goods-sold')
@include('dashboard.accounts.reports.components.profit-loss.gross-profit')
@include('dashboard.accounts.reports.components.profit-loss.expenses')
@include('dashboard.accounts.reports.components.profit-loss.other-income')
@include('dashboard.accounts.reports.components.profit-loss.net-profit')

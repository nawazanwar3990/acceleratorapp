@include('mails.email-header')
<table style="width:700px;margin: 20px auto;">
    <tr>
        <td colspan="20" style="text-align: center;">
            <h1>
                {!! $mailData['subject'] !!}
            </h1>
            <p>
                {!! $mailData['description'] !!}
            </p>
            <p>
                {!! $mailData['link'] !!}
            </p>
        </td>
    </tr>
</table>
@include('mails.email-footer')

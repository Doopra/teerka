
<center>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tbody>
            <tr>
                <a href="{{ $url }}" style="display: inline-block;">
                    @if (trim($slot) === 'Laravel')
                <td align="center" class="v-text-align" style="padding-right: 0px;padding-left: 0px;"><img align="middle" alt="Image" border="0" height="35" src="https://hotels.ng/media/img/email/logo.png" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;" title="Image" width="150" /></td>
                @else
                {{ $slot }}
                @endif
            </a>
            </tr>
        </tbody>
    </table>

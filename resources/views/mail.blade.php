<h1><strong><u>Bestellbest&auml;tigung</u></strong></h1>
<p><strong>Ihre Bestellung (Nr. </strong><strong>{{$credential->getDeliveryID()}}</strong><strong>) vom </strong><strong>{{NOW()}}</strong></p>
<p>Hallo {{$credential->getFirstname()}}, deine Bestellung&nbsp;ist bei uns eingegangen - vielen Dank f&uuml;r dein Vertrauen in unseren Shop! Die folgenden Artikel wurden von dir bestellt:</p>
<br>
<table style='width:100%'>
    <tr>
        <th>Produkt</th>
        <th style='text-align:right;'>Anzahl</th>
        <th style='text-align:right;'>Einzelpreis</th>
        <th style='text-align:right;'>Preis</th>
    </tr>
    @php
        $total = 0;
    @endphp
    @foreach(session()->all()['products'] as $product)
        @if (isset($product['amount']) && $product['amount'] > 0)
            @php
            $total += $product['info']['price'] * $product['amount'];
            @endphp
            <tr>
                <td>{{ $product['info']['title'] }}</td>
                <td style='text-align:right;'>{{$product['amount']}}</td>
                <td style='text-align:right;'>CHF {{ number_format( $product['info']['price'],2, '.', '') }}</td>
                <td style='text-align:right;'>CHF {{ number_format( $product['info']['price']* $product['amount'],2, '.', '') }}</td>
            </tr>
        @endif
    @endforeach             
    <tr>
        <td><b>TOTAL</b></td>
        <td></td>
        <td></td>
        <td style='text-align:right;'><b>CHF {{number_format( $total,2, '.', '')}}</b></td>
    </tr>
</table>
<br>
<br>
<p>Du hast Fragen oder m&ouml;chtest deine Daten &auml;ndern? Dann melde dich bei unserem Customer Happiness Team unter <a href='mailto:gourmet.wallis@gmail.com'>gourmet.wallis@gmail.com</a>.</p>
<p>Die bestellten Artikel werden so rasch als m&ouml;glich an die folgende Adresse geschickt:</p>
<p>{{$credential->getFirstname()}} {{$credential->getLastname()}}<br /> {{$credential->getAddress()}} <br /> {{$credential->getZip()}} {{$credential->getPlace()}}<br /> {{$credential->getCountry()}}</p>
<p>Wir hoffen, Dich bald wieder in unserem Shop begr&uuml;ssen zu k&ouml;nnen und sind dir dankbar f&uuml;r ein positives Feedback in unserem G&auml;stebuch!</p>
<p>Mit freundlichen Gr&uuml;ssen</p>
<p>Ihr Online-Shop</p>
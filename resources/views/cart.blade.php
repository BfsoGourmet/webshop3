 <!-- Section-->
 <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Ihr Warenkorb</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        @if ($products)
                        @php
                            $total = 0;
                        @endphp
                            @foreach($products as $product)
                                @if (isset($product['amount']) && $product['amount'] > 0)
                                <!-- Produkt -->
                                @php
                                $total += $product['info']['price'] * $product['amount'];
                                @endphp

                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">{{ $product['info']['title'] }} </h6>
                                        <small class="text-muted">({{$product['amount']}} x CHF {{ number_format( $product['info']['price'],2, '.', '') }})<br>{{ $product['info']['short_description'] }}</small>
                                    </div>
                                    <span class="text-muted " style="text-align:right;">CHF {{ number_format( $product['info']['price']* $product['amount'],2, '.', '') }}<br><a onclick="removeFromCart(`{{$product['info']['sku']}}`)"><i class="bi bi-trash"></i></a></span>

                                </li>
                                @endif
                            @endforeach
                            <li class="list-group-item d-flex justify-content-between">
                                    <span>Total</span>
                                    <strong>CHF {{number_format( $total,2, '.', '')}}</strong>
                            </li>
                        @endif
                        @if (!$products)
                        <h6 class="my-0">sieht leer aus!</h6>
                        @endif
                    </ul>
                </div>
                @if ($products)
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Rechnungs- und Lieferadresse</h4>
                    <form class="needs-validation" action="/checkout/process">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Vorname</label>
                                <input type="text" class="form-control" name="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Vorname muss eingegeben werden.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Nachname</label>
                                <input type="text" class="form-control" name="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Nachname muss eingegeben werden.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted"></span></label>
                            <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
                            <div class="invalid-feedback">
                                Bitte geben Sie eine gültige Email-Adresse an.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Adresse</label>
                            <input type="text" class="form-control" name="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Bitte geben Sie Ihre Adresse ein.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Land</label>
                                <input type="text" class="form-control" name="country" placeholder="Schweiz" required>
                                <div class="invalid-feedback">
                                    Bitte geben Sie ein Land ein.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Ort</label>
                                <input type="text" class="form-control" name="place" placeholder="Musterstadt" required>
                                <div class="invalid-feedback">
                                    Bitte geben Sie einen Ort ein.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="PLZ">PLZ</label>
                                <input type="text" class="form-control" name="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <h4 class="mb-3">Zahlung</h4>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" name="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" name="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" name="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">CVV</label>
                                <input type="text" class="form-control" name="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Zahlen und bestellen</button>
                    </form>
                </div>
                @endif
            </div>
        </div>
    </section>

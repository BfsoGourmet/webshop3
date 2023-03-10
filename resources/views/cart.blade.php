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

                        <!-- Produkt -->
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">Produkt</h6>
                                <small class="text-muted">Kurzbeschr.</small>
                            </div>
                            <span class="text-muted">CHF 12</span>
                        </li>

                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (CHF)</span>
                            <strong>12</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Rechnungs- und Lieferadresse</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName">Vorname</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Vorname muss eingegeben werden.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Nachname</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Nachname muss eingegeben werden.
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">Email <span class="text-muted"></span></label>
                            <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
                            <div class="invalid-feedback">
                                Bitte geben Sie eine g??ltige Email-Adresse an.
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Adresse</label>
                            <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                            <div class="invalid-feedback">
                                Bitte geben Sie Ihre Adresse ein.
                            </div>
                        </div>

                        

                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Land</label>
                                <input type="text" class="form-control" id="country" placeholder="Schweiz" required>
                                <div class="invalid-feedback">
                                    Bitte geben Sie ein Land ein.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">Ort</label>
                                <input type="text" class="form-control" id="place" placeholder="Musterstadt" required>
                                <div class="invalid-feedback">
                                    Bitte geben Sie einen Ort ein.
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="PLZ">PLZ</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>
                        <!--
                        <hr class="mb-4">
                        <h4 class="mb-3">Zahlung</h4>
                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                    checked required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                    required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                    required>
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                    -->
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Zahlen und bestellen</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

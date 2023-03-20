import { AbstractB2bMpScenario } from '../../abstract-b2b-mp-scenario.js';

export class CheckoutScenario extends AbstractB2bMpScenario {
    constructor() {
        super();

        this.addressPageTrend = this.createTrendMetric('checkoutAddressPage');
        this.addressPageFormSubmitTrend = this.createTrendMetric('checkoutAddressPageFormSubmit');
        this.shipmentPageTrend = this.createTrendMetric('checkoutShipmentPage');
        this.shipmentPageFormSubmitTrend = this.createTrendMetric('checkoutShipmentPageFormSubmit');
        this.paymentPageTrend = this.createTrendMetric('checkoutPaymentPage');
        this.paymentPageFormSubmitTrend = this.createTrendMetric('checkoutPaymentPageFormSubmit');
        this.summaryPageTrend = this.createTrendMetric('checkoutSummaryPage');
        this.summaryPageFormSubmitTrend = this.createTrendMetric('checkoutSummaryPageFormSubmit');
        this.placeOrderPageTrend = this.createTrendMetric('checkoutPlaceOrderPage');
    }

    execute() {
        this.cartHelper.haveCartWithProducts(__ENV.numberOfItems);
        this.storefrontHelper.loginUser();

        //address
        const addressStepResponse = this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/checkout/address`);
        this.assertResponseBodyIncludes(addressStepResponse, 'Delivery Address');

        this.addressPageTrend.add(addressStepResponse.timings.duration);

        //address form submit
        const addressStepFormSubmitResponse = this.http.submitFormWithHttpAuth(addressStepResponse, {
            formSelector: 'form[name="addressesForm"]',
            fields: {
                'addressesForm[billingSameAsShipping]': '1' ,
                'checkout-full-addresses': 'company_business_unit_address_13',
                'addressesForm[shippingAddress][id_company_unit_address]': 13
            },
        });

        this.addressPageFormSubmitTrend.add(addressStepFormSubmitResponse.timings.duration);

        //shipment
        const shipmentStepResponse =  this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/checkout/shipment`);
        this.assertResponseBodyIncludes(shipmentStepResponse, 'Shipment 1 of 1');

        this.shipmentPageTrend.add(shipmentStepResponse.timings.duration);

        //shipment submit form
        const shipmentStepFormSubmitResponse = this.http.submitFormWithHttpAuth(shipmentStepResponse, {
            formSelector: 'form[name="shipmentCollectionForm"]',
            fields: {
                'shipmentCollectionForm[shipmentGroups][0][shipment][shipmentSelection]': 1
            },
        });

        this.shipmentPageFormSubmitTrend.add(shipmentStepFormSubmitResponse.timings.duration);

        //payment
        const paymentStepResponse =  this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/checkout/payment`);
        this.assertResponseBodyIncludes(paymentStepResponse, 'Payment method');

        this.paymentPageTrend.add(paymentStepResponse.timings.duration);

        //payment submit form
        const paymentStepFormSubmitResponse = this.http.submitFormWithHttpAuth(paymentStepResponse, {
            formSelector: 'form[name="paymentForm"]',
            fields: {
                'paymentForm[paymentSelection]': 'dummyMarketplacePaymentInvoice',
                'paymentForm[dummyMarketplacePaymentInvoice][dateOfBirth]': '12.12.2000'
            },
        });
        this.paymentPageFormSubmitTrend.add(paymentStepFormSubmitResponse.timings.duration);

        //summary
        const summaryStepResponse =  this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/checkout/summary`);
        this.assertResponseBodyIncludes(summaryStepResponse, 'Complete checkout');

        this.summaryPageTrend.add(summaryStepResponse.timings.duration);

        //summary submit form and place order
        const summaryStepResponseFormSubmitResponse = this.http.submitFormWithHttpAuth(summaryStepResponse, {
            formSelector: 'form[name="summaryForm"]',
            fields: {
                'acceptTermsAndConditions': 1
            },
        });

        const placeOrderResponse =  this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/checkout/place-order`);
        const successPageResponse = this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/checkout/success`);

        this.assertResponseBodyIncludes(successPageResponse, 'Your order has been placed successfully.');

        this.summaryPageFormSubmitTrend.add(summaryStepResponseFormSubmitResponse.timings.duration);
        this.placeOrderPageTrend.add(placeOrderResponse.timings.duration);
    }
}

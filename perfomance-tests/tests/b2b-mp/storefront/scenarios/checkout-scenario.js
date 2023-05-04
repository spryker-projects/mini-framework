import { AbstractB2bMpScenario } from '../../abstract-b2b-mp-scenario.js';
import { group } from 'k6';

export class CheckoutScenario extends AbstractB2bMpScenario {
    execute() {
        this.cartHelper.haveCartWithProducts(__ENV.numberOfItems);
        this.storefrontHelper.loginUser();

        let self = this;

        group('Checkout', function () {
            self.addressPage();
            self.shipmentPage();
            self.paymentPage();
            self.summaryPage();
        });
    }

    addressPage() {
        //address
        const addressStepResponse = this.http.sendGetRequest(`${this.getStorefrontBaseUrl()}/en/checkout/address`);
        this.assertResponseBodyIncludes(addressStepResponse, 'Delivery Address');

        //address form submit
        this.http.submitForm(addressStepResponse, {
            formSelector: 'form[name="addressesForm"]',
            fields: {
                'addressesForm[billingSameAsShipping]': '1' ,
                'checkout-full-addresses': 'company_business_unit_address_13',
                'addressesForm[shippingAddress][id_company_unit_address]': 13
            },
        });
    }

    shipmentPage() {
        const shipmentStepResponse =  this.http.sendGetRequest(`${this.getStorefrontBaseUrl()}/en/checkout/shipment`);
        this.assertResponseBodyIncludes(shipmentStepResponse, 'Shipment 1 of 1');

        //shipment submit form
        this.http.submitForm(shipmentStepResponse, {
            formSelector: 'form[name="shipmentCollectionForm"]',
            fields: {
                'shipmentCollectionForm[shipmentGroups][0][shipment][shipmentSelection]': 1
            },
        });
    }

    paymentPage() {
        const paymentStepResponse =  this.http.sendGetRequest(`${this.getStorefrontBaseUrl()}/en/checkout/payment`);
        this.assertResponseBodyIncludes(paymentStepResponse, 'Payment method');

        //payment submit form
        this.http.submitForm(paymentStepResponse, {
            formSelector: 'form[name="paymentForm"]',
            fields: {
                'paymentForm[paymentSelection]': 'dummyMarketplacePaymentInvoice',
                'paymentForm[dummyMarketplacePaymentInvoice][dateOfBirth]': '12.12.2000'
            },
        });
    }

    summaryPage() {
        const summaryStepResponse =  this.http.sendGetRequest(`${this.getStorefrontBaseUrl()}/en/checkout/summary`);
        this.assertResponseBodyIncludes(summaryStepResponse, 'Complete checkout');

        //summary submit form and place order
        this.http.submitForm(summaryStepResponse, {
            formSelector: 'form[name="summaryForm"]',
            fields: {
                'acceptTermsAndConditions': 1
            },
        });

        this.http.sendGetRequest(`${this.getStorefrontBaseUrl()}/en/checkout/place-order`);
        const successPageResponse = this.http.sendGetRequest(`${this.getStorefrontBaseUrl()}/en/checkout/success`);

        this.assertResponseBodyIncludes(successPageResponse, 'Your order has been placed successfully.');
    }
}

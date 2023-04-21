import { AbstractB2bMpScenario } from '../../abstract-b2b-mp-scenario.js';
import { group } from 'k6';

export class HomepageToAddToCartScenario extends AbstractB2bMpScenario {
    execute() {
        let self = this;

        group('Homepage to add to cart', function () {
            const params = self.cartHelper.getParamsWithAuthorization();
            const carts = self.cartHelper.getCarts(params);
            self.cartHelper.deleteCarts(carts, params);
            self.storefrontHelper.loginUser();

            //home page
            const homePageResponse = self.http.sendGetRequestWithHttpAuth(self.environmentConfig.storefrontUrl);
            self.assertResponseBodyIncludes(homePageResponse, 'Your Experience is Our Priority');

            //search page
            const searchPageResponse = self.http.sendGetRequestWithHttpAuth(`${self.environmentConfig.storefrontUrl}/en/search?q=100429`);
            self.assertResponseBodyIncludes(searchPageResponse, '1 Items found');

            //PDP page
            const pdpPageResponse = self.http.sendGetRequestWithHttpAuth(`${self.environmentConfig.storefrontUrl}/en/flip-chart-hoehenverstellbar-mit-teleskopbeinen-M39654`);
            self.assertResponseBodyIncludes(pdpPageResponse, 'Add to Cart');

            //add to cart form submit
            const addToCartFormSubmitResponse = self.http.submitFormWithHttpAuth(pdpPageResponse, {
                formSelector: 'form[name="addToCartForm_100429-"]'
            });
            self.assertResponseStatus(addToCartFormSubmitResponse, 302);

            //cart page
            const cartPageResponse = self.http.sendGetRequestWithHttpAuth(`${self.environmentConfig.storefrontUrl}/en/cart`);
            self.assertResponseBodyIncludes(cartPageResponse, '1 Items');
        });
    }
}

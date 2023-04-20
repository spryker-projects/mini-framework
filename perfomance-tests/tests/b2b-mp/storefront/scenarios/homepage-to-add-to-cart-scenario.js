import { AbstractB2bMpScenario } from '../../abstract-b2b-mp-scenario.js';
import { group } from 'k6';

export class HomepageToAddToCartScenario extends AbstractB2bMpScenario {
    execute() {
        group('Homepage to add to cart', function () {
            const params = this.cartHelper.getParamsWithAuthorization();
            const carts = this.cartHelper.getCarts(params);
            this.cartHelper.deleteCarts(carts, params);
            this.storefrontHelper.loginUser();

            //home page
            const homePageResponse = this.http.sendGetRequestWithHttpAuth(this.environmentConfig.storefrontUrl);
            this.assertResponseBodyIncludes(homePageResponse, 'Your Experience is Our Priority');

            //search page
            const searchPageResponse = this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/search?q=100429`);
            this.assertResponseBodyIncludes(searchPageResponse, '1 Items found');

            //PDP page
            const pdpPageResponse = this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/flip-chart-hoehenverstellbar-mit-teleskopbeinen-M39654`);
            this.assertResponseBodyIncludes(pdpPageResponse, 'Add to Cart');

            //add to cart form submit
            const addToCartFormSubmitResponse = this.http.submitFormWithHttpAuth(pdpPageResponse, {
                formSelector: 'form[name="addToCartForm_100429-"]'
            });
            this.assertResponseStatus(addToCartFormSubmitResponse, 302);

            //cart page
            const cartPageResponse = this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/cart`);
            this.assertResponseBodyIncludes(cartPageResponse, '1 Items');
        });
    }
}

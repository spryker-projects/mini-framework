import { AbstractB2bMpScenario } from '../../abstract-b2b-mp-scenario.js';

export class HomepageToAddToCartScenario extends AbstractB2bMpScenario {
    constructor() {
        super();

        this.homePageTrend = this.createTrendMetric('HomepageToAddToCart_homePage');
        this.searchPageTrend = this.createTrendMetric('HomepageToAddToCart_searchPage');
        this.pdpPageTrend = this.createTrendMetric('HomepageToAddToCart_pdpPage');
        this.addToCartFormSubmitTrend = this.createTrendMetric('HomepageToAddToCart_addToCart');
        this.cartPageTrend = this.createTrendMetric('HomepageToAddToCart_cartPage');
    }

    execute() {
        const params = this.cartHelper.getParamsWithAuthorization();
        const carts = this.cartHelper.getCarts(params);
        this.cartHelper.deleteCarts(carts, params);
        this.storefrontHelper.loginUser();

        //home page
        const homePageResponse = this.http.sendGetRequestWithHttpAuth(this.environmentConfig.storefrontUrl);
        this.assertResponseBodyIncludes(homePageResponse, 'Your Experience is Our Priority');
        this.homePageTrend.add(homePageResponse.timings.duration);

        //search page
        const searchPageResponse = this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/search?q=100429`);
        this.assertResponseBodyIncludes(searchPageResponse, '1 Items found');
        this.searchPageTrend.add(searchPageResponse.timings.duration);

        //PDP page
        const pdpPageResponse = this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/flip-chart-hoehenverstellbar-mit-teleskopbeinen-M39654`);
        this.assertResponseBodyIncludes(pdpPageResponse, 'Add to Cart');
        this.pdpPageTrend.add(pdpPageResponse.timings.duration);

        //add to cart form submit
        const addToCartFormSubmitResponse = this.http.submitFormWithHttpAuth(pdpPageResponse, {
            formSelector: 'form[name="addToCartForm_100429-"]'
        });
        this.assertResponseStatus(addToCartFormSubmitResponse, 302);
        this.addToCartFormSubmitTrend.add(addToCartFormSubmitResponse.timings.duration);

        //cart page
        const cartPageResponse = this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/cart`);
        this.assertResponseBodyIncludes(cartPageResponse, '1 Items');
        this.cartPageTrend.add(cartPageResponse.timings.duration);
    }
}

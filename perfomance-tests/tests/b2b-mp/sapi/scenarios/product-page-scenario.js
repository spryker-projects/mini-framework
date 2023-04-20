import { AbstractB2bMpScenario } from '../../abstract-b2b-mp-scenario.js';
import { check } from 'k6';

export class ProductPageScenario extends AbstractB2bMpScenario {
    getBaseUrl() {
        return `${this.environmentConfig.glueAPIUrl}`;
    }

    execute() {
        const requestParams = this.cartHelper.getParamsWithAuthorization();

        const productPage = this.http.sendGetRequest(
            this.getBaseUrl() + `/concrete-products/100429`, requestParams
        );
        this.assertResponseStatus(productPage, 200);
    }
}

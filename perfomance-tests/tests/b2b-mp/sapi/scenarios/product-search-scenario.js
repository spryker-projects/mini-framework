import { AbstractB2bMpScenario } from '../../abstract-b2b-mp-scenario.js';

export class ProductSearchScenario extends AbstractB2bMpScenario {
    getBaseUrl() {
        return `${this.environmentConfig.glueAPIUrl}`;
    }

    execute() {
        const requestParams = this.cartHelper.getParamsWithAuthorization();

        const productSearchRequest = this.http.sendGetRequest(
            this.getBaseUrl() + `/catalog-search?q=100429`, requestParams
        );
        this.assertResponseStatus(productSearchRequest, 200);
    }
}

import { AbstractB2bMpScenario } from '../../abstract-b2b-mp-scenario.js';

export class CartsScenario extends AbstractB2bMpScenario {
    constructor() {
        super();
    }

    getBaseUrl() {
        return `${this.environmentConfig.glueAPIUrl}`;
    }

    execute() {
        const requestParams = this.cartHelper.getParamsWithAuthorization();

        const response = this.http.sendGetRequest(
            this.getBaseUrl() + `/carts`, requestParams
        );
        this.assertResponseStatus(response, 200);
    }
}

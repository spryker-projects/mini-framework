import { AbstractScenario } from '../../../abstract-scenario.js';

export class GetCartScenario extends AbstractScenario {
    execute() {
        const cartId = this.cartHelper.haveCartWithProducts(__ENV.numberOfItems);
        const requestParams = this.cartHelper.getParamsWithAuthorization();

        const cartResponse = this.http.sendGetRequest(
            `${this.cartHelper.getCartsUrl()}/${cartId}/?include=items`, requestParams
        );

        this.assertResponseStatus(cartResponse);
    }
}

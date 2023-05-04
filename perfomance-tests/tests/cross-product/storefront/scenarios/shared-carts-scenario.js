import { AbstractScenario } from '../../../abstract-scenario.js';
import { group } from 'k6';

export class SharedCartsScenario extends AbstractScenario {
    execute() {
        let self = this;

        group('Cart', function () {
            const requestParams = self.cartHelper.getParamsWithAuthorization();

            const cartsResponse = self.http.sendGetRequest(
                self.getStorefrontApiBaseUrl() + `/carts`, requestParams
            );
            self.assertResponseStatus(cartsResponse, 200);
        });
    }
}

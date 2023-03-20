import { AbstractB2bMpScenario } from '../../abstract-b2b-mp-scenario.js';

export class GetCartScenario extends AbstractB2bMpScenario {
    constructor() {
        super();

        this.glueApiGetCart1ItemTrend = this.createTrendMetric('GlueApiGetCart1Item');
    }

    execute() {
        const cartId = this.cartHelper.haveCartWithProducts(__ENV.numberOfItems);
        const requestParams = this.cartHelper.getParamsWithAuthorization();

        const cartResponse = this.http.sendGetRequest(
            `${this.cartHelper.getCartsUrl()}/${cartId}/?include=items`, requestParams
        );

        this.assertResponseStatus(cartResponse);

        this.glueApiGetCart1ItemTrend.add(cartResponse.timings.duration);
    }
}

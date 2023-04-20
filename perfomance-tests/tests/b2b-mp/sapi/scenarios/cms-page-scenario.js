import { AbstractB2bMpScenario } from '../../abstract-b2b-mp-scenario.js';

export class CmsPageScenario extends AbstractB2bMpScenario {
    getBaseUrl() {
        return `${this.environmentConfig.glueAPIUrl}`;
    }

    execute() {
        const requestParams = this.cartHelper.getParamsWithAuthorization();

        const cmsPageRequest = this.http.sendGetRequest(
            this.getBaseUrl() + `/cms-pages/10014bd9-4bba-5a54-b84f-31b4b7efd064`, requestParams
        );
        this.assertResponseStatus(cmsPageRequest, 200);
    }
}

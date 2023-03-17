import { Http } from '../lib/Http.js';
import { loadEnvironmentConfig } from '../lib/utils.js';
import { CartHelper } from '../helpers/CartHelper.js';
import { StorefrontHelper } from '../helpers/StorefrontHelper.js';
import { Trend } from 'k6/metrics';
import { fail, check } from "k6";

export class AbstractScenario {
    ENVIRONMENT() {
        throw new Error('Abstract constant must be implemented.');
    }

    constructor() {
        if (this.constructor == AbstractScenario) {
            throw new Error("Abstract classes can't be instantiated.");
        }

        this.http = new Http(this.ENVIRONMENT());
        this.environmentConfig = loadEnvironmentConfig(this.ENVIRONMENT());
        this.cartHelper = new CartHelper(this.environmentConfig, this.http);
        this.storefrontHelper = new StorefrontHelper(this.environmentConfig, this.http);
    }

    createTrendMetric(name) {
        return new Trend(`${this.ENVIRONMENT()}_${name}`);
    }

    assertResponseBodyIncludes(response, text) {
        if (
            !check(response, {
                [`Verify ${text} text`]: (r) => r.body.includes(text),
            })
        ) {
            fail();
        }
    }

    assertResponseStatus(response, expectedStatus = 200) {
        check(response, {
            [`Response status is ${expectedStatus}`]: r => r.status === expectedStatus
        });
    }
}

import http from 'k6/http';
import encoding from 'k6/encoding';
import { fail } from "k6";

export class Http {
    constructor(environment) {
        this.authorizationHeaders = this._getAuthorizationHeaders(environment);
    }

    static sendGetRequestWithHttpAuth(url) {
        return http.get(url, this.authorizationHeaders);
    }

    submitFormWithHttpAuth(response, formData)
    {
        formData.params = this.authorizationHeaders;
        formData.params.redirects = 0;

        return response.submitForm(formData);
    }

    static sendPostRequest(url, body, params) {
        return http.post(url, body, params);
    }

    static sendGetRequest(url, params) {
        return http.get(url, params);
    }

    static sendDeleteRequest(url, body, params) {
        return http.del(url, body, params);
    }

    _getAuthorizationHeaders(environment) {
        if (!environment) {
            fail('Environment must be specified to send requests with HTTP authentication.');
        }

        const username = eval(`__ENV.${environment}_AUTH_USERNAME`);
        const password = eval(`__ENV.${environment}_AUTH_PASSWORD`);

        if (!username || !password) {
            fail('Username and password must to be specified to send requests with HTTP authentication.');
        }

        return {
            headers: {
                'Authorization': `Basic ${encoding.b64encode(`${username}:${password}`)}`,
            }
        };
    }
}

import { fail, check } from "k6";

export class StorefrontHelper {
    constructor(environmentConfig, http) {
        this.environmentConfig = environmentConfig;
        this.http = http;
    }

    loginUser() {
        const loginResponse = this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/login`);

        if (
            !check(loginResponse, {
                'Verify Login page text': (r) => r.body.includes('Access your account'),
            })
        ) {
            fail();
        }

        this.http.submitFormWithHttpAuth(loginResponse, {
            formSelector: 'form[name="loginForm"]',
            fields: { 'loginForm[email]': 'sonia@spryker.com', 'loginForm[password]': 'change123' }
        });

        const overviewResponse = this.http.sendGetRequestWithHttpAuth(`${this.environmentConfig.storefrontUrl}/en/customer/overview`);

        if (
            !check(overviewResponse, {
                'Verify Overview page': (r) => r.body.includes('Overview'),
            })
        ) {
            fail();
        }
    }
}

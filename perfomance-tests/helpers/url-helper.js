export class UrlHelper {
    constructor(environmentConfig, http) {
        this.environmentConfig = environmentConfig;
    }

    getStorefrontBaseUrl() {
        return this._replaceUrlStore(this.environmentConfig.storefrontUrl);
    }

    getStorefrontApiBaseUrl() {
        return this._replaceUrlStore(this.environmentConfig.storefrontApiUrl);
    }

    getBackofficeBaseUrl() {
        return this._replaceUrlStore(this.environmentConfig.backofficeUrl);
    }

    getBackofficeApiBaseUrl() {
        return this._replaceUrlStore(this.environmentConfig.backofficeApiUrl);
    }

    _replaceUrlStore(url) {
        const availableStores = this.environmentConfig.stores;

        if (!availableStores) {
            throw new Error('Stores are not defined.');
        }

        const store = __ENV.STORE ? availableStores.find(store => store === __ENV.STORE) : availableStores[0];

        if (!store) {
            throw new Error('Store not found');
        }

        return url.replace('%store%', store);
    }
}

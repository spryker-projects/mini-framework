import { group, check } from "k6";
import { loadOptions, loadEnvironmentConfig, logError } from "../lib/utils.js";
import { sendGetRequestWithHttpAuth } from "../lib/http.js";

export let options = loadOptions('default-standalone');
export let environmentConfig = loadEnvironmentConfig('b2c');

export function setup() { return environmentConfig; }

export default function (data) {
    group("Example tests", function() {
        let response = sendGetRequestWithHttpAuth(data.baseUrl, {"username": data.httpauth_username, "password": data.httpauth_password});
        check(response, { "is success status code": 200}) || logError(response);
    });

};
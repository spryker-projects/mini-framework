import { group, check } from "k6";
import { logError, loadOptions, loadEnvironmentConfig } from "../lib/utils.js";
import {sendGetRequestWithHttpAuth} from "../lib/http.js";

export let options = loadOptions('default-standalone');
export let environmentConfig = loadEnvironmentConfig('b2c');

export function setup() { return environmentConfig; }

export default function(data) {

    group("Check Homepage", function() {
        let response = sendGetRequestWithHttpAuth(data.baseUrl, {"username": data.httpauth_username, "password": data.httpauth_password});
        check(response, { "is success status code": 200}) || logError(response);
    });

};

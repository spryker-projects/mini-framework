import { group, check } from "k6";
import { logError, loadOptions, loadServiceConfig } from "../lib/utils.js";
import {sendGetRequestWithHttpAuth, sendPostRequestWithHttpAuth} from "../lib/http.js";

export let options = loadOptions('default-standalone');
export let serviceConfig = loadServiceConfig('b2c');

export function setup() { return serviceConfig; }

export default function(data) {

    group("Check Homepage", function() {
        let response = sendGetRequestWithHttpAuth(data.baseUrl, {"username": data.username, "password": data.password});
        check(response, { "is success status code": 200}) || logError(response);
    });

};

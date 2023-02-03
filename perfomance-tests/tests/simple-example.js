import { group, check } from "k6";
import { loadOptions, loadEnvironmentConfig, logError } from "../lib/utils.js";
import http from 'k6/http';

export let options = loadOptions('default-standalone');
export let environmentConfig = loadEnvironmentConfig('b2c');

export function setup() { return environmentConfig; }

export default function (data) {
    group("Example tests", function() {
        let response = http.get(data.baseUrl);
        check(response, { "is success status code": 200}) || logError(response);
    });

};
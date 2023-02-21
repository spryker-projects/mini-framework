import { Rate } from "k6/metrics";
import { fail } from "k6";

export let errorRate = new Rate("errors");

export function loadOptions(optionsFile) {
    return JSON.parse(open(__ENV.PROJECT_DIR + "/options/" + optionsFile + ".json"))
}

export function loadEnvironmentConfig(serviceFile) {
    if (!__ENV.K6_HOSTENV) {
        fail('K6_HOSTENV has not be set. Exiting...');
    }

    var config = JSON.parse(open(__ENV.PROJECT_DIR + "/environments/" + serviceFile + ".json"))[__ENV.K6_HOSTENV];
    return Object.assign(config, { "environment": __ENV.K6_HOSTENV });
}

export function logError(response) {
    errorRate.add(1);
    console.log("API returned response code '" + response.status + "' for url: " + response.url);
}
import { loadOptions, loadEnvironmentConfig } from "../lib/utils.js";
import {textSummary } from 'https://jslib.k6.io/k6-summary/0.0.1/index.js';

export let options = loadOptions('default-scenarios');
export let serviceConfig = loadEnvironmentConfig('b2c');

export function setup() { return serviceConfig; }

export { default as exampleScenarioTest } from './example-scenario-test.js';

export default function (data) {

};

export function handleSummary(data) {
    const med_latency = data.metrics.iteration_duration.values.med;
    const latency_message = `The median latency was ${med_latency}\n`;
    return {
        'stdout': textSummary(data, { indent: ' ', enableColors: true }), // Show the text summary to stdout...
    };
}

import { CartsScenario } from "../scenarios/carts-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();

options.scenarios = {
    CartPage1VUS: {
        exec: 'executeCartScenario',
        executor: 'shared-iterations',
        vus: 1,
        iterations: 10
    },
    CartPage10Vus: {
        exec: 'executeCartScenario',
        executor: 'shared-iterations',
        vus: 10,
        iterations: 10
    }
};

const scenario = new CartsScenario();
export function executeCartScenario() {
    scenario.execute();
}

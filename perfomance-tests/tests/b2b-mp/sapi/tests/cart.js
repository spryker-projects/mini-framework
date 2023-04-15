import { CartScenario } from "../scenarios/cart-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
    CmsPage1VUS: {
        exec: 'executeCartScenario',
        executor: 'shared-iterations',
        vus: 1,
        iterations: 2,
    },
    CmsPage10Vus: {
        exec: 'executeCartScenario',
        executor: 'shared-iterations',
        vus: 10,
        iterations: 10,
    },
};

const scenario = new CartScenario();
export function executeCartScenario() {
    scenario.execute();
}

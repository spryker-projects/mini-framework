import { GetCartScenario } from "../../../shared/scenarios/get-cart-scenario.js";
import { loadDefaultOptions } from "../../../../lib/utils.js";

export const options = loadDefaultOptions();
options.scenarios = {
    GetCart_70_items: {
        exec: 'executeGetCartScenario',
        executor: 'shared-iterations',
        env: {
            numberOfItems: __ENV.numberOfItems || '70'
        },
        vus: 1,
        iterations: 2
    },
};

const getCartScenario = new GetCartScenario('B2B_MP');

export function executeGetCartScenario() {
    getCartScenario.execute();
}

